<?php 
    function find_ouvrages():array{
        $ouvrage=[];
        foreach ($ouvrages as $key => $value) {
            $auteur=find_auteurs_by_id($value["auteurs_id"]);
            $rayon=find_rayons_by_id($value["rayons_id"]);
            $ouvrage[]=[
                            "matricule"=>$etudiant["matricule"],
                            "etudiant"=>$etudiant["nom"]." ".$etudiant["prenom"],
                            "classe"=>$classe["libelle"],
                            "annee"=>$value["annee"]
            ];
        }
        return $inscripts;
    }


    function find_auteurs_by_id(int $id ):array | null{
        foreach ($auteurs as $key => $value) {
           if($value["id"]==$id){
                return $value;
           }
        }
        return null;
    }
    function find_rayons_by_id(int $id ):array | null{
        foreach ($rayons as $key => $value) {
           if($value["id"]==$id){
                return $value;
           }
        }
        return null;
    }
?>
