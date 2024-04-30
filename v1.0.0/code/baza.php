<?php
        $host="localhost";
        $user="root";
        $pass="";
        $db="mystore";
        $MYSQL=mysqli_connect($host,$user,$pass,$db) or die("MYSQL-de XETA VAR");
        
        if(!isset($_SESSION['userId'])){
                session_start();
        }

?>