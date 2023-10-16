<?php
require "serverconfig.php";
include 'includes.php';

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$reppass = $_POST["reppass"];

if($email!=filter_var($email, FILTER_VALIDATE_EMAIL)){
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Почта верная";
}
else{
    $log = "Пользователь ввел неверную почту($email)";
    logger($log);
    echo "Почта неверная";
}
if($firstname==""){
    $log = "Пользователь ввел неверное имя($firstname)";
    logger($log);
    echo "Введите имя";
}
elseif($password==""){
    $log = "Пользователь ввел неверный пароль($password)";
    logger($log);
    echo "Введите пароль";
}
elseif($password!=$reppass){
    echo "Подтвердите пароль";
}}
else{
$main="SELECT email FROM users WHERE email = '$email'";
$row=$conn->query($main);
$user=$row->fetch_assoc();

if(!empty($user["email"])){
    $log = "Пользователь ввел уже существующую почту($email)";
    logger($log);
    echo "Такая почта уже зарегистрирована";
}
else{
    $log = "Пользователь зарегестрировался($firstname,$lastname,$email,$password)";
    logger($log);
    $sql="INSERT INTO users(firstname, lastname, email, password) VALUES(?, ?, ?, ?)";
    $query=$conn->prepare($sql);
    $query->execute([$firstname,$lastname,$email,$password]);
    echo "Вы зарегистрировались";
}

}

