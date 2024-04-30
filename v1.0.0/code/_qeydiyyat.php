<?php

    include_once "baza.php";

    if($_POST){

        $ad=$_POST["ad"];
        $email=$_POST["email"];
        $kod=$_POST["kod"];
        $name="profile.png";

        if($_FILES['foto']['size']>0){

            $foto=$_FILES['foto'];

            $tmp=$foto['tmp_name'];
            $name=uniqid()."-".uniqid().".png";

            move_uploaded_file($tmp,"./img/user/$name");
        }

        $kod=md5($kod);

        $SQL="SELECT COUNT(*) AS say FROM istifadeci WHERE email='$email'";
        $GONDER=mysqli_query($MYSQL,$SQL);
        $CAVB=mysqli_fetch_assoc($GONDER);

        if($CAVB['say']<=0){

            $SQL="INSERT INTO istifadeci(tamadi,email,kod,foto) VALUES ('$ad','$email','$kod','$name')";
            $GONDER=mysqli_query($MYSQL,$SQL);

            $testiq_kodu=rand(1000,9999);

            $SQL="INSERT INTO testiq_kodu(email,kod) VALUES ('$email','$testiq_kodu')";
            $GONDER=mysqli_query($MYSQL,$SQL);

            mail($email,"HESAB TESDIQI","Testiq kodunuz: $testiq_kodu budur.");

            $_SESSION['email']=$email;

            header("location:email.php");

        }else{

            $msj="Bu Email Artqi Istifade Edilib";
            header("location:signup.php?msj=$msj");
        }


    }else{
        echo "informasiyada xeta bas verdi";
    }


?>


