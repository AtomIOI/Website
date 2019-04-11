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
    <a href="." class="w3-bar-item w3-button w3-padding-16 w3-theme-d3">Leaderboard</a>
    <a href="Matches.php" class="w3-bar-item w3-button w3-padding-16">Matches</a>
    <a href="EditAccount.php" class="w3-bar-item w3-button w3-padding-16">Login</a>
    <a href="CreateAccount.php" class="w3-bar-item w3-button w3-padding-16 ">Sign up </a>
  </div>

  <div style="margin-left:15%">
<!--  -->
    <div class="w3-container">
      <div class="w3-card-4">
        <header class="w3-container w3-theme-d1 w3-center">
          <h1 class="w3-xxxlarge w3-myfont"> Squad Grunt </h1>
        </header>
      </div>
    </div>

    <div class="w3-container w3-padding-16">

      <input class="w3-input w3-border w3-padding" type="text" placeholder='Search for names..'id="myInput" onkeyup="filter()">

      <?php
        $servername = "localhost";
        $username = "admin";
        $password = "password";
        $dbname = "players";
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = mysqli_query($conn, "SELECT * FROM players ORDER BY playerElo DESC");
        $counter = mysqli_num_rows($result);
        $rank = 1;
        if ($counter > 0) {
          echo '<table class="w3-table-all w3-card-4 w3-centered w3-hoverable " id="myTable">';
            echo '<tr class="w3-blue w3-xlarge">';
              echo '<th>Rank</th>';
              echo '<th>Icon</th>';
              echo '<th>Name</th>';
              echo '<th>Elo</th>';
            echo '</tr>';

          while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                  echo "<td>". $rank ."</td>";
                  echo "<td><img src='Stock Icons/". $row['playerIcon'] .".png'width = '64' height= '64'></td>";
                  echo "<td>". $row['playerName'] ."</td>";
                  echo "<td>". $row['playerElo'] ."</td>";
                echo "</tr>\n";

                $rank += 1;
          }
          echo "</table>";
        }
      mysqli_close($conn);
      ?>

    </div>
  </div>

</body>

<script>

function filter() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

</html>
