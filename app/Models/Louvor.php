<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Louvor extends Model
{
    use HasFactory;

    protected $table = 'louvores';

    protected $fillable = [
        'nome_louvor',
        'nome_versao_louvor',
        'tonalidade',
        'vocalista_id',
    ];

    public function vocalista()
    {
        return $this->belongsTo(Vocalista::class, 'vocalista_id');
    }
}
