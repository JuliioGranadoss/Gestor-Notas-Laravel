<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $primaryKey = 'idCat';

    protected $fillable = [
        'nameCat',
        'descriptionCat',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'idUsu');
    }

    public function notes()
    {
        return $this->belongsToMany(Note::class, 'category_note');
    }
}
