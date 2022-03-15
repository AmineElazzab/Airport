<?php

class ClientModels{

     static public function getAll() {

        $stmt = DB::connect()->prepare('SELECT * FROM client');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->null;

     }

     static public function searchClient ($data){

      $search=$data['search'];
      /*die (print_r($data));*/
      try{
         $query='SELECT* FROM client WHERE nom LIKE ?  OR cin LIKE ? OR prenom LIKE ?' ;
         $stmt=DB::connect()->prepare($query);
         $stmt->execute((array('%'.$search.'%', '%'.$search.'%', '%'.$search.'%')));
         $client=$stmt->fetchAll();
         return $client;

     }
     catch(PDOException $ex)
     {
      echo 'erreur'.$ex->getMessage();
     }

   }


   static public function add ($data){
      $stmt=DB::connect()->prepare('INSERT INTO client  (nom,prenom,cin,telephone,email,adresse,passwords) VALUES (:nom,:prenom,:cin,:telephone,:email,:adresse,:passwords)');
      $stmt->bindParam(':nom',$data['nom']);
      $stmt->bindParam(':prenom',$data['prenom']);
      $stmt->bindParam(':cin',$data['cin']);
      $stmt->bindParam(':telephone',$data['telephone']);
      $stmt->bindParam(':email',$data['email']);
      $stmt->bindParam(':adresse',$data['adresse']);
      $stmt->bindParam(':passwords',$data['passwords']);
      if($stmt->execute()){
       return 'ok';
    }else{
       return 'error';
    }
    
    $stmt=null;

   }

   static public function getClient($data){
      $id_client=$data['id_client'];
      try{
          $query='SELECT * FROM client WHERE id_client=:id_client';
          $stmt=DB::connect()->prepare($query);
          $stmt->execute((array(":id_client"=>$id_client)));
          $client=$stmt->fetch(PDO::FETCH_OBJ);
          return $client;
      }
      catch(PDOException $ex)
      {
       echo 'erreur'.$ex->getMessage();
      }
   }

   static public function update ($data){
      $stmt=DB::connect()->prepare('UPDATE  client SET nom=:nom ,prenom=:prenom ,cin=:cin ,telephone=:telephone ,email=:email ,adresse=:adresse,passwords=:passwords WHERE id_client=:id_client');
      $stmt->bindParam(':id_client',$data['id_client']);
      $stmt->bindParam(':nom',$data['nom']);
      $stmt->bindParam(':prenom',$data['prenom']);
      $stmt->bindParam(':cin',$data['cin']);
      $stmt->bindParam(':telephone',$data['telephone']);
      $stmt->bindParam(':email',$data['email']);
      $stmt->bindParam(':adresse',$data['adresse']);
      $stmt->bindParam(':passwords',$data['passwords']);

      if($stmt->execute()){
       return 'ok';
    }else{
       return 'error';
    }
    
    $stmt=null;

   }

   static public function delete($data){
      $id_client=$data['id_client'];
      try{
         $query='DELETE FROM client WHERE id_client=:id_client';
         $stmt=DB::connect()->prepare($query);
         $stmt->execute((array(":id_client"=>$id_client)));
         if($stmt->execute()){
            return 'ok';
         }

     }
     catch(PDOException $ex)
     {
      echo 'erreur'.$ex->getMessage();
     }

   }

   



  
}