<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignUp($name, $email, $uid, $pwd, $pwdrepeat) !== false) {
        header("location: ../users/signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($uid) !== false) {
        header("location: ../users/signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../users/signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdrepeat) !== false) {
        header("location: ../users/signup.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $uid, $email) !== false) {
        header("location: ../users/signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $uid, $pwd);

} else {
    header("location: ../users/signup.php");
    exit();
}