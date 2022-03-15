<?php

class PassagerModels{

      static public function add ($data){
       $nbr = $_POST['nbr_passager'];
       $cnt=1;   
        for($i=0;$i<$nbr;$i++){
        
        $stmt=DB::connect()->prepare('INSERT INTO passager (nom,prenom,date_naissance,id_client) VALUE (:nom,:prenom,:date_naissance,:id_client)');
        $stmt->bindParam(':nom',$data[$i]->nom);
        $stmt->bindParam(':prenom',$data[$i]->prenom);
        $stmt->bindParam(':date_naissance',$data[$i]->date_naissance);
        $stmt->bindParam(':id_client',$data[$i]->id_client);

        $stmt->execute();
        $cnt++;
    }

     if($cnt==$nbr){
         return 'ok';
      }else{
         return 'error';
      }
        $stmt=null;
    
    }
}
   

    
   
    
    


	


?>