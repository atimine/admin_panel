<?php
include "connect.php";
// if(i.sset($_POST['finddata']))
// {
    // $find_data = $_POST['finddata'];
    $sth = $conn->prepare("SELECT *FROM `users` WHERE `name` = '$find_data'");
    $sth->execute();
    $results = $sth->fetchAll();
    foreach($results as $result)
    {
        $name = $result['name'];
        $surname = $result['surname'];
        $email = $result['email'];
        $age = $result['age'];

    }
// }
