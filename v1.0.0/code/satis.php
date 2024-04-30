<?php
    include_once "_listKat.php";
    include_once "_listProductAll.php";
    include_once "_axtar.php";
    include_once "_productCat.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/satis.css">
    <script src="./js/satis.js"></script>
    <link rel="icon" href="./img/logo.png">
    <title>MY STORE</title>
</head>
<body>
    
    <div class="header" id="top">
        <div class="left">
            <a href="satis.php">
                <img src="./img/logo.png" alt="">
            </a>
        </div>

        <div class="right">
            <form action="" method="get">
                <input type="text" name="acar" id="" placeholder="axtar...">
                <button>
                    <img src="./img/search.png" alt="">
                </button>
            </form>
        </div>

    </div>

    <div class="nav">
        <a href="#">KATEQORİYALAR</a>
        <ul>
            <?php foreach($KATEQORIYA as $kat): ?>
                <?php if($kat['stat']==1): ?>
                    <li>
                        <a href="?katAxtar=<?php echo $kat['adi']; ?>">
                            <?php echo $kat['adi']; ?>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>

        <a href="#">HAQQIMIZDA</a>
        <a href="#">ƏLAQƏ</a>
            

    </div>

    <p class="map">
        <a href="#">AloShop</a>
        / 
        <b>
            <?php 
                if(isset($acar)) echo $acar;
                elseif(isset($katAxtar)) echo $katAxtar;
                else echo "Bütün məhsullar"; 
            ?>
        </b>
    </p>

    <div class="content">
    
                    <?php if(count($PRODUCTALL)): ?>
                        <?php foreach($PRODUCTALL as $PAll): ?>

                            <div class="item">

                                <a href="sifaris.php?proId=<?php echo $PAll['id']; ?>">
                                    <?php if($PAll['endirim_qiymeti']!=0): ?>
                                        <div>
                                            <b>
                                                <?php  echo round(100 - $PAll['endirim_qiymeti'] * 100 / $PAll['oz_qiymeti'],1); ?>
                                                %
                                            </b>
                                            <img src="./img/faiz.png">
                                        </div>
                                    <?php endif; ?>
                                    

                                    <img src="./img/mehsul/<?php echo $PAll['foto']; ?>" >
                                    <h3>
                                        <?php echo $PAll['adi']; ?>
                                    </h3>
                                    <p>
                                        <b><?php echo $PAll['oz_qiymeti']; ?> AZN</b>

                                        <?php if($PAll['endirim_qiymeti']!=0): ?>
                                            <b><s><?php echo $PAll['endirim_qiymeti']; ?> AZN</s></b>
                                        <?php endif; ?>
                                    </p>
                                </a>
                            </div>
                        
                        <?php endforeach; ?>
                    <?php else:?>
                        <h1>Bele bir mehsul movcud deyil</h1>
                    <?php endif;?>
    </div>


    <a class="top" href="#top">^</a>

</body>
</html>