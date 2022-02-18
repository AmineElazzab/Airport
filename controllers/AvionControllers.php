<?php

class AvionControllers{
 
    public function getALLAvion(){
        $avion= AvionModels::getAll();
        return $avion;
    }

       
    public function findAvion(){

        if(isset($_POST['search'])){
          $data=array('search' => $_POST['search']);
        }
        $avion=AvionModels::searchAvion($data);
        return $avion;
  
      }

      
    public function addAvion(){
        if(isset($_POST['submit'])){
            $data=array(
  
              'marque'=>$_POST['marque'],
              'typee'=>$_POST['typee'],
              'capacite'=>$_POST['capacite']
              
            );
            
            $result=AvionModels::add($data);
  
            if($result==='ok'){
              session::set('success','Avion Ajouté avec success');
              Redirect::to('avion');
            }else{
                echo $result;
            }
        }
      }

      
   public function getOneAvion(){
    if(isset($_POST['id_avion'])){
      $data=array('id_avion'=>$_POST['id_avion']);
      

    }
     $avion=AvionModels::getAvion($data);
     return $avion;
  }

  public function updateAvion(){
    if(isset($_POST['submit'])){
        $data=array(
          'id_avion'=>$_POST['id_avion'],
          'marque'=>$_POST['marque'],
          'typee'=>$_POST['typee'],
          'capacite'=>$_POST['capacite']
         
        );
        
        $result=AvionModels::update($data);

        if($result==='ok'){
          session::set('success','Avion Modifier avec success');
          Redirect::to('avion');
        }else{
            echo $result;
        }
    }
  }

  public function deleteAvion(){

    if(isset($_POST['id_avion'])){
        $data['id_avion']=$_POST['id_avion'];
        $result=AvionModels::delete($data);
        if($result === 'ok')
        {
          session::set('success','Avion Supprime avec success');
         /* header('location:'.BASE_URL);*/
          Redirect::to('avion');

        }else{
          
          echo $result;
        }
    }
  }




  

}