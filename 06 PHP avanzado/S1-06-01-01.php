<?php
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST["email"]);
        $pass = htmlspecialchars($_POST["pass"]);
        $tlf = htmlspecialchars($_POST["tlf"]);
        echo $nombre . "<br>" . $email . "<br>" . $pass . "<br>" . $tlf . "<br>";
    
        echo session_id() . "<br>";
        $_SESSION["username"] = $_POST['nombre'];
        $_SESSION["useremail"] = $_POST["email"];
        $_SESSION["usertlf"] = $_POST["tlf"];
        print_r($_SESSION) . "<br>";
    }
?>