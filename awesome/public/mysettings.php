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
      //if the submit button for deleting is selectedf
  		if ($_POST['delete'])
  		{
    	$query = query("DELETE FROM users WHERE id = ?", $_SESSION["id"]);
// if it doesn't work 
 			if($query ===false)
        		{
        		 apologize("Could not delete");
        		}
        	else
        		{
//redirect to login since you won't be logged in after deleting your account
        		redirect("login.php");
        		}
    	}

    	else if($_POST['favteam'])
    	{
    		 //for selecting your favorite team 
    		$favteam = query("UPDATE users SET favteam = ? where id = ?", $_POST["favteam"],$_SESSION["id"]);
 			if($favteam ===false)
 			{
 				apologize("Could not select favorite team");

 			}
 			redirect("mysettings.php");

    	}

    }
?>
