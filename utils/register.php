<?php

    if(isset($_POST["register"])){

        $uName = $_POST["uName"];
        $uEmail = $_POST["uEmail"];
        $userName = $_POST["userName"];
        $password = $_POST["password"];
        $rePassword = $_POST["rePassword"];

        echo $uName."<br>";
        echo $uEmail."<br>";
        echo $userName."<br>";
        echo $password."<br>";
        echo $rePassword."<br>";

    }
?>