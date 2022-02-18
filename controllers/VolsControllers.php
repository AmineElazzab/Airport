<?php

class VolsControllers{
 
    public function getALLVols(){
        $vols= VolsModels::getAll();
        return $vols;
    }

       
    public function findVols(){

        if(isset($_POST['search'])){
          $data=array('search' => $_POST['search']);
        }
        $vols=VolsModels::searchvols($data);
        return $vols;
  
      }


      
    public function addVols(){
        if(isset($_POST['submit'])){
            $data=array(
  
              'date_depart'=>$_POST['date_depart'],
              'date_arrivee'=>$_POST['date_arrivee'],
              'ville_depart'=>$_POST['ville_depart'],
              'ville_arrivee'=>$_POST['ville_arrivee'],
              'airoport_depart'=>$_POST['airoport_depart'],
              'airoport_arrivee'=>$_POST['airoport_arrivee'],
              'heure_depart'=>$_POST['heure_depart'],
              'heure_arrivee'=>$_POST['heure_arrivee'],
              'prix_vol'=>$_POST['prix_vol'],
              
            
              
              
            );
            
            $result=VolsModels::add($data);
          
  
            if($result==='ok'){
              session::set('success','Vols Ajouté avec success');
              Redirect::to('vols');
            }else{
                echo $result;
            }
        }
      }

      
   public function getOneVols(){
    if(isset($_POST['id_vols'])){
      $data=array('id_vols'=>$_POST['id_vols']);
      

    }
     $vols=VolsModels::getvols($data);
     return $vols;
  }

  public function updateVols(){
    if(isset($_POST['submit'])){
        $data=array(
          'id_vols'=>$_POST['id_vols'],
          'date_depart'=>$_POST['date_depart'],
          'date_arrivee'=>$_POST['date_arrivee'],
          'ville_depart'=>$_POST['ville_depart'],
          'ville_arrivee'=>$_POST['ville_arrivee'],
          'airoport_depart'=>$_POST['airoport_depart'],
          'airoport_arrivee'=>$_POST['airoport_arrivee'],
          'heure_depart'=>$_POST['heure_depart'],
          'heure_arrivee'=>$_POST['heure_arrivee'],
          'prix_vol'=>$_POST['prix_vol'],
          
         
        );
        
        $result=VolsModels::update($data);

        if($result==='ok'){
          session::set('success','Vols Modifier avec success');
          Redirect::to('vols');
        }else{
            echo $result;
        }
    }
  }

  public function deleteVols(){

    if(isset($_POST['id_vols'])){
        $data['id_vols']=$_POST['id_vols'];
        $result=VolsModels::delete($data);
        if($result === 'ok')
        {
          session::set('success','Vols Supprime avec success');
         /* header('location:'.BASE_URL);*/
          Redirect::to('vols');

        }else{
          
          echo $result;
        }
    }
  }


  public function findVolsDate(){

    if(isset($_POST['search'])){
      $data=array(
        
        'search' => $_POST['search'],
        'search1' => $_POST['search1'],
        'search2' => $_POST['search2'],
        'search3' => $_POST['search3']
      
      );
      
    

    }
    $vols=VolsModels::searchVolsDate($data);
    
     if(!$vols)
        { 
          session::set('error','le vols ne se trouve pas dans la table de vol');
           Redirect::to('vols');
        }
        else{
          return $vols;
        }
 

  }

  public function findVolsDate1(){

    if(isset($_POST['search'])){
      $data=array(
        
        'search' => $_POST['search'],
        'search1' => $_POST['search1'],
        'search2' => $_POST['search2']
      
      );
      
    

    }
    $vols=VolsModels::searchVolsDate1($data);
    
     if(!$vols)
        { 
          session::set('error','le vols ne se trouve pas dans la table de vol');
           Redirect::to('vols');
        }
        else{
          return $vols;
        }
 

  }


 




  

}