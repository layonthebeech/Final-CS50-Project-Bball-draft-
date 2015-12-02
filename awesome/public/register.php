<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //check if empty
         if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        //check if password empty
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        else if (empty($_POST["confirmation"]))
        {
            apologize("You must confirm your password.");
        }
         else if (empty($_POST["email"]))
        {
            apologize("You must provide an email.");
        }
         if ($_POST["password"]!=$_POST["confirmation"])
        {
        apologize("Passwords do not match.");
        }
         //$favteam = query("UPDATE users SET favteam = ? where id = ?", $_POST["favteam"],$_SESSION["id"]);
        $query = query("INSERT INTO users (username, hash, favteam,email) VALUES(?, ?,?,?)", $_POST["username"], crypt($_POST["password"]),$_POST["favteam"],$_POST["email"]);
       
        if($query ===false)
        {
         apologize("Username already exists");
        }
        else
        {

        $rows = query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
        //$row = $rows[0];
        $_SESSION["id"] = $id["id"];
        redirect("myhomepage.php");
        }
        
    }

?>
