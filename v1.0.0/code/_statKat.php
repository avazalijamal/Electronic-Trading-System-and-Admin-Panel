<?php
    include_once "baza.php";

    if($_GET && isset($_SESSION['userId'])){
        
        $id=$_GET['id'];
        $stat=$_GET['stat'];

        $SQL="UPDATE kateqoriya SET stat = $stat WHERE id = $id";
        $GONDER=mysqli_query($MYSQL,$SQL);

        header("location:kateqoriya.php");

    }else{
        echo "informasiyada xeta bas verdi";
    }

?>