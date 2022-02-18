<?php

class LoginControllers{


    public function  auth(){
        //Détermine si une variable est déclarée et est différente de null  
        if(isset($_POST['submit'])){
            $data['cin']=$_POST['cin'];
            $data1['passwords']=$_POST['passwords'];
            $result=LoginModels::login($data);
            $resultAdmin=LoginModels::loginAdmin($data,$data1);
           // die(print_r(!empty($resultAdmin->cin)));
           
           
       
            //Vérifie qu'un mot de passe correspond à un hachage
            if($result->cin === $_POST['cin'] && password_verify($_POST['passwords'],$result->passwords)){
                     $_SESSION['logged']=true;
                     $_SESSION['cin']=$result->cin;
                     $_SESSION['nom']=$result->nom;
                     $_SESSION['prenom']=$result->prenom;
                     $_SESSION['id_client']=$result->id_client;
                     Redirect::to('../reservation/vols');
                
            }
            //Détermine si une variable est non vide
            elseif ((!empty($resultAdmin->cin)) && ($resultAdmin->cin ===$_POST['cin']  && $resultAdmin->passwords === $_POST['passwords']) ){

              
                $_SESSION['logged']=true;
                $_SESSION['cin']=$resultAdmin->cin;
                $_SESSION['nom']=$resultAdmin->nom;
                $_SESSION['prenom']=$resultAdmin->prenom;
                Redirect::to('../avion/avion');
              
           
            } 
            else{
                session::set('error','Pseudo ou mot de passe  est incorrect');
                Redirect::to('login');
                }
           

        }
    


    }
        
    



   public function logout (){
        session_destroy();//Detruit une session 

    }
}
