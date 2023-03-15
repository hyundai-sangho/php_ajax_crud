<?php

$con = new mysqli('localhost', 'root', '', 'bootstrap_crud');

if (!$con) {
  die(mysqli_error($con));
}
