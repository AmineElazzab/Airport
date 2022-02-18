
<?php

session_start();
spl_autoload_register('autoload');//Enregistre une fonction en tant qu'implémentation de __autoload()
require_once './bootstrap.php';//vérifie si le fichier a déjà été inclus
function autoload($class_name){
   $array_paths=array(
       'database/',
       'app/classes/',
       'models/',
       'controllers/',
       'views/'
   );

   $parts=explode('\\',$class_name);//changer slache (/) to entislache (\)  -> divise une chaîne en un tableau.
   $name =array_pop($parts);//supprimer le dernier element 
   
   foreach($array_paths as $path){

         $file=sprintf($path.'%s.php',$name);//Retourne une chaîne formatée

         if(is_file($file)){  //Retourne true si le nom de fichier existe et que c'est un fichier régulie
             include_once $file;
         }
   }
}
