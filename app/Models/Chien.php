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
        return $this->belongsToMany(Vaccin::class)->using(ChienVaccin::class)->withPivot('date');
    }

    // Fonction qui précise la relation avec la table "Users"
    public function users()
    {
        return $this->belongsToMany(User::class)->using(ChienUser::class);
    }
}
