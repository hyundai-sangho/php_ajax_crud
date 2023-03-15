<?php

// mySQL 연동
require_once 'connect.php';

$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);

$updateId = trim($data['updateId']);
$name = trim($data['name']);
$email = trim($data['email']);
$mobile = trim($data['mobile']);
$place = trim($data['place']);

if (isset($updateId) && $name !== '' && $email !== '' && $mobile !== '' && $place !== '') {
  $sql = "UPDATE `crud` SET `name`='$name',`email`='$email',`mobile`='$mobile',`place`='$place' WHERE id = '$updateId'";
  $result = mysqli_query($con, $sql);
}
