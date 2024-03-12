<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Carbon;
use App\Models\Category;

class NoteController extends Controller
{
    public function index()
{
    $user = auth()->user();

    if ($user) {
        // Obtener las notas del usuario
        $notes = $user->notes;

        // Obtener las categorías relevantes del usuario
        $categories = Category::where('idUsu', $user->idUsu)->get();

        // Pasar las notas y las categorías relevantes a la vista
        return view('notesIndex', compact('notes', 'categories'));
    } 
}

    public function show(string $id)
    {
        $note = Note::find($id);

        return view('notesShow', ["note" => $note ]);
    }

    public function store(Request $request)
    {
        date_default_timezone_set('Europe/Madrid');
        $date = Carbon::now()->format("Y-m-d");

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $note = new Note();
        $note->title = $request->title;
        $note->content = $request->content;
        $note->date = $date;
        $note->idUsu = auth()->id();
        $note->save();
        $note->category()->attach(Category::find($request->idCat));

        return redirect()->route('notes.index');
    }

    public function edit(int $id)
    {
        $categories = Category::all();
        $note = Note::find($id);
        return view('notes.notesEdit', ["note" => $note, "categories" => $categories]);
    }

    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();

        return redirect()->route('notes.index');
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return redirect()->route('notes.index');
    }

    public function create()
    {
        $categories = Category::all(); 
        return view('notes.notesCreate', ["categories" => $categories]);
    }

    public function attachCat(string $idCat, string $idNot){
        $cat= Category::find($idCat);
        $note= Note::find($idNot);
        $note->category()->attach($cat);
        return redirect()->route('notes.index');
    }
    
    public function detachCat(string $idCat, string $idNot){
        $cat = Category::find($idCat);
        $note = Note::find($idNot);
        $note->category()->detach($cat);
        return redirect()->route('notes.index');
    }
}
