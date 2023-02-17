<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'race',
        'categorie_2',
        'date_naiss'
    ];

    // Fonction qui précise la relation avec la table "Vaccins"
    public function vaccins()
    {
        return $this->hasMany(Vaccin::class)->using(StatutVaccinal::class);
    }

    // Fonction qui précise la relation avec la table "Users"
    public function users()
    {
        return $this->belongsToMany(User::class)->using(Equipe::class);
    }
}
