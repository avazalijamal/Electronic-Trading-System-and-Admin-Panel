<?php
    include_once "_isloginadmin.php";
    include_once "_user.php";
    include_once "_listKat.php";
    include_once "_listMehsul.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mehsullar</title>
    <link rel="icon" href="./img/icon.jpg">
    <link rel="stylesheet" href="./css/meshullar.css">
    <script src="./js/mehsul.js"></script>
</head>
<body>
    <div class="left">

        <div class="profil">
            <img src="./img/user/<?php echo $USERINFO['foto']  ?>" alt="">
            <div class="info">
                <h3><?php echo $USERINFO['tamadi']  ?></h3>
                <p><?php echo $USERINFO['email']  ?></p>
            </div>
            <a href="_cixis.php">
                <img src="./img/power.png" class="p">
            </a>
        </div>

        <div class="nav">
            <a href="admin.php">Sifarisler</a>
            <a style="background-color:#23D959;" href="mehsullar.php">Mehsullar</a>
            <a href="kateqoriya.php">Kateqoriyalar</a>
        </div>

    </div>

    <div class="right">

        <div class="header">
            <h3>Mehsullar</h3>
        </div>

        <ol class="list">

        <?php foreach($MEHSULLAR as $meh):?>
            <li style="<?php echo $meh['stat']==0? 'background-color:#CCCCCC;':'' ?>">
                <img src="./img/mehsul/<?php echo $meh['foto'] ?>" title="Mustang Usaq">
                <p class="inf">
                    <b><?php echo $meh['adi'] ?></b> <br>
                    <i>KATEQORİYA: <u><?php echo $meh['kateqoriya'] ?></u></i> <br>
                    <i>ÖZ QİYMƏTİ: <?php echo $meh['oz_qiymeti'] ?> AZN</i> <br>
                    <span>ENDİRİM QİYMƏTİ: <?php echo $meh['endirim_qiymeti'] ?> AZN</span> <br>
                    <span>SAYI: <?php echo $meh['say'] ?>  ƏDƏD</span>
                </p>

                <p class="status">
                    <a id="aa<?php echo $meh['id'] ?>" href="_statMeh.php?id=<?php echo $meh['id'] ?>&stat=1">
                        <input onchange="Klick('aa<?php echo $meh['id'] ?>')" type="radio" <?php echo $meh['stat']==1? 'checked':'' ?> id="">
                        Aktiv
                    </a>

                    <a id="da<?php echo $meh['id'] ?>" href="_statMeh.php?id=<?php echo $meh['id'] ?>&stat=0">
                        <input onchange="Klick('da<?php echo $meh['id'] ?>')" type="radio" <?php echo $meh['stat']==0? 'checked':'' ?> id="">
                        Deaktiv
                    </a>

                </p>

            </li>
            <?php endforeach; ?>
            
        </ol>

    </div>
    
    <button id="add" class="add">+</button>

    <div id="modal" class="modal">
        <form action="_addMehsul.php"  method="post" enctype="multipart/form-data">
            <label class="foto">
                <img id="img" src="./img/photo.png" >
                <input name="foto" id="file" type="file">
            </label>
            <label class="ad">
                Mehsulun adi: <br>
                <input minlength="2" required name="ad" type="text" placeholder="Mehsul adi">
            </label>
            <label class="say">
                Sayi: <br>
                <input required name="say" type="number" placeholder="5">
            </label>
            <label class="kat">
                Kateqoriya: <br>
                <select required name="kat">
                    <?php foreach($KATEQORIYA as $kat):?>
                        <?php if($kat['stat']==1): ?>
                            <option>
                                <?php echo $kat['adi'] ?>
                            </option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </label>
            <label class="qiymet">
                Oz qiymeti: <br>
                <input required name="qiymet_o" step="0.01" type="number" placeholder="250.8">
            </label>
            <label class="qiymet">
                Endirimli qiymet: <br>
                <input name="qiymet_e" step="0.01" type="number" placeholder="150.7">
            </label>
            <label class="haqqinda">
                Mehsul haqqinda: <br>
                <textarea minlength="30" required name="haqqinda"></textarea>
            </label>

            <input class="elaveet" type="submit" value="Elave Et">
            
        </form>
    </div>

</body>
</html>