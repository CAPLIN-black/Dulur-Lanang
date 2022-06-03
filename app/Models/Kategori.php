<?php

namespace App\Models;

use App\Models\Film;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function film(){
        return $this->hasMany(Film::class);
    }
}
