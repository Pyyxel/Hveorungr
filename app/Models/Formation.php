<?php

namespace App\Models;

use App\Models\Groupe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formation extends Model
{
    public function Groupe(){
        return $this->hasMany(Groupe::class);
    }
}
