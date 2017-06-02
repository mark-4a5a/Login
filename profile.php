<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile - Admin panel</title>
        <link rel="stylesheet" href="login.css" type="text/css" />
    </head>
    <body>
    
    <?php
    include '../Login/database_login.php';
    include '../Login/functions.php';
    include '../Login/title_bar.php';
    ?>
    
    <h2>Profile Page</h2>
    <p>You are logged in as <b><?php echo "$username" ?></b> [ <?php echo "$level_name" ?> ]</p>
    
    <?php
    if($user_level == 1){
        echo "<a href='admin.php'>Admin Pannel</a>";
    }
    ?>
    <?php
    if($user_level == 3){
        echo "<a href='../Login/special.php'>Special Pannel</a>";
    }
    ?>
    </p>
    </body>
</html>