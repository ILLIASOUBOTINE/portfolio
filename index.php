<?php
    // $page = filter_input(INPUT_GET, "page");
    $page = $_GET['page'];   
    
    // $path = $_SERVER['REQUEST_URI'];
    // $path = parse_url($path);
    // $path = preg_split("/[\/.]/", $path["path"])[1];
    include ('common/template.php');
?>