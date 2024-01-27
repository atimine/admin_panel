<?php
include "connect.php";
if(isset($_POST['delete']))
{
    $sql=$conn->exec("DELETE *FROM `users` WHERE `name` = ?");
    
}