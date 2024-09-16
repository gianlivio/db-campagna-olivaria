<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpeseBreveTermine extends Model
{
    protected $table = 'spese_breve_termine';

    protected $fillable = [
        'molitura',
        'operai',
        'benza',
        'spedizioni',
        'imbottigliamento',
    ];
}
