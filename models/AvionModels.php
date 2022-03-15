<?php

class AvionModels{

     static public function getAll() {

        $stmt = DB::connect()->prepare('SELECT * FROM avion');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->null;

     }

     static public function searchAvion ($data){

      $search=$data['search'];
      /*die (print_r($data));*/
      try{
         $query='SELECT* FROM avion WHERE marque LIKE ?  OR capacite LIKE ?';
         $stmt=DB::connect()->prepare($query);
         $stmt->execute((array('%'.$search.'%', '%'.$search.'%')));
         $avion=$stmt->fetchAll();
         return $avion;

     }
     catch(PDOException $ex)
     {
      echo 'erreur'.$ex->getMessage();
     }

   }


   static public function add ($data){
      $stmt=DB::connect()->prepare('INSERT INTO avion  (marque,typee) VALUES (:marque,:typee)');
      $stmt->bindParam(':marque',$data['marque']);
      $stmt->bindParam(':typee',$data['typee']);
      // $stmt->bindParam(':capacite',$data['capacite']);
      if($stmt->execute()){
       return 'ok';
    }else{
       return 'error';
    }
    
    $stmt=null;

   }

   static public function getAvion($data){
      $id_avion=$data['id_avion'];
      try{
          $query='select * from avion where id_avion=:id_avion';
          $stmt=DB::connect()->prepare($query);
          $stmt->execute((array(":id_avion"=>$id_avion)));
          $avion=$stmt->fetch(PDO::FETCH_OBJ);
          return $avion;
      }
      catch(PDOException $ex)
      {
       echo 'erreur'.$ex->getMessage();
      }
   }

   static public function update ($data){
      $stmt=DB::connect()->prepare('update  avion set marque=:marque ,typee=:typee where id_avion=:id_avion');
      $stmt->bindParam(':id_avion',$data['id_avion']);
      $stmt->bindParam(':marque',$data['marque']);
      $stmt->bindParam(':typee',$data['typee']);
      // $stmt->bindParam(':capacite',$data['capacite']);

      if($stmt->execute()){
       return 'ok';
    }else{
       return 'error';
    }
    
    $stmt=null;

   }

   static public function delete($data){
      $id_avion=$data['id_avion'];
      try{
         $query='DELETE FROM avion WHERE id_avion=:id_avion';
         $stmt=DB::connect()->prepare($query);
         $stmt->execute((array(":id_avion"=>$id_avion)));
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