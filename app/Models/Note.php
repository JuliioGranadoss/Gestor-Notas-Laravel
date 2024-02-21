<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $table = 'notes';
    
    protected $primaryKey = 'idNot';

    protected $fillable = [
        'title',
        'content',
        'date',
        'image',
    ];

    public function user():\App\Models\User
    {
        return $this->belongsTo(User::class, 'idUsu')->first();

    }

    public function category():\App\Models\Category
    {
        return $this->belongsTo(Category::class, 'idCat')->first();
    }
}
