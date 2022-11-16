<?php

        $home= "localhost";
        $name="root";
        $password="";
        $db = "unicore";

        $con = mysqli_connect($home, $name, $password, $db);

        if($con->error){
                //die()
        }

?>


