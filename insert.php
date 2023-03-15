<?php

// mySQL 연동
require_once 'connect.php';

// $_POST 받은 배열의 값들을 하나, 하나 변수에 대입
// ex) $_POST['nameSend']의 값을 $nameSend 변수로 추출
extract($_POST);

// 이름, 이메일, 핸드폰 번호, 사는 곳 입력했을 때만 INSERT 쿼리 작동
if (isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['mobileSend']) && isset($_POST['placeSend'])) {
  $sql = "INSERT INTO `crud` (name, email, mobile, place) VALUES ('$nameSend', '$emailSend', '$mobileSend', '$placeSend')";
  $result = mysqli_query($con, $sql);
}
