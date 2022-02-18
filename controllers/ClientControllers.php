<?php

class ClientControllers{
 
    public function getALLClient(){
        $client= ClientModels::getAll();
        return $client;
    }

       
    public function findClient(){

        if(isset($_POST['search'])){
          $data=array('search' => $_POST['search']);
        }
        $client=ClientModels::searchClient($data);
        return $client;
  
      }

      
    public function addClient(){
        if(isset($_POST['submit'])){

            $options=[
                'cost'=>12//augmenter le "cost" par défaut pour BCRYPT par défaut 60
            ];
            $password=password_hash($_POST['passwords'],
            PASSWORD_BCRYPT,$options);
            //créer une clé de hachage standard.
            $data=array(
  
              'nom'=>$_POST['nom'],
              'prenom'=>$_POST['prenom'],
              'cin'=>$_POST['cin'],
              'telephone'=>$_POST['telephone'],
              'email'=>$_POST['email'],
              'adresse'=>$_POST['adresse'],
              'passwords'=>$password
              
            );
            
            $result=ClientModels::add($data);
  
            if($result==='ok'){
              session::set('success','Client Ajouté avec success');
              Redirect::to('client');
            }else{
                echo $result;
            }
        }
      }

      
   public function getOneClient(){
    if(isset($_POST['id_client'])){
      $data=array('id_client'=>$_POST['id_client']);
      

    }
     $client=ClientModels::getClient($data);
     return $client;
  }

  public function updateClient(){
    if(isset($_POST['submit'])){
        $options=[
            'cost'=>12
        ];
        $password=password_hash($_POST['passwords'],
        PASSWORD_BCRYPT,$options);
        $data=array(
          'id_client'=>$_POST['id_client'],
          'nom'=>$_POST['nom'],
          'prenom'=>$_POST['prenom'],
          'cin'=>$_POST['cin'],
          'telephone'=>$_POST['telephone'],
          'email'=>$_POST['email'],
          'adresse'=>$_POST['adresse'],
          'passwords'=>$password
         
        );
        
        $result=ClientModels::update($data);

        if($result==='ok'){
          session::set('success','Client Modifier avec success');
          Redirect::to('client');
        }else{
            echo $result;
        }
    }
  }

  public function deleteClient(){

    if(isset($_POST['id_client'])){
        $data['id_client']=$_POST['id_client'];
        $result=ClientModels::delete($data);
        if($result === 'ok')
        {
          session::set('success','Client Supprime avec success');
         /* header('location:'.BASE_URL);*/
          Redirect::to('client');

        }else{
          
          echo $result;
        }
    }
  }




  

}