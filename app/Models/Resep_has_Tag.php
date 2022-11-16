<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep_has_Tag extends Model
{
    use HasFactory;
    protected $guarded = [
        "id"
    ];
}
