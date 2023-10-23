<?php

$login= $_POST['login'];
$password= $_POST['password'];
$email=$_POST['email'];
$repeatPass = $_POST['repeatPass'];

{
    $databaseConnection = new PDO('mysql:dbname=app;host=127.0.0.1', 'sautinaed', 'root');
    $sth = $databaseConnection
        ->prepare("INSERT INTO `user` (password, email) values (:password, :email)");
    $sth->execute(['email' => $email, 'password' => sha1($password)]);
}

?>