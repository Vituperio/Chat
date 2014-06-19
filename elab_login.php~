<?php
  include('config.php');
  
  $name = mysql_real_escape_string($_POST['user']);
  $pass = mysql_real_escape_string(md5($_POST['pass']));
  $row = array();
  
  $query = "SELECT user_id FROM user WHERE user_name='$name' AND user_pass='$pass' LIMIT 1;";
  
  
  $results = mysql_query($query) or die("Wrong user or pass!");
  $row = mysql_fetch_assoc($results);
  
  if(!empty($row)){
    setcookie('name', $name);
    echo "<script>window.location.href='chat.php';</script>";
  } else {
    setcookie('name', "");
    echo "<script>alert('Wrong username or password!')</script>";
    echo "<script>window.location.href='index.php';</script>";
  }
  
?>
