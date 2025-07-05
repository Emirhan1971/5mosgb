<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5M OSGB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="icon" href="../logo.png">
</head>

<body>
    <?php
    include "security.php";
    if (isset($_POST["add"])) {
    include "db-admin.php";
    $sql = "INSERT INTO videos (videoName,videoIframe) VALUES (?, ?)";

    
    try {
        $data = [
                    mb_strtoupper($_POST["videoName"]),
                    $_POST["videoIframe"]
                ];
                
                $sth = $connect->prepare($sql);
                $sonuc = $sth->execute($data);
                
                if ($sonuc) {
                    echo "<p style='background-color:green; color:white;'>Video başarılı bir şekilde eklendi.</p>";
                }
           } catch(Exception $e){
                echo " <p style='background-color:red; color:white;'>Bir sorun oluştu. Tüm bilgileri doldurduğunuzdan emin olun</p>";
        }
        }  
?>

    <div class="form-container">
        <div class="video-process">
            <ul class="navbar-nav">
                <li class="nav-item"><b><a style="text-decoration: none; color:black;" href="video-panel.php">Geri dön</a></b>
                </li>
            </ul>
            <hr>
            <h2 style="text-align:center; font-size:30px; color:black;">Video bilgilerini giriniz.</h2><br>
            <form action=""  method="POST" enctype="multipart/form-data">
                <input class="form-control" type="text" name="videoName" placeholder="Video ismi" maxlength="64"
                    required> <br>
               
                <?php
                include "db-admin.php";
            ?>
                <textarea class="form-control" name="videoIframe" placeholder="Youtube yerleştirme kodunu giriniz."></textarea>
                <p style='color:red;'><b>NOT: YERLEŞTİRME KODU İÇİNDEN "WIDTH" VE "HEIGHT" BÖLÜMÜNÜ SİLİNİZ.</b></p><br>
                <div class="d-grid gap-2">
                    <button class="btn btn-success btn-lg" name="add">Ekle</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="java.js"></script>
</bod>

</html>