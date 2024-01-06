<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "lab1";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    require_once '../bai 4/Controller/Controller.php';
    $userController = new UserController($db);
    $users = $userController->getUsers();

    require_once '../bai 4/View/View.php';
} catch (PDOException $e) {
    echo "conent failed: " . $e->getMessage();
}
?>