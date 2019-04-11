<?php

session_start();

if (isset($_POST['submit'])) {
  include_once 'SQLconn.php';

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['pswd']);
  $playerIcon = mysqli_real_escape_string($conn, $_POST['icon']);
  $sessionUID = $_SESSION['u_uid'];

  if (!preg_match("/^[a-zA-Z]*$/", $username)) {
    header("Location: ../Account.php?edit=InvalidName");
    exit();
  } else{
    $sql = "SELECT * FROM players WHERE playerName = '$username'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0 ) {
      header("Location: ../Account.php?edit=UsernameTaken");
      exit();
    }else {
      $row = mysqli_fetch_assoc($result);
      $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
      if (empty($username) && !empty($password) && !empty($playerIcon)) {
        $sql = "UPDATE players SET playerIcon ='$playerIcon', playerPassword = '$hashedPwd' WHERE playerName = '$sessionUID'";
        mysqli_query($conn, $sql);
        $sql = "SELECT * FROM players WHERE playerName = '$sessionUID'";
        $result = mysqli_query($conn, $sql);
        $_SESSION['u_icon'] = $row['playerIcon'];
        $_SESSION['u_pswd'] = $password;
        header("Location: ../index.php?edit=Succesful");
        exit();
      } elseif (empty($password) && !empty($username) && !empty($playerIcon)) {
          $sql = "UPDATE players SET playerName ='$username', playerIcon ='$playerIcon' WHERE playerName = '$sessionUID'";
          mysqli_query($conn, $sql);
          $sql = "SELECT * FROM players WHERE playerName = '$username'";
          $result = mysqli_query($conn, $sql);
          $_SESSION['u_uid'] = $row['playerName'];
          $_SESSION['u_icon'] = $row['playerIcon'];
          header("Location: ../index.php?edit=Succesful");
          exit();
      } elseif (empty($playerIcon) && !empty($username) && !empty($password)) {
          $sql = "UPDATE players SET playerName ='$username', playerPassword = '$hashedPwd' WHERE playerName = '$sessionUID'";
          mysqli_query($conn, $sql);
          $sql = "SELECT * FROM players WHERE playerName = '$username'";
          $result = mysqli_query($conn, $sql);
          $_SESSION['u_uid'] = $row['playerName'];
          $_SESSION['u_pswd'] = $password;
          header("Location: ../index.php?edit=Succesful");
          exit();
      } elseif (empty($password) && empty($username)  && !empty($playerIcon)) {
          $sql = "UPDATE players SET playerIcon ='$playerIcon' WHERE playerName = '$sessionUID'";
          mysqli_query($conn, $sql);
          $sql = "SELECT * FROM players WHERE playerName = '$sessionUID'";
          $result = mysqli_query($conn, $sql);
          $_SESSION['u_icon'] = $row['playerIcon'];
          header("Location: ../index.php?edit=Succesful");
          exit();
      } elseif (empty($username) && empty($playerIcon)  && !empty($password)) {
          $sql = "UPDATE players SET playerPassword = '$hashedPwd' WHERE playerName = '$sessionUID'";
          mysqli_query($conn, $sql);
          $sql = "SELECT * FROM players WHERE playerName = '$sessionUID'";
          $result = mysqli_query($conn, $sql);
          $_SESSION['u_pswd'] = $password;
          header("Location: ../index.php?edit=Succesful");
          exit();
      } elseif (empty($password) && empty($playerIcon)  && !empty($username)) {
          $sql = "UPDATE players SET playerName ='$username' WHERE playerName = '$sessionUID'";
          mysqli_query($conn, $sql);
          $sql = "SELECT * FROM players WHERE playerName = '$username'";
          $result = mysqli_query($conn, $sql);
          $_SESSION['u_uid'] = $row['playerName'];
          header("Location: ../index.php?edit=Succesful");
          exit();
      } else {
          $sql = "UPDATE players SET playerName ='$username', playerIcon ='$playerIcon', playerPassword = '$hashedPwd' WHERE playerName = '$sessionUID'";
          mysqli_query($conn, $sql);
          $sql = "SELECT * FROM players WHERE playerName = '$username'";
          $result = mysqli_query($conn, $sql);
          $_SESSION['u_uid'] = $row['playerName'];
          $_SESSION['u_icon'] = $row['playerIcon'];
          $_SESSION['u_pswd'] = $password;
          header("Location: ../index.php?edit=Succesful");
          exit();
      }
    }
  }
}
