<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licence extends Model
{
    use HasFactory;

    // Fonction qui précise la relation avec la table "Users"
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
