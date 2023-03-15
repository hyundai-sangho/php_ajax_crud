<?php

// mySQL 연동
require_once 'connect.php';

$updateId = $_POST['id'];

if (isset($updateId)) {
  $sql = "SELECT * FROM `crud` WHERE id = $updateId";
  $result = mysqli_query($con, $sql);

  $row = mysqli_fetch_assoc($result);

  $name = $row['name'];
  $email = $row['email'];
  $mobile = $row['mobile'];
  $place = $row['place'];
}

?>


<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- 부트스트랩 CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5 d-flex justify-content-center">
    <div class="input-form-backgroud row">
      <div class="input-form col-md-12 mx-auto">

        <h4 class="mb-3">사용자 정보 업데이트</h4>

        <div class="mb-3">
          <label for="name">이름</label>
          <input type="text" class="form-control" id="name" value="<?= $name ?>" required>
          <div class="invalid-feedback">
            이름을 입력해주세요.
          </div>
        </div>

        <div class="mb-3">
          <label for="email">이메일</label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com" value="<?= $email ?>" required>
          <div class="invalid-feedback">
            이메일을 입력해주세요.
          </div>
        </div>

        <div class="mb-3">
          <label for="mobile">핸드폰</label>
          <input type="text" class="form-control" id="mobile" value="<?= $mobile ?>" required>
          <div class="invalid-feedback">
            주소를 입력해주세요.
          </div>
        </div>

        <div class="mb-3">
          <label for="place">지역</label>
          <input type="text" class="form-control" id="place" value="<?= $place ?>" required>
          <div class="invalid-feedback">
            주소를 입력해주세요.
          </div>
        </div>

        <div>
          <button type="button" onclick="updateUser(<?= $updateId ?>)" class="btn btn-dark">수정 완료</button>
        </div>
      </div>
    </div>
  </div>

  <!-- AXIOS -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <!-- 부트스트랩 JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script src="./js/updateUserComplete.js"></script>
</body>

</html>
