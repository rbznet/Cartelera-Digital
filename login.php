<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    if ($username === "andes" && $password === "andes") {
        include("C:\Users\Lautaro Fernandez\Desktop\HTML_CARTELERA\andes.html");
    } else {
        if ($username === "liniers" && $password === "liniers") {
            include("C:\Users\Lautaro Fernandez\Desktop\HTML_CARTELERA\liniers.html");

        }
    }
}
?>
