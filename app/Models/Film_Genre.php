<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film_Genre extends Model
{
    use HasFactory;
    protected $table = 'film_genre';
    protected $fillable = ['film_id', 'genre_id'];
}
