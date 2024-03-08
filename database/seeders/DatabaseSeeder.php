<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Category::create([
            'nameCat' => 'Sin Categoria',
            'descriptionCat' => 'Notas sin categoria',
            'idCat' => '1',
            'idUsu' => '1',
        ]);
        $categories = \App\Models\Category::factory(5)->create();
        
        \App\Models\Note::factory(10)->create()
        ->each(function ($note) use ($categories) {
            $note->category()->attach($categories->random(1));
        });
    }
}
