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
    if (isset($_POST["login-btn"])) {
        include "db-admin.php";
        $query = $connect->prepare("select * from admins where adminEmail = ?");
        $query->execute([$_POST["email"]]);
        $admin = $query->fetch(PDO::FETCH_ASSOC);
        if ($admin && password_verify($_POST["password"], $admin["adminPassword"])) {
            session_start();
            $_SESSION["adminname"]=$admin["adminName"];
            header("location:video-panel.php");
            exit();
        }
        else{
            echo "<p style='background-color:red; color:white;'>E-posta veya Şifre hatalı.</p>";
        }
    }
    ?>
    <div class="form-container">
        <div class="processes">
            <ul class="navbar-nav">
                <li class="nav-item"><b><a style="text-decoration: none; color:black;" href="../index.php">Geri dön</a></b>
                </li>
            </ul>
            <hr><br>
            <h3 style="text-align:center; font-size:50px;">Hoşgeldin yönetici</h3><br>
            <form action="" class="login-form" method="POST">
                <input class="form-control" type="email" name="email" placeholder="E-posta" maxlength="50" required><br>
                <input class="form-control" type="password" name="password" placeholder="Şifre" minlength="8"
                    maxlength="50" required><br>
                    <div class="d-grid gap-2">
                    <button class="btn btn-success btn-lg" name="login-btn">Giriş yap</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
</body>
</html>