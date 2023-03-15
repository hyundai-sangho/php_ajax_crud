<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Bootstrap Modal CRUD</title>
  <!-- 부트스트랩 CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
  <!-- 모달 -->
  <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">새로운 사용자</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="completeName">이름</label>
            <input type="text" class="form-control" id="completeName" placeholder="이름 입력">
          </div>
          <div class="form-group">
            <label for="completeEmail">이메일</label>
            <input type="email" class="form-control" id="completeEmail" placeholder="이메일 입력">
          </div>
          <div class="form-group">
            <label for="completeMobile">핸드폰 번호</label>
            <input type="text" class="form-control" id="completeMobile" placeholder="휴대폰 번호 입력">
          </div>
          <div class="form-group">
            <label for="completePlace">사는 지역</label>
            <input type="text" class="form-control" id="completePlace" placeholder="사는 지역 입력">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" onclick="addUser()" class="btn btn-dark" data-dismiss="modal">승인</button>
        </div>
      </div>
    </div>
  </div>
  <!-- 모달 끝 -->

  <div class="container my-3">
    <h1 class="text-center">PHP CRUD operations using Bootstrap Modal</h1>
    <button type="button" class="btn btn-dark mb-2" data-toggle="modal" data-target="#completeModal">새로운 사용자</button>

    <div id="displayDataTable"></div>
  </div>

  <!-- 부트스트랩 JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- AXIOS -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <script src="./js/start.js"></script>
  <!-- 사용자 정보 입력 -->
  <script src="./js/addUserData.js"></script>
  <!-- 사용자 정보 삭제 -->
  <script src="./js/deleteUserData.js"></script>
</body>

</html>
