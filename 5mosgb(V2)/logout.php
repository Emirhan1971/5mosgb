<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Görüşürüz</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.png">
</head>
<body>

    <?php
    session_start();
    if(isset($_SESSION["username"])){
        echo "<h1 style='background-color:red; text-align:center;'>Görüşürüz yine bekleriz ".$_SESSION["username"]."</h1>";
    }
    header("Refresh: 1; URL=index.php");
    session_destroy();
    ?>
  
</body>
</html>