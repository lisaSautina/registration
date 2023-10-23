<?php
var_dump($_POST);
die();
$login= $_POST['login'];
$password= $_POST['password'];


$sql = "select'names'(login, password, email) VALUES ('$login','$password')"
?><?php
