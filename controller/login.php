<?php

ob_start();


if (isset($_POST["login"])) {
    date_default_timezone_set("Africa/Cairo");
    include './model/manage_user.php';
    $manage = new manage_user();
    $user = $_POST["login_user"];
    $pass = md5($_POST["login_pass"]);
    if (empty($user) || empty($user)) {
        $error = "All Fields are required";
    }

    $login = $manage->login($user, $pass);
    if ($login > 0) {

        if (isset($_POST["remember"]) && $_POST["remember"] == "re") {
            $_SESSION["name"] = $user;
            $_SESSION["id"] = $manage->getId($user);
            
            
            setcookie("name", $user, time() + 720000);
           echo("<script>location.href = '".$_SERVER["PHP_SELF"]."';</script>");
        } else {
            $_SESSION["name"] = $user;
        }
    } else {
        echo $login;
        $error = "The user name or passowrd is incorrect";
    }
}


else {
    include './view/login.php';
    ob_end_flush();
}
?>