<?php
  session_start();
?>

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

    <div class="w3-container">
      <div class="w3-card-4">
        <header class="w3-theme w3-center">
          <h1>Edit your account</h1>
        </header>

        <div class="w3-center">
          <?php
            echo "<h1 class= 'w3-jumbo w3-text-theme w3-padding-16'>". $_SESSION['u_elo'] ."</h1>";
            echo "<img src='Stock Icons/". $_SESSION['u_icon'] .".png'width = '64' height= '64'>";
          ?>
        </div>

        <div>
          <form action="ChangeAccount.php" method="post">
            <?php
              echo "<label class='w3-xlarge w3-margin-left'>Gamertag/Username</label>";
              echo "<input class='w3-input w3-margin-left' type='text' style= 'width:98%' name='username' placeholder='". $_SESSION['u_uid']."'>";
              echo "<label class='w3-xlarge w3-margin-left'>Password</label>";
              echo "<input class='w3-input w3-margin-left' type='text' style= 'width:98%' name='pswd' placeholder='". $_SESSION['u_pswd']."'>";
            ?>

            <label class="w3-xlarge w3-margin-left">Icon</label>

            <div class="w3-padding-32 w3-center">
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_mario_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_mario_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_luigi_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_luigi_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_peach_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_peach_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_koopa_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_koopa_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_drmario_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_drmario_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_yoshi_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_yoshi_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_donkey_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_donkey_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_link_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_link_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_zelda_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_zelda_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_sheik_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_sheik_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_ganon_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_ganon_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_toonlink_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_toonlink_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_samus_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_samus_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_szerosuit_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_szerosuit_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_kirby_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_kirby_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_metaknight_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_metaknight_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_dedede_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_dedede_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_fox_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_fox_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_falco_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_falco_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_pikachu_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_pikachu_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_purin_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_purin_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_mewtwo_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_mewtwo_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_lizardon_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_lizardon_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_lucario_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_lucario_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_captain_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_captain_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_ness_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_ness_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_lucas_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_lucas_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_marth_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_marth_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_roy_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_roy_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_ike_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_ike_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_gamewatch_08.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_gamewatch_08" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_pit_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_pit_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_wario_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_wario_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_pikmin_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_pikmin_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_robot_02.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_robot_02" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_sonic_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_sonic_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_rosetta_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_rosetta_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_koopajr_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_koopajr_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_gekkouga_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_gekkouga_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_reflet_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_reflet_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_lucina_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_lucina_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_kamui_02.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_kamui_02" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_palutena_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_palutena_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_pitb_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_pitb_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_murabito_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_murabito_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_littlemac_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_littlemac_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_wiifit_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_wiifit_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_shulk_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_shulk_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_duckhunt_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_duckhunt_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_rockman_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_rockman_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_pacman_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_pacman_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_ryu_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_ryu_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_cloud_02.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_cloud_02" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_bayonetta_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_bayonetta_01" id="Icon">
              </div>
              <div class="w3-quarter w3-center">
                <label><img src="Stock Icons/stock_90_sandbag_01.png" width = "64" height= "64"></label>
                <input class="w3-radio" type="radio" name="icon" value="stock_90_sandbag_01" id="Icon">
              </div>
            </div>

            <div class="w3-container w3-padding-32 w3-center" style="margin-top:100px">
              <button type="submit" name="submit" class="w3-button w3-theme w3-round w3-centered"> Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
