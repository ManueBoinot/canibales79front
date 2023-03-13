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
        'date_naiss',
        'vaccins'
    ];


    // Fonction qui précise la relation avec la table "Users"
    public function users()
    {
        return $this->belongsToMany(User::class)->using(ChienUser::class);
    }


    public function age(Chien $chien)
    {
        $anniv = $chien->date_naiss;
        $auj = now();
        $interval = $auj->diff($anniv);
        return $interval->format('%y ans, %m mois');
    }

    public function afficherVaccins() {
        $vaccins = 'uploads\\vaccinsChiens\\1677334031.jpg';
        $file_descriptor = fopen($vaccins, 'r');
        $size = filesize($vaccins);
        $data = fread($file_descriptor, $size);
        return $data;
    }

}
