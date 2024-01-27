<?php
include "connect.php";
$sql=$conn->prepare("SELECT *FROM `users`");
$sql->execute();
$result=$sql->fetchall();
$jsonbek=json_encode($result);
print_r($jsonbek);