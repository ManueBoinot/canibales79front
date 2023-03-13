<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Chien;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'date_naiss',
        'adr_ligne_1',
        'adr_ligne_2',
        'code_postal',
        'commune',
        'tel',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Fonction qui précise la relation avec la table "Roles"
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Fonction qui précise la relation avec la table "BureauMembres"
    public function bureau()
    {
        return $this->belongsTo(BureauMembre::class);
    }

    // Fonction qui précise la relation avec la table "Licences"
    public function licence()
    {
        return $this->belongsTo(Licence::class);
    }

    // Fonction qui précise la relation avec la table "Chiens"
    public function chiens()
    {
        return $this->belongsToMany(Chien::class)->using(ChienUser::class);
    }

    // Fonction qui définit que le role_id (1) est systématiquement un Admin
    public function isAdmin()
    {
        return $this->role_id === 1;
    }

}
