<!DOCTYPE html>

<html>


<head>
   <link href="/public/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/public/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/public/css/styles.css" rel="stylesheet"/>
         <link href="/public/css/jquery.dataTables.min.css" rel="stylesheet"/>
 <link href="/public/css/tables.css" rel="stylesheet"/>
        <?php if (isset($title)): ?>
            <title>Draft: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Draft</title>
        <?php endif ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="/public/js/jquery-1.11.1.min.js"></script>
        <script src="/public/js/bootstrap.min.js"></script>
        <script src="/public/js/scripts.js"></script>

      <script src="/public/js/jquery.dataTables.min.js" type="text/javascript" charset="utf-8"></script>      
 <link rel='stylesheet' href='/public/css/jquery.dataTables.min.css'/>
  
  
      



</head>
   


    <body >

        <div class="container">

            <div id="top">
                <a href="myhomepage.php"><img alt="Draft Header" src="/public/img/nbadraft.jpg"/></a>

            <?php  if (stripos($_SERVER['REQUEST_URI'], 'login.php') || stripos($_SERVER['REQUEST_URI'], 'register.php' )):?>
                <img class = "favteam" onerror='this.style.display = "none"' src="/public/img/houstonrockets.gif" />    
            <?php else: ?>

                <img class = "favteam" onerror='this.style.display = "none"' src="/public/img/<?php echo $favteam ?>.gif" />
            <?php endif ?>


            </div>
<div>
    <a href="myhomepage.php">My Team</a>
    <a href="mysettings.php">My Settings</a>
    <a href="draft.php">Draft A Team</a>
    <a href="otherteam.php">Compare Teams</a>
</div>

            <div id="middle">
            


