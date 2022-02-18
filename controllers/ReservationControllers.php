<?php

class ReservationControllers{
 
    public function getALLReservation(){
        $reservation= ReservationModels::getAll();
        return $reservation;
        }

    public function getReservation(){
          $reservation= ReservationModels::getRes();
          return $reservation;
      }
  

        public function findReservation(){

            if(isset($_POST['search'])){
              $data=array('search' => $_POST['search']);
            }
            $reservation=reservationModels::searchReservation($data);
            return $reservation;
      
          }
    
          
        public function addReservation(){
            if(isset($_POST['submit'])){
                $data=array(
      
                  'nbr_passager'=>$_POST['nbr_passager'],
                  'id_client'=>$_POST['id_client'],
                  'id_vols'=>$_POST['id_vols']  
                  
                );
                
                $result= ReservationModels::add($data);
              
      
                if($result==='ok'){
                  session::set('success','Reservation Ajouté avec success');
                  Redirect::to('reserver');
                }else{
                    echo $result;
                }
            }
          }
    
          
       public function getOneReservation(){
        if(isset($_POST['id_reservation'])){
          $data=array('id_reservation'=>$_POST['id_reservation']);
          
    
        }
         $reservation=ReservationModels::getReservation($data);
         return $reservation;
      }
    
      public function updateReservation(){
        if(isset($_POST['submit'])){
            $data=array(
                'nbr_passager'=>$_POST['nbr_passager'],
                'id_client'=>$_POST['id_client'],
                'id_vols'=>$_POST['id_vols']  
    
             
            );
            
            $result=ReservationModels::update($data);
    
            if($result==='ok'){
              session::set('success','Reservation Modifier avec success');
              Redirect::to('vols');
            }else{
                echo $result;
            }
        }
      }
    
      public function deleteReservation(){
    
        if(isset($_POST['id_reservation'])){
            $data['id_reservation']=$_POST['id_reservation'];
            $result=ReservationModels::delete($data);
            if($result === 'ok')
            {
              session::set('success','Reservation Supprime avec success');
             /* header('location:'.BASE_URL);*/
              Redirect::to('reservation');
    
            }else{
              
              echo $result;
            }
        }
      }


      public function imprimer(){

        if(isset($_POST['id_reservation'])){
            $data['id_reservation']=$_POST['id_reservation'];
            // die(print_r($data['id_reservation']));
            $result=ReservationModels::imprimer($data);
            // die(print_r($result));
            return $result;
           
        }
      }
    


}

?>