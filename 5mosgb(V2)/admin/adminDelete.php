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
if (isset($_POST["delete"])) {
    
    include "db-admin.php";
    $sql = "DELETE from admins where adminID=?" ;
            try {
                $data = [
                    $_POST["adminID"]
                ];
                
                $sth = $connect->prepare($sql);
                $sonuc = $sth->execute($data);
                
                if ($sonuc) {
                    echo "<p style='background-color:green; color:white;'>Admin başarılı bir şekilde silinde.</p>";
                }
            } catch (PDOException $e) {
                    echo "<p style='background-color:red; color:white;'>Bir hata oluştu. </p>";
            }
        } 
    
?>

    <div class="form-container">
        <div class="processes">
            <ul class="navbar-nav">
                <li class="nav-item"><b><a style="text-decoration: none; color:black;" href="admin-panel.php">Geri dön</a></b>
                </li>
            </ul>
            <hr>
            <h3 style="text-align:center; font-size:50px;">Admin sil</h3><br>
            <form action="" method="POST">
                <input class="form-control" type="number" name="adminID" placeholder="Silmek istediğiniz admin no giriniz."
                    required><br>
                <p style="color:red;"><b>NOT: </b>Bu işem geri alınamaz!</p>
                <div class="d-grid gap-2">
                    <button class="btn btn-success btn-lg" name="delete">Sil</button>
                </div>
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