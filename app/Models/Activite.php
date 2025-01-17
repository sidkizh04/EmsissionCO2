<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    
    protected $table='activites';
    protected $fillable = ['type','details','quantite_co2','date','utilisateur_id'];

    public function utilisateurs()
    {
        return $this->belongsTo(Utilisateur::class);
    }
    
}
