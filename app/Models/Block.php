<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;
    protected $table = 'blocks';
    protected $fillable = [
        'id',
        'block_name',
        'building_id', 
        'timestamps',
    ];
    public function building()
    {
        return $this->belongsTo(Building::class);
    }
}
