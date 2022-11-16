<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $guarded = [
        "id"
    ];
    
    public function komentar(){
        return $this->hasMany(Komentar::class);
    }

    public function favorit(){
        return $this->hasMany(Favorit::class);
    }

    public function resep(){
        return $this->hasMany(Resep::class);
    }
}
