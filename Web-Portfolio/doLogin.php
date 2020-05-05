<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $password = $_POST['password'];
    if($password == "Villanova")
    {
        $_SESSION["loggedIn"] = true;
        header("Location: cutestPets.php");
    }
    else {
        echo "Incorrect Password";
    }
}