<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Carbon;

class NoteController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user) {
            $notes = $user->notes;
            
            return view('notesIndex', ["notes" => $notes]);
            
        } else {
            return redirect()->route('login');
        }
    }

    public function show(string $id)
    {
        $note = Note::find($id);

        return view('notesShow', ["note" => $note ]);
    }

    public function create()
    {
        return view('notes.notesCreate');
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

        return redirect()->route('notes.index');
    }

    public function edit(int $id)
    {
        $note = Note::find($id);
        return view('notes.notesEdit', ["note" => $note]);
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
}
