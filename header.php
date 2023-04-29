<?php
require_once 'user.php';
//User sınıfı
$user = new User($pdo);

//Read
$data = $user->read();

//Add User
if (isset($_POST['adduserpost'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $user->create($_POST['name'], $_POST['email']);
    header("Location:index.php");
}

// Read By Id
if (isset($_GET['userupdate_id'])) {
   $user_id = strip_tags($_GET['userupdate_id']);
   $user_data = $user->readById($user_id);
}

// Delete User
if (isset($_GET['userdelete_id'])) {
    $user_id = strip_tags($_GET['userdelete_id']);
    $user->delete($user_id);
    header("Location:index.php");
 }

 // Update User
 if (isset($_POST['updateuserpost'])) {
    $user_id = strip_tags($_POST['user_id']);
    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $user->update($user_id,$name,$email);
    header("Location:index.php");

 }




?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>

<body>