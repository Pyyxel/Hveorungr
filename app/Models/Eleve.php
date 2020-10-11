<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
   protected $table="eleve";


   public function groupe(){
        return $this->belongsToMany(Groupe::class, 'eleve_groupes');
   }

}
