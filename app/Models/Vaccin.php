<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom'
    ];

    // Fonction qui précise la relation avec la table "Chiens"
    public function chiens()
    {
        return $this->belongsToMany(Chien::class)->using(ChienVaccin::class)->withPivot('date');
    }


}
