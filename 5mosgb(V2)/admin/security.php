<?php
session_start();
if(!(isset($_SESSION["adminname"]))){
    header("location:admin-login.php");
}
?>