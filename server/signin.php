<?php

    if (isset($_POST['submit'])){
        $email = $_POST["Correo"];
        $passwrd = $_POST["Contraseña"];
        $passwrdRep = $_POST["Confirmar-Contraseña"];

        include_once 'dbm.php';
        include_once 'functions.php';

        if (emptyInputSignup($email, $passwrd, $passwrdRep) != false){
            header("location: ../signin.php?error=emptyinput");
            exit();
        }

        if (invalidEmail($email) != false){
            header("location: ../signin.php?error=invalidemail");
            exit();
        }

        if (pwdMatch($passwrd, $passwrdRep) != false){
            header("location: ../signin.php?error=passwordsdontmatch");
            exit();
        }

        if (userExists($conn, $email) != false){
            header("location: ../signin.php?error=userexists");
            exit();
        }

        if (isset($_SESSION['ID_Usuario'])){
            logout();
        }
        createUser($conn, $email, $passwrd);

    }else{
        header("location: ../signin.php");
        exit();
    }
?>