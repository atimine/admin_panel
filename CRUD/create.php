<?
session_start();
include "../connect.php";
if(isset($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password'], $_POST['age']))
{
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $stmt = $conn->prepare("INSERT INTO `users` (`name`, `surname`, `age`, `email`, `passwords`) VALUES(:name, :surname, :age, :email, :passwords)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':passwords', $password);
    $stmt->execute();
    $_SESSION['message'] = "Data inserted succesfully !!!";
    header('Location: ../index.php');
}
else     
$_SESSION['message'] = "FULL FILL THIS INPUTS";
header('Location: ../index.php');
exit(0);
