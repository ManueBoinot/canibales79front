<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{
    use HasFactory;

    protected $fillable = [
        'difficulte',
        'code_postal',
        'commune',
        'gps_depart',
        'distance',
        'denivele'
    ];

    // Fonction qui précise la relation avec la table "Entrainements"
    public function entrainements()
    {
        return $this->hasMany(Entrainement::class);
    }

    // Fonction qui précise la relation avec la table "Disciplines"
    public function disciplines()
    {
        return $this->belongsToMany(Discipline::class)->using(CircuitDiscipline::class);
    }
}
