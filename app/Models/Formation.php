<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    public function Groupe(){
        return $this->hasMany('App\Models\Groupe');
    }
}
