<?php

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    login($email, $password);
}

function login($user, $pass)
{
    $getModel = new loginForm;
    print_r($getModel);
    $validate = $getModel->login($user, $pass);
    if ($validate) {
        $_SESSION[] = $validate['id_user'];
        header("Location: ../homeAdmin.php");
    } else {
        return false;
    }
}
