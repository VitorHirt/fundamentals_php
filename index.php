<?php 
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");

    $_SERVER["REQUEST_URI"] = '/views/home.php';

    require_once 'helpers/dump.php';
    require_once 'route/web.php';
    
