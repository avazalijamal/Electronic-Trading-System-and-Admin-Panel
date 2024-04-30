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
    <link rel="stylesheet" href="./css/login.css">
    <script src="./js/login.js"></script>
    <title>Login</title>
</head>
<body>

    <h1 class="msj">
        <?php   
           echo isset($_GET['msj']) ? $_GET['msj'] : "Daxil Olun";
        ?>
    </h1>

    <form action="_login.php" method="post">
        <label class="hid">
            <img src="./img/user/profile.png" alt="">
        </label>
        
        <br>

        <div>
        <label>
            <input name="email" minlength="3" required class="txt" type="text" placeholder="Email">
        </label>

        <br>

        <label>
            <input name="kod" minlength="8" required class="pas" id="pas" type="password" placeholder="Password">
            <input class="chk" id="chk" type="checkbox">
        </label>

        <br>

        <input class="sub" type="submit" value="Daxil ol">
            <a href="signup.php">
            <input class="sub" type="button" value="Qeydiyyat">
            </a>
        </div>
    </form>

</body>
</html>