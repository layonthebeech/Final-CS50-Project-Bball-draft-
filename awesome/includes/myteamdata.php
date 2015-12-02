<?php


    //require("../includes/config.php"); 
    $myteams = query("SELECT team FROM users WHERE id = ?", $_SESSION["id"]);
      $favteamarray = query("SELECT favteam from users where id = ?",  $_SESSION["id"]);
       $favteam = $favteamarray[0]['favteam'];
    $positions = [];
   // print_r ($myteams[0][team]);
$positions = explode(",", $myteams[0]['team']);


 
     
     ?>
