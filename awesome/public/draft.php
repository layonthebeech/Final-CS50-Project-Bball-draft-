 <?php

    // configuration
    require("../includes/config.php"); 
  require("../includes/myteamdata.php");
  if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
       
        render("draft_form.php", ["title" => "Draft Form",
    "favteam" => $favteam,
            ]);
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    //use isset to ensure they have selected a full team 
    
    query("UPDATE users SET team = ?  WHERE id = ?" , implode(",",$_POST["myteam"]), $_SESSION["id"] );
    // query("UPDATE users SET cash = cash + ? WHERE id = ?",$cost, $_SESSION["id"]);
    //redirect("/");
    echo json_encode(array("myteam"=>implode(",",$_POST["myteam"]), "id"=>$_SESSION["id"]));
    }
    
    
    
 ?>

