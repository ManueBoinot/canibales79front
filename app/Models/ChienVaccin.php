<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ChienVaccin extends Pivot
{
    protected $fillable = [
        'date'
    ];

    protected $table = 'chien_vaccin';
}
