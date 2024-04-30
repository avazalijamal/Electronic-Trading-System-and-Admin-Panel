<?php
    include_once "_islogin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/user/profile.png">
    <link rel="stylesheet" href="./css/signup.css">
    <script src="./js/signup.js"></script>
    <title>Sign Up</title>
</head>
<body>
    
    <h1 class="msj">
        <?php   
           echo isset($_GET['msj']) ? $_GET['msj'] : "Qeydiyyat Olun";
        ?>
    </h1>

    <form action="_qeydiyyat.php" method="post" enctype="multipart/form-data">
        <label class="hid">
            <img id="img" src="./img/user/profile.png" alt="">
            <input name="foto" id="file" type="file">
        </label>
        
        <br>

        <div>
        <label>
            <input name="ad" minlength="3" required class="txt" type="text" placeholder="Full Name">
        </label>

        <br>

        <label>
            <input name="email" minlength="3" required class="txt" type="email" placeholder="Email">
        </label>

        <br>

        <label>
            <input name="kod" required minlength="8" class="pas" id="pas" type="password" placeholder="Password">
            <input class="chk" id="chk" type="checkbox">
        </label>

        <br>

        <input class="sub" type="submit" value="Qeydiyyat ol">

            <a href="login.php">
            <input class="sub" type="button" value="Daxil ol">
            </a>
        </div>
    </form>

</body>
</html>