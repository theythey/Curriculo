<?php

        $home= "localhost";
        $name="root";
        $password="";
        $db = "unicore";

$connection = new mysqli($home, $name, $password, $db);

if($connection->error){
        //die()
}

?>


