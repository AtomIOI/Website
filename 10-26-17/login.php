<?php

session_start();

if (isset($_POST['submit'])) {
  include_once 'SQLconn.php';

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['pswd']);

  if (empty($username) || empty($password)){
    header("Location: ../EditAccount.php?login=empty");
    exit();
  }else {
    $sql = "SELECT * FROM players WHERE playerName = '$username'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1 ) {
      header("Location: ../EditAccount.php?login=error");
      exit();
    }else {
      if ($row = mysqli_fetch_assoc($result)) {
        $hashedPwdCheck = password_verify($password, $row['playerPassword']);
        if ($hashedPwdCheck == false){
          header("Location: ../EditAccount.php?login=error");
					exit();
        }elseif ($hashedPwdCheck == true) {
          $_SESSION['u_uid'] = $row['playerName'];
					$_SESSION['u_elo'] = $row['playerElo'];
					$_SESSION['u_icon'] = $row['playerIcon'];
					$_SESSION['u_pswd'] = $password;
					header("Location: ../Account.php?login=success");
					exit();
        }
      }
    }
  }
} else {
	header("Location: ../index.php?login=error");
	exit();
}
