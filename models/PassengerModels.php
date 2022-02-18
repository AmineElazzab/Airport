<?php

class PassagerModels{

    // public static function add($data){
        
    //     try{
           

    //         for($i=0;$i<sizeof($data)/3;$i++){
    //             $query = 'INSERT INTO passager (nom,prenom,date_naissance) VALUE (:nom,:prenom,:prenom,:date_naissance)';
    //             $log = DB::connect()->prepare($query);
    //             $log->execute(array(":nom" => $data['nom'.$i],
    //                                 ":prenom" => $data['prenom'.$i],
    //                                 ":dateNaiss" => $data['dateNaiss'.$i]

    //                                 ));
                
    //         }
        
            
    //     }catch(PDOException $ex){
    //         echo 'erreur' .$ex->getMessage();
    //     }
        
    // }

    // static public function add ($data,$id_passager){
        
    //     try{
    //    for($j=0;$j<sizeof($id_passager);$j++){    

    //         for($i=0;$i<sizeof($data)/4;$i++){
    //             $query = 'INSERT INTO passager (id_passager,nom,prenom,date_naissance,id_client) VALUE (:id_passager,:nom,:prenom,:date_naissance,:id_client)';
                
    //             $log = DB::connect()->prepare($query);
    //             $log->execute(array(":id_passager",$id_passager[$j],
    //                                 ":nom" => $data['nom'.$i],
    //                                 ":prenom" => $data['prenom'.$i],
    //                                 ":date_naissance" => $data['date_naissance'.$i],
    //                                 ":id_client" => $data['id_client']

    //                                 ));                      
    //         }
    //        }
            
    //     }catch(PDOException $ex){
    //         echo 'erreur' .$ex->getMessage();
    //     }
    // }


    static public function add ($data){
       $nbr = $_POST['nbr_passager'];
       $cnt=1;   
        for($i=0;$i<$nbr;$i++){
        
        $stmt=DB::connect()->prepare('INSERT INTO passager (nom,prenom,date_naissance,id_client) VALUE (:nom,:prenom,:date_naissance,:id_client)');
        $stmt->bindParam(':nom',$data['nom'.$i]);
        $stmt->bindParam(':prenom',$data['prenom'.$i]);
        $stmt->bindParam(':date_naissance',$data['date_naissance'.$i]);
        $stmt->bindParam(':id_client',$data['id_client']);

        // $stmt->bindParam(':id_client',$data['client'.$i]);
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