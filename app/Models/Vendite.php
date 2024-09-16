<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendite extends Model
{
    protected $table = 'vendite';

    protected $fillable = [
        'nome_cliente',
        'numero',
        'email',
        'quantita_ordinata',
        'costo_imbottigliamento',
        'costo_spedizione',
        'incasso',
        'indirizzo_spedizione',
    ];
}
