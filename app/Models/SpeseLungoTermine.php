<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpeseLungoTermine extends Model
{
    protected $table = 'spese_lungo_termine';

    protected $fillable = [
        'descrizione',
        'importo',
    ];
}
