<?php

    include_once "baza.php";

    if($_POST){

        $email=$_POST['email'];
        $kod=$_POST['kod'];

        $kod=md5($kod);


        $SQL="SELECT COUNT(*) AS say, id FROM istifadeci WHERE email='$email' AND kod='$kod' AND stat=1";
        $GONDER=mysqli_query($MYSQL,$SQL);
        $CAVB=mysqli_fetch_assoc($GONDER);

        if($CAVB['say']>0){

            $_SESSION['userId']=$CAVB['id'];
            header("location:admin.php");

        }else{
            $msj="Bele Istifadeci Movcud Deyil";
            header("location:login.php?msj=$msj");
        }

    }else{
        echo "informasiyada xeta bas verdi";
    }





?>