<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    public function Formation(){
        return $this->belongsTo('App\Models\Formation');
    }

    public function Eleve(){
        return $this->belongsToMany('App\Models\Eleve');
    }

    public function Enseignant(){
        return $this->belongsToMany('App\Models\Enseignant');
    }
}
