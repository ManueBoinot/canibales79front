<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ChienUser extends Pivot
{
    protected $fillable = [
        'chien_id',
        'user_id',
    ];

    protected $table = 'chien_user';
}
