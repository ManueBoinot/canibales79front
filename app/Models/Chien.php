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
        'date_naissance',
        'vaccins'
    ];

    // Fonction qui précise la relation avec la table "Users"
    public function users()
    {
        return $this->belongsToMany(User::class)->using(ChienUser::class);
    }

    // Fonction qui calcule l'âge d'un chien
    public function age(Chien $chien)
    {
        $anniv = $chien->date_naissance;
        $auj = now();
        $interval = $auj->diff($anniv);
        return $interval->format('%y ans, %m mois');
    }
}
