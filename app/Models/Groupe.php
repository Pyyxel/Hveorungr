<?php

namespace App\Models;

use App\Models\Eleve;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Groupe extends Model
{   
    protected $table = "groupe";

    public function Formation(){
        return $this->belongsTo(Formation::class);
    }

    public function Eleve(){
        return $this->belongsToMany(Eleve::class, 'eleve_groupes');
    }

    public function Enseignant(){
        return $this->belongsToMany(Enseignant::class,'enseignant_groupes');
    }
}
