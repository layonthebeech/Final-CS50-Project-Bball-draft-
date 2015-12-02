<?php

    // configuration
    require("../includes/config.php"); 
     require("../includes/myteamdata.php");
     if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("otherteamform.php", ["title" => "Other Team Form",
    "favteam" => $favteam,
            ]);
    }
     else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
     $teamid = $_POST["teamid"];
  
    $otherteams = query("SELECT team FROM users WHERE username = ?", $_POST["teamid"]);
    $myteams = query("SELECT team FROM users WHERE id = ?", $_SESSION["id"]);
      $otherpositions = [];
  
$otherpositions = explode(",", $otherteams[0]['team']);

  
    
    $positions = [];
   // print_r ($myteams[0][team]);
$positions = explode(",", $myteams[0]['team']);
 
    render("otherteamrender.php", [
    
    
    "title" => "Other Team Form",
    "positions" => $positions,
   "otherpositions" => $otherpositions,
    "favteam" => $favteam,
    "teamid" =>$teamid,
    ]
    
    
    );
    
    
    
    }
    ?>
