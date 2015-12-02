<?php

   
    require("../includes/config.php"); 
    require("../includes/myteamdata.php");
       if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
          render("mysettings_form.php",
     [
     "title" => "My Settings",
        "favteam" => $favteam,
     ]);
    }
     else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
  		if ($_POST['delete'])
  		{
    	$query = query("DELETE FROM users WHERE id = ?", $_SESSION["id"]);

 			if($query ===false)
        		{
        		 apologize("Could not delete");
        		}
        	else
        		{

        		redirect("login.php");
        		}
    	}

    	else if($_POST['favteam'])
    	{
    		 //query("UPDATE users SET cash = cash + ? WHERE id = ?",$stock["price"]*$Portfolio[0]["shares"], $_SESSION["id"]);
    		$favteam = query("UPDATE users SET favteam = ? where id = ?", $_POST["favteam"],$_SESSION["id"]);
 			if($favteam ===false)
 			{
 				apologize("Could not select favorite team");

 			}
 			redirect("mysettings.php");

    	}

    }
?>
