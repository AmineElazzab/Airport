<?php

class PassagerControllers{

    public function addpassager(){
        if(isset($_POST['submit'])){
            $nbr = $_POST['nbr_passager'];
                    $data = array();
                    for($i=0;$i<$nbr;$i++){
                        $data[$i]->nom = $_POST['nom'.$i];
                        $data[$i]->prenom = $_POST['prenom'.$i];
                        $data[$i]->date_naissance = $_POST['date_naissance'.$i];
                        $data[$i]->id_client = $_POST['id_client'.$i];  
                    }
                    
            $result=passagerModels::add($data);
         
  
            if($result==='ok'){
              session::set('success','passager Ajouté avec success');
              Redirect::to('reserver');
            }else{
                echo $result;
            }
        }
      }
}

?>
