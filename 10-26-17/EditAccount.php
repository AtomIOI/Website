<!DOCTYPE html>
<html>

<head>
  <title> SquadGrunt</title>
  <meta charset="utf-8">
  <meta name="description" content="Smash leaderboard">
  <meta name="author" content="Juan Benavides">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="w3-theme-blue.css">
  <link rel="stylesheet" href="Test.css">
  <link rel="stylesheet" href="w3.css">
  <link rel="icon" href="Images/favicon.png">
</head>

<body>
  <div class="w3-sidebar w3-bar-block w3-card w3-theme-d2 w3-center w3-xlarge" style="width:15%">
    <h3 class="w3-bar-item w3-xxxlarge " >Content</h3>
    <a href="." class="w3-bar-item w3-button w3-padding-16">Leaderboard</a>
    <a href="Matches.php" class="w3-bar-item w3-button w3-padding-16">Matches</a>
    <a href="EditAccount.php" class="w3-bar-item w3-button w3-padding-16 w3-theme-d3">Login</a>
    <a href="CreateAccount.php" class="w3-bar-item w3-button w3-padding-16 ">Sign up </a>
  </div>

  <div style="margin-left:15%">
    <div class="w3-container">
      <div class="w3-card-4">
        <header class="w3-container w3-theme-d1 w3-center">
          <h1 class="w3-xxxlarge w3-myfont"> Squad Grunt </h1>
        </header>
      </div>
    </div>

    <div class="w3-container w3-padding-16">
      <form action="login.php" method="post" class="w3-card-4">
        <header class="w3-theme w3-center">
          <h1>Edit account</h1>
        </header>

        <p>
          <label class="w3-xlarge w3-margin-left">Username</label>
          <input class="w3-input w3-margin-left" style= "width:98%" type="text" name="username" placeholder="Username">
        </p>

        <p>
          <label class="w3-xlarge w3-margin-left">Password</label>
          <input class="w3-input w3-margin-left" style= "width:98%" type="password" name="pswd" placeholder="Password">
        </p>

        <div class="w3-container w3-padding-16 w3-center" style="margin-top:50px">
          <button type="submit" name="submit" class="w3-button w3-theme w3-round w3-centered w3-large"> Login </button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
