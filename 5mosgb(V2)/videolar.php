<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5M OSGB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="logo.png">
</head>

<body>
    <?php
    include "admin/db-admin.php";
    include "navbar.php";
    ?>
    </div>
    </nav><br>
    <div class="anasayfa">
        <h2>VİDEOLARIMIZ</h2>
        <hr>
        <?php
        $sql = "SELECT * FROM videos ORDER BY videoAddTime desc;";
        $query = $connect->prepare($sql);
        $query->execute();
        while ($video = $query->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="card" value=<?=$video['videoID']?>>
                
                        <b><?= $video['videoIframe']; ?><b>

                </div>
                <?php } ?>
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="java.js"></script>
</body>

</html>