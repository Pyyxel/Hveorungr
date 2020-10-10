<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
   public function groupe(){
        return $this->belongsToMany('App\Models\Groupe');
   }

}
