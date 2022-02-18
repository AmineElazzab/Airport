<?php

class ReservationModels{
 
    static public function getRes() {

        $stmt = DB::connect()->prepare('SELECT * from reservation,client,vols where reservation.id_client=client.id_client and reservation.id_vols=vols.id_vols and client.id_client='.$_SESSION['id_client']);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->null;

     }

     static public function getAll() {

      $stmt = DB::connect()->prepare('SELECT * from reservation,client,vols where reservation.id_client=client.id_client and reservation.id_vols=vols.id_vols');
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt->null;

   }

     static public function searchReservation ($data){

        $search=$data['search'];
        /*die (print_r($data));*/
        try{
           $query='SELECT distinct * from reservation,client,vols where reservation.id_client=client.id_client and reservation.id_vols=vols.id_vols and  ville_depart like ?  OR ville_arrivee like ?  OR nom like ?  OR prenom like ?';
           $stmt=DB::connect()->prepare($query);
           $stmt->execute((array('%'.$search.'%', '%'.$search.'%', '%'.$search.'%', '%'.$search.'%')));
           $reservation=$stmt->fetchAll();
           return $reservation;
  
       }
       catch(PDOException $ex)
       {
        echo 'erreur'.$ex->getMessage();
       }
  
     }
  
  
     static public function add ($data){
        $stmt=DB::connect()->prepare('INSERT INTO reservation (nbr_passager,id_client,id_vols) VALUES (:nbr_passager,:id_client,:id_vols)');
        $stmt->bindParam(':nbr_passager',$data['nbr_passager']);
        $stmt->bindParam(':id_client',$data['id_client']);
        $stmt->bindParam(':id_vols',$data['id_vols']);
        if($stmt->execute()){
         return 'ok';
      }else{
         return 'error';
      }
      
      $stmt=null;
  
     }
  
     static public function getReservation($data){
        $id_reservation=$data['id_reservation'];
        try{
            $query='select * from reservation where id_reservation=:id_reservation';
            $stmt=DB::connect()->prepare($query);
            $stmt->execute((array(":id_reservation"=>$id_reservation)));
            $reservation=$stmt->fetch(PDO::FETCH_OBJ);
            return $reservation;
        }
        catch(PDOException $ex)
        {
         echo 'erreur'.$ex->getMessage();
        }
     }
  
     static public function update ($data){
        $stmt=DB::connect()->prepare('update  reservation set nbr_passager=:nbr_passager ,id_client=:id_client ,id_vols=:id_vols where id_reservation=:id_reservation');
        $stmt->bindParam(':id_reservation',$data['id_reservation']);
        $stmt->bindParam(':nbr_passager',$data['nbr_passager']);
        $stmt->bindParam(':id_client',$data['id_client']);
        $stmt->bindParam(':id_vols',$data['id_vols']);
  
        if($stmt->execute()){
         return 'ok';
      }else{
         return 'error';
      }
      
      $stmt=null;
  
     }
  
     static public function delete($data){
        $id_reservation=$data['id_reservation'];
        try{
           $query='Delete from reservation where id_reservation=:id_reservation';
           $stmt=DB::connect()->prepare($query);
           $stmt->execute((array(":id_reservation"=>$id_reservation)));
           if($stmt->execute()){
              return 'ok';
           }
  
       }
       catch(PDOException $ex)
       {
        echo 'erreur'.$ex->getMessage();
       }
  
     }

      
    static public function imprimer($data) {
      $id_reservation=$data['id_reservation'];
      $stmt = DB::connect()->prepare('SELECT * from reservation,client,vols,passager,pilote,avion where pilote.id_pilote=vols.id_pilote and avion.id_avion=vols.id_vols and reservation.id_client=client.id_client and reservation.id_vols=vols.id_vols and passager.id_client=client.id_client and reservation.id_reservation='.$id_reservation);
      $stmt->execute();
      $passager=$stmt->fetch(PDO::FETCH_OBJ);
      return $passager;
      $stmt->null;

   }


}

?>