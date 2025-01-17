<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conseil extends Model
{
    protected $table = 'conseils';
    protected $fillable = ['titre', 'description', 'utilisateur_id'];
}
