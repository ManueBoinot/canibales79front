<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    // Fonction qui précise la relation avec la table "Circuits"
    public function circuits()
    {
        return $this->belongsToMany(Circuit::class)->using(Accessibilite::class);
    }
}
