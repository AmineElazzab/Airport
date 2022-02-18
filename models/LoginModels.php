<?php


class LoginModels{

    static public function login($data){
        $cin=$data['cin'];
        
        try{
           $query='select * from client where cin=:cin';
           $stmt=DB::connect()->prepare($query);
           $stmt->execute((array(":cin"=>$cin)));
           $client=$stmt->fetch(PDO::FETCH_OBJ);
           return $client;
        
           
           
           if($stmt->execute()){
              return 'ok';
           }
           
  
       }
       catch(PDOException $ex)
       {
        echo 'erreur'.$ex->getMessage();
       }
  
     }

     static public function loginAdmin($data,$data1){
        $cin=$data['cin'];
        $passwords=$data1['passwords'];
        
        try{
           $query='select * from admin where cin=:cin and passwords=:passwords';
           $stmt=DB::connect()->prepare($query);
           $stmt->execute((array(":cin"=>$cin,":passwords"=>$passwords)));
           $admin=$stmt->fetch(PDO::FETCH_OBJ);
           return $admin;
        
           
           
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

?>