<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
    protected $table = 'buildings';
    protected $fillable = [
        'id',
        'nome_predio',     
        'apartamentos',
        'timestamps',
    ];
    
    public function blocks()
    {
        return $this->hasMany(Block::class);
    }
}