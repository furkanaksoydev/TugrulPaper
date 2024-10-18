<?php

require_once "veritabani.php";

?>

<!doctype html>
<html lang"tr">
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="Sehayat Yolculuk Firması">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>TuğrulPaper - Rastgele Fotoğraf</title>
         
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/rastgelefotograf.css">
    </head>
    
    <body>
        <header>
            <div class="container-head">
                <div class="logo">
                    <a href="mainmenu.php"><img src="resimler/logo.png"></a>
                </div>
                <div class="menu">
                    <u1>
                        
                        <li><a href="mainmenu.php">ANA SAYFA</a></li>
                        <li><a href="rastgelefotograf.php">Rastgele Fotoğraf</a></li>
                        <li><a href="iletisim.php">İletişim</a></li>
                        <li><a href="fotografyukle.php">Fotoğraf Yükle</a></li>
                        <li><a href="index.php">Çıkış Yap</a></li>
                    
                    </u1>
                </div>
            </div>
        </header>
        
        <section id="features" class="section-area">
            <div class="features-body">
                <div class="container">
                    <?php
                    $db=new \database();

                    

                        $myQuery=$db->TableOperations("SELECT Resim_Kodu, Resim_Adi FROM resimler ORDER BY RAND() LIMIT 1");
                        
                        foreach($myQuery as $items)
                        {
                            ?>
                            <div class="col3">
                                <div class="item">
                                    <div>
                                        <img src="wallp/<?php echo $items['Resim_Kodu']; ?>" class="resim" style="width:900px;height: 560px">
                                    </div>
                                        <div class="item-text">

                                            <?php

                                            $resim=$items["Resim_Kodu"];
                                            echo $items["Resim_Adi"]."<br><br>";

                                            ?>
                                            <a href="wallp/<?php echo $items['Resim_Kodu']; ?>" download="wallpaper.jpg">
                                                Resmi İndir
                                            </a>
                                        </div>
                                </div>
                            </div>

                            <br>

                            <?php
                        }
                    ?>
                </div>
            </div>
        </section>
        
    </body>
</html>