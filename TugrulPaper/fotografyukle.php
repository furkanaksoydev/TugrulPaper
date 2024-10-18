<?php
     
include("baglan.php");

if(isset($_POST["kaydet"]))
{
    $yeniresimadi=$_POST["resimadi"]; 
    
    $yukleklasor = "wallp/";
    $tmp_name = $_FILES['yukle_resim']['tmp_name'];
    $name = $_FILES['yukle_resim']['name'];
    $boyut = $_FILES['yukle_resim']['size'];
    $tip = $_FILES['yukle_resim']['type'];
    $uzanti = substr($name,-4,4);
    $rastgelesayi1 = rand(10000,50000);
    $rastgelesayi2 = rand(10000,50000);
    $resimkod = $rastgelesayi1.$rastgelesayi2.$uzanti;

    // DOSYA VARMI KONTROL

    if(strlen($name) == 0)
    {
        echo "bir dosya seçiniz!";
        exit();
    }

    // BOYUT KONTROL
    if($boyut > (1024*1024*3))
    {
        echo "dosya boyutu çok fazla!";
        exit();
    }

    // TİP KONTROL

    if($tip != 'image/jpeg' && $tip != 'image/png' && $uzanti != 'jpg')
    {
        echo "Yükleyeceğiniz resim yalnızca jpg,jpeg veya png formatında olabilir!";
    }

    move_uploaded_file($tmp_name, "$yukleklasor/$resimkod");

    
    
    
    
    $ekle="INSERT INTO resimler (Resim_Adi,Resim_Kodu) VALUES ('$yeniresimadi','$resimkod')";
    
    $calistirekle = mysqli_query($mylidb,$ekle);
    
    if ($calistirekle)
    {
        echo"<script>alert('Araç başarıyla kaydedildi.')</script>";
        {header('Location:mainmenu.php');}
    }
    
    else 
    {
        echo"<script>alert('Kayıt başarısız.')</script>"; 
    }
    
    mysqli_close($db);
    
    ?>
    
    

    <?php
        
}


?>

<!doctype html>
<html lang"tr">
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="Sehayat Yolculuk Firması">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>TuğrulPaper - Fotoğraf Yükle</title>
         
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/fotografyukleee.css">
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
        
        <section id="main-slider-kayit" class="slider-kayit">
            <div id="main-caption-kayit" class="caption-kayit">
                <p>Yeni kaydedeceğiniz resim için bilgileri doldurunuz.</p>
            </div>
        </section>
        
        
        <section id="parallax-kayit" class="section-area">
            <div class="paralax-top">
                <div class="kayit-container">
                    <form class="inputlar" action="fotografyukle.php" method="POST" enctype="multipart/form-data">
                        <br>
                    <div class="mb3">
                        <label class="kayit-l">Resim Adı</label>
                        <input class="inp dur" type="text" name="resimadi" required>
                    </div>
                        <br><br>
                    <div class="mb3">
                        <label class="kayit-l">Araç Resim</label>
                        <input class="inpresim" type="file" name="yukle_resim" required/>
                    </div>
                        <br>
                    <button class="inpbutton" type="submit" value="Yükle" name="kaydet">Kaydet</button>
                        <br><br>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>