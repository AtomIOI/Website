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
    <a href="Matches.php" class="w3-bar-item w3-button w3-padding-16 w3-theme-d3">Matches</a>
    <a href="EditAccount.php" class="w3-bar-item w3-button w3-padding-16">Login</a>
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
      <form action="MatchCreation.php" method="post" class="w3-card-4">
        <header class="w3-theme w3-center">
          <h1> Enter match details</h1>
        </header>

        <div class="w3-row-padding w3-padding-16">
          <div class="w3-third w3-center">
            <label class="w3-xxxlarge w3-text-green">Winner</label>
            <select class="w3-select w3-large w3-margin-top w3-hover-border-green" name= "winner" style="width:85%">
              <option class="" disabled selected>Choose the player</option>
              <?php
                $servername = "localhost";
                $username = "admin";
                $password = "password";
                $dbname = "players";
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                $result = mysqli_query($conn, "SELECT playerName FROM players");

                while ($row = mysqli_fetch_array($result)) {
                  echo "<option value='". $row['playerName'] ."'>". $row['playerName'] . "</option>";
                }
               ?>
            </select>
          </div>

          <div class="w3-third w3-center w3-margin-top w3-padding-16">
            <label class="w3-jumbo w3-text-theme"> V.S </label>
          </div>

          <div class="w3-third w3-center">
            <label class="w3-xxxlarge w3-text-red ">Loser</label>
            <select class="w3-select w3-large w3-margin-top w3-hover-border-red" name= "loser" style="width:85%">
              <option class="w3-large" text-align-last:center; disabled selected>Choose the player</option>
              <?php
                $servername = "localhost";
                $username = "admin";
                $password = "password";
                $dbname = "players";
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                $result = mysqli_query($conn, "SELECT playerName FROM players");

                while ($row = mysqli_fetch_array($result)) {
                  echo "<option value='". $row['playerName'] ."'>". $row['playerName'] . "</option>";
                }
               ?>
            </select>
          </div>
        </div>

        <div class="w3-container w3-padding-16 w3-center">
          <button type="submit" name="submit" class="w3-button w3-theme w3-round"> Add Match </button>
        </div>
      </form>
    </div>

    <div class="w3-container w3-padding-16">
      <?php
        $servername = "localhost";
        $username = "admin";
        $password = "password";
        $dbname = "players";
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = mysqli_query($conn, "SELECT * FROM matches ORDER BY ID DESC LIMIT 15");
        $counter = mysqli_num_rows($result);

        if ($counter > 0) {
          echo '<table class="w3-table-all w3-card-4 w3-centered w3-hoverable w3-xlarge" id="myTable">';
            echo '<tr class="w3-blue">';
              echo '<th>Date</th>';
              echo '<th>Winner</th>';
              echo '<th>Loser</th>';
              echo '<th>Elo</th>';
            echo '</tr>';

          while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                  echo "<td class='w3-text-theme'>". $row['matchDate'] ."</td>";
                  echo "<td class='w3-text-green'>". $row['winner'] ."</td>";
                  echo "<td class='w3-text-red'>". $row['loser'] ."</td>";
                  echo "<td class='w3-text-theme'> +/-". " ". $row['elo'] ."</td>";
                echo "</tr>\n";
          }
          echo "</table>";
        }
      mysqli_close($conn);
      ?>

        </tr>

      </table>
    </div>
  </div>

</body>

<script>

</script>

</html>
