<?php

// mySQL 연동
require_once 'connect.php';

if (isset($_POST['displaySend'])) {
  $table =
    '<table class="table">
      <thead class="thead-dark">
      <tr>
        <th scope="col">순번</th>
        <th scope="col">이름</th>
        <th scope="col">메일</th>
        <th scope="col">핸폰</th>
        <th scope="col">지역</th>
        <th scope="col">작업</th>
      </tr>
      </thead>';

  $sql = "SELECT * FROM `crud`";
  $result = mysqli_query($con, $sql);
  $number = 1;

  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $place = $row['place'];

    $table .=
      '<tr>
        <td scope="row">' . $number . '</td>
        <td>' . $name . '</td>
        <td>' . $email . '</td>
        <td>' . $mobile . '</td>
        <td>' . $place . '</td>
        <td>
        <form action="update.php" method="post" style="display:inline">
          <button class="btn btn-dark" name="id" value="' . $id . '">업뎃</button>
        </form>
          <button class="btn btn-danger" onclick="deleteItem(' . $id . ')">삭제</button>
        </td>
      </tr>';

    $number++;
  }

  $table .= '</table>';
  echo $table;
}
