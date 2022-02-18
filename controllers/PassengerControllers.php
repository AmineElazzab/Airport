<?php

class PassagerControllers{

    public function addPassager(){
        if(isset($_POST['submit'])){
            $nbr = $_POST['nbr_passager'];
                    $data = [];
                    for($i=0;$i<$nbr;$i++){
                        $data['nom'.$i] = $_POST['nom'.$i];
                        $data['prenom'.$i] = $_POST['prenom'.$i];
                        $data['date_naissance'.$i] = $_POST['date_naissance'.$i];
                        $data['id_client'] = $_POST['id_client'];
                        // $data['client'.$i] = $_POST['client'.$i];
                       
                    }
                    
            
            $result=PassagerModels::add($data);
         
  
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