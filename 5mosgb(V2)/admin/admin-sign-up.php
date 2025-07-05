<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5M OSGB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../logo.png">
</head>

<body>
<?php
include "security.php";
if (isset($_POST["btn-sign-up"])) {
    include "db-admin.php";
    $sql = "INSERT INTO `admins` (`adminName`, `adminLastname`, `adminEmail`, `adminPassword`) VALUES (?, ?, ?, ?)";
    
    if (isset($_POST["password"]) && isset($_POST["try_password"])) {
        if ($_POST["password"] == $_POST["try_password"]) {
            try {
                $data = [
                   mb_strtoupper($_POST["adminName"]),
                   mb_strtoupper($_POST["adminLastname"]),
                   mb_strtolower($_POST["email"]),
                    password_hash($_POST["password"], PASSWORD_DEFAULT)
                ];
                
                $sth = $connect->prepare($sql);
                $sonuc = $sth->execute($data);
                
                if ($sonuc) {
                    echo "<p style='background-color:green; color:white;'>Admin başarılı bir şekilde eklendi.</p>";
                }
            } catch (PDOException $e) {
                if ($e->errorInfo[1] == 1062) {
                    echo "<p style='background-color:red; color:white;'>Bu E-posta adresi zaten kullanılıyor.</p>";
                } else {
                    echo "<p style='background-color:red; color:white;'>Bir hata oluştu :(</p>";
                }
            }
        } else {
            echo "<p style='background-color:red; color:white;'>Şifreler uyuşmuyor! Lütfen tekrar deneyin</p>";
        }
    }
}
?>

    <div class="form-container">
        <div class="processes-hg-auto">
            <ul class="navbar-nav">
                <li class="nav-item"><b><a style="text-decoration: none; color:black;" href="admin-panel.php">Geri dön</a></b>
                </li>
            </ul>
            <hr>
            <h3 style="text-align:center; font-size:50px;">Admin ekle</h3><br>
            <form action="" class="signUp-form" method="POST">
                <input class="form-control" type="text" name="adminName" placeholder="Adınız" maxlength="50"
                    required><br>
                <input class="form-control" type="text" name="adminLastname" placeholder="Soyadınız" maxlength="50"
                    required><br>
                <input class="form-control" type="email" name="email" placeholder="E-posta" maxlength="255" required><br>
                <input class="form-control" type="password" name="password" placeholder="Şifre" minlength="8"
                    maxlength="50" required><br>
                <input class="form-control" type="password" name="try_password" placeholder="Şifre tekrarı"
                    minlength="8" maxlength="50" required><br>
                    <div class="d-grid gap-2">
                    <button class="btn btn-success btn-lg" name="btn-sign-up">Ekle</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="java.js"></script>
</body>

</html>