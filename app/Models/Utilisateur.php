<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table='utilisateurs';
    protected $fillable = ['nom','prenom','email','password'];


    public function activites()
    {
        return $this->hasMany(Activite::class);
    }

    public function resultats()
    {
        return $this->hasMany(Resultat::class);
    }
}
