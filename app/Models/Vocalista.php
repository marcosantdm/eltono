<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vocalista extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_vocalista',
    ];

    public function louvores()
    {
        return $this->hasMany(Louvor::class, 'vocalista_id', 'id');
    }
}
