<?php
    include 'assets/header.php';    
    session_destroy();
    header('location: index.php');
    include 'assets/footer.php';
?>