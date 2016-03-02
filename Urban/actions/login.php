<?php

include("../actions/db.php");
include ("../actions/checked_logged_in.php");

$email = $_POST["email"];
$pass = sha1($_POST["password"]);
//echo $email;
$stmt = $db->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
$stmt->bindValue(":email", $email);
$stmt->bindValue(":password", $pass);
$stmt->execute();
if ($user = $stmt->fetchObject()) {
    $_SESSION["right_id"] = $user->right_id;
    $_SESSION["email"] = $user->email;
    $_SESSION["user_id"] = $user->user_id;
    echo "$user->right_id";
    echo "logged in";
    header("Location: ../");
} else {
    die("You dont have permission to login");
}