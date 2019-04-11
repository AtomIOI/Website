<?php

if (isset($_POST['submit'])) {
  include_once 'SQLconn.php';

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['pswd']);
  $playerIcon = mysqli_real_escape_string($conn, $_POST['icon']);

  if(empty($username) || empty($password)){
    header("Location: ../CreateAccount.php?player=Empty");
    exit();
  }else {
    if (!preg_match("/^[a-zA-Z]*$/", $username)) {
      header("Location: ../CreateAccount.php?player=InvalidName");
      exit();
    } else{
      $sql = "SELECT * FROM players WHERE playerName = '$username'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0 ) {
        header("Location: ../CreateAccount.php?player=UsernameTaken");
        exit();
      }else {
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO players (playerName, playerIcon, playerPassword) VALUES ('$username' ,'$playerIcon','$hashedPwd');";
        mysqli_query($conn, $sql);
        header("Location: ../CreateAccount.php?player=Succesful");
        exit();
      }
    }
  }
} else {
  header("Location: ../CreateAccount.php");
  exit();
}
