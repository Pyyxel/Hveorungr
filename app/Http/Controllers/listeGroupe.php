omc<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class listeGroupe extends Controller
{
    public function listGroupe($idFormation){
        $groupes=DB::table('groupe')->where('formation_id',$idFormation)->get();
        var_dump($groupes);
        $formation=DB::table('formations')->where('id',$idFormation)->value('diplome');
        return view('listeGroupe', ['groupes' => $groupes, 'formation'=> $formation]);

    }
}
