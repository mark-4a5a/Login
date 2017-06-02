<?php
    include '../Login/database_login.php';
    include '../Login/functions.php';

    $u_id = $_GET['u_id'];
    $type = $_GET['type'];
    
    if($type == 'a'){
        mysql_query("UPDATE users SET type='d' WHERE id='$u_id'");
        header('location: admin.php?type=user');
    } else if($type == 'd') {
        mysql_query("UPDATE users SET type='a' WHERE id='$u_id'");
        header('location: admin.php?type=user');
    }; 
    
    
    $l_id = $_GET['l_id'];
    $level = $_GET['level'];
    
    if($level == 1){
        mysql_query("UPDATE users SET user_level=1 WHERE id='$l_id'");
        header('location: admin.php?type=level');
    } else if($level == 2) {
        mysql_query("UPDATE users SET user_level=2 WHERE id='$l_id'");
        header('location: admin.php?type=level');
    } else if($level == 3) {
        mysql_query("UPDATE users SET user_level=3 WHERE id='$l_id'");
        header('location: admin.php?type=level');
    }; 
?>