<?php

// mySQL 연동
require_once 'connect.php';

$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);
$deleteId = $data['deleteId'];

if (isset($deleteId)) {
  $sql = "DELETE FROM `crud` WHERE id = $deleteId";
  $result = mysqli_query($con, $sql);
}
