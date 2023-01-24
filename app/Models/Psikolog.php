<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psikolog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tags',
        'sipp',
        'education',
        'image',
        'about',
    ];

    // Relationship with Konseling
    public function konseling() {
        return $this->hasMany(Konseling::class, 'psikolog_id');
    }
}
