<?php
    include_once "_sendmsj.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/user/profile.png">
    <link rel="stylesheet" href="./css/email.css">
    <script src="./js/email.js"></script>
    <title>Email Testiq</title>
</head>
<body>

    <h1 class="msj">
        <?php   
           echo isset($_GET['msj']) ? $_GET['msj'] : "Hesabi Testiqle";
        ?>
    </h1>
    
    <form action="_email.php" method="post">
        <label class="hid">
            <img src="./img/user/profile.png" alt="">
        </label>
        
        <br>

        <div>
        <label>
            <input name="kod" class="txt" type="number" placeholder="1234">
        </label>

        <br>

        <input class="sub" type="submit" value="Testiqle">
        </div>
    </form>

</body>
</html>