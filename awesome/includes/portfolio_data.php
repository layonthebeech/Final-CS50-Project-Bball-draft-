<?php

// configuration
    //require("../includes/config.php"); 
    $user = query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);
    $rows = query("SELECT symbol,shares FROM Portfolio WHERE id = ?", $_SESSION["id"]);
    $positions = [];
       $totalStockValue = 0;
foreach ($rows as $row)
{
    $stock = lookup($row["symbol"]);
    
    if ($stock !== false)
    {
        $positions[] = [
            "name" => $stock["name"],
            "price" => $stock["price"],
            "shares" => $row["shares"],
            "symbol" => $stock["symbol"],
            "value" => $stock["price"] * $row["shares"]
            
        ];
        $totalStockValue += $stock["price"] * $row["shares"];
    }
}
    //print("Symbol: " .$positions["symbol"]."<br /n>");
    // render portfolio
    //need to pass users current balance
    
     $totalPortfolioValue = $totalStockValue + $user[0]["cash"];
     
     ?>
