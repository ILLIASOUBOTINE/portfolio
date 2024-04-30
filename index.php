<?php
    session_start();
    
   
    $page = $_GET['page']; 
    if (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = 'en';
    }

    if (isset($_GET['lang'])){
        $_SESSION['lang'] = $_GET['lang'];
       
    }
    
    
    
    include ('common/template.php');
?>