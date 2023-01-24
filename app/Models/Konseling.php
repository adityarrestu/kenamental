<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konseling extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'psikolog_id',
        'jadwal',
    ];

    // Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship To Psikolog
    public function psikolog() {
        return $this->belongsTo(Psikolog::class, 'psikolog_id');
    }
}
