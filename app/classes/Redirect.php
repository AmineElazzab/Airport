<?php

class Redirect{

    static public function to ($page){
        header('Location:'.$page );

    }

    static public function client (){
        header('Location:../client/login' );

    }
}

?>