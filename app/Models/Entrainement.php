<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrainement extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'heure',
        'commentaire'
    ];

    // Fonction qui précise la relation avec la table "Circuits"
    public function circuit()
    {
        return $this->belongsTo(Circuit::class);
    }
}
