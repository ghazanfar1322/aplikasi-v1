<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fitrah extends Model
{
    use HasFactory;
    protected $table = 'fitrah';
    protected $fillable = [
        'name',
        'estetika',
        'perkembangan',
        'iman',
        'bakat',
        'belajar',
        'sosial',
        'jasmani',
        'seksualitas',
    ];
}
