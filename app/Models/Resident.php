<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;
    protected $table = 'residents';
    protected $fillable = [
        'id',
        'nome',
        'bloco',
        'predio',      
        'apartamento',
        'timestamps',
    ];
}
