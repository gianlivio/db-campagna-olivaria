<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Molitura extends Model
{
    protected $table = 'molitura';

    protected $fillable = [
        'data',
        'frantoio',
        'terreno',
        'kg_olive',
        'varieta',
        'litri_olio',
        'resa',
    ];
}
