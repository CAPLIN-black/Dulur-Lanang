<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Film extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
    public function genre(){
        return $this->belongsToMany(Genre::class);
    }
}
