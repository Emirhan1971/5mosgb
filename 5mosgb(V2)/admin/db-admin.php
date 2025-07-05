<?php
$dsn='mysql:dbname=database; host=hostName';
$user='userName';
$password='pass';

try{
    $connect=new PDO($dsn,$user,$password);
 }
catch (PDOException $e){
    echo "Bağlantı kurulamadı ". $e->getMessage();
}
?>