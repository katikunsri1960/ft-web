<?php

namespace App\Models\Profiles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryDosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'jurusan_prodi'
    ];
}