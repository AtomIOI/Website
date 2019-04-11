<?php

  if (isset($_POST['submit'])) {
    include_once 'SQLconn.php';

    $winner = $_POST['winner'];
    $loser = $_POST['loser'];
    $winnerEloFetch =  mysqli_query($conn, "SELECT playerElo FROM players WHERE playerName= '$winner'");
    $winnerEloArray =  mysqli_fetch_array($winnerEloFetch);
    $winnerElo = $winnerEloArray['playerElo'];
    $loserEloFetch =  mysqli_query($conn, "SELECT playerElo FROM players WHERE playerName= '$loser'");
    $loserEloArray =  mysqli_fetch_array($loserEloFetch);
    $loserElo = $loserEloArray['playerElo'];
    $date = date("M-d");

    $winPercentWinner = 1/(1+(pow(10,(($loserElo - $winnerElo)/400))));
    $winPercentLoser = 1/(1+(pow(10,(($winnerElo - $loserElo)/400))));

    $k = 50;
    if (empty($loser) && empty($winner)) {
      header("Location: ../Matches.php");
    } elseif ($winner == $loser){
      header("Location: ../Matches.php?match=SamePlayerSelected");
    } elseif (empty($loser) || empty($winner)) {
      header("Location: ../Matches.php?match=SecondPlayerNotSelected");
    } else {
      $eloWon = $k*(1.0 - $winPercentWinner);
      $winnerElo += $eloWon;
      $loserElo += $k*(0 - $winPercentLoser);

      mysqli_query($conn,"UPDATE players SET playerElo= $winnerElo WHERE playerName= '$winner'");
      mysqli_query($conn,"UPDATE players SET playerElo= $loserElo WHERE playerName= '$loser'");

      mysqli_query($conn, "INSERT INTO matches (winner, loser, elo, matchDate) VALUES ('$winner', '$loser', $eloWon,'$date')");

      header("Location: ../Matches.php");
    }
  }
?>
