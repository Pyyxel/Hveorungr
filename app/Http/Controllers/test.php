<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Enseignant;
use App\Models\Groupe;
use App\Models\Formation;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Group;

class test extends Controller
{
    public function addGroupe(){
        
        for($i=1;$i<5;$i++){
            $formation=new Formation();
            $formation->diplome="L$i";
            $formation->save();
        }

        for($i=1;$i<5;$i++){
            $formation = formation::find($i);
            $groupe = new Groupe();
            $groupe->type="CM";
            $formation->Groupe()->save($groupe);
              
        }


        for($i=1;$i<6;$i++){
            $enseignant= new Enseignant();
            $enseignant->nom="enseignant$i";
            $enseignant->prenom="enseignant$i";
            $enseignant->save();
        }

        $enseigant= enseignant::find(1);
        var_dump($enseigant);
        $enseigant->Groupe()->attach(1);

        for($i=1;$i<6;$i++){
            $eleve = new Eleve();
            $eleve->nom="eleve$i";
            $eleve->prenom="eleve$i";
            $eleve->numero_etudiant=$i*$i;
            $eleve->save();
        }

        $eleve= eleve::find(2);
        var_dump($eleve);
        $eleve->Groupe()->attach(2);



      
    }

    
}
