<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5M OSGB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="../logo.png">
</head>

<body>
            <?php
            include "security.php";
            include "db-admin.php";
            $sql="select * from admins;";
            $query=$connect->prepare($sql);
            $query->execute();
            include "admin-navbar.php";
           include "adminProfil.php";
           ?>
        </div>
    </nav><br>
    <div class="anasayfa">
        <a class="btn btn-outline-light" href="admin-sign-up.php">Admin ekle</a><br><br>
        
            <table class="table table-hover table-dark table-striped">
                <thead>
                    <tr>
                        <th>Admin no</th>
                        <th>Admin ismi</th>
                        <th>Admin soyismi</th>
                        <th>Admin Email</th>
                        <th>İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($data=$query->fetch(PDO::FETCH_ASSOC)){ ?>
                    <tr>
                        <td><?=$data['adminID']?></td>
                        <td><?=$data['adminName']?></td>
                        <td><?=$data['adminLastname']?></td>
                        <td><?=$data['adminEmail']?></td>
                        <td>
                            <div class="btn-group">
                                <a href="adminDelete.php" class="btn btn-danger">Sil</a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="java.js"></script>
</body>

</html>