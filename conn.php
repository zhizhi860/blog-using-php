<?php
  $server_name='127.0.0.1';
  $user_name='root';
  $user_password='password';
  $db_name='new_test';

  $conn = new mysqli($server_name ,$user_name, $user_password, $db_name);
  if ($conn->connect_error) {
      die('連線Failed');
  } else {
      
  }
?>
