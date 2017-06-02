<div>
<?php
    if(loggedin()){
?>
    <a href='profile.php'>Profile</a>
    <a href='logout.php'>Log Out</a>
<?php
    } else {
?>
    <a href='login.php'>Login</a>
    <a href='register.php'>Register</a>
<?php
    }
?>

</div>