<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    public function Groupe(){
        return $this->belongsToMany('App\Models\Groupe');
    }
}
