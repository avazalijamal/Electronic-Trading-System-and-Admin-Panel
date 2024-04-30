<?php

    include_once "baza.php";

    if($_POST){

        $email=$_SESSION['email'];

        $kod=$_POST['kod'];


        $SQL="SELECT COUNT(*) AS say FROM testiq_kodu WHERE email='$email' AND kod='$kod' AND stat=1";
        $GONDER=mysqli_query($MYSQL,$SQL);
        $CAVB=mysqli_fetch_assoc($GONDER);
        
        
        if($CAVB['say']>0){
            

            $SQL="UPDATE istifadeci SET stat=1 WHERE email='$email'";
            $GONDER=mysqli_query($MYSQL,$SQL);

            $SQL="UPDATE testiq_kodu SET stat=0 WHERE email='$email' AND kod='$kod'";
            $GONDER=mysqli_query($MYSQL,$SQL);
            
            header("location:login.php");

        }else{
            $msj="Gonderdiyiniz Kod Yanlisdir";
            header("location:email.php?msj=$msj");
        }

    }else{
        echo "informasiyada xeta bas verdi";
    }


?>