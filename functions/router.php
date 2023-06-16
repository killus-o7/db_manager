<?php
$request = $_SERVER['REQUEST_URI'];
switch (explode("?",$request)[0]){
    case "":
    case "/" :
        require './views/index.php';
        break;
    case "/content":
        require './views/content.php';
        break;
    case "/structure":
        require './views/structure.php';
        break;
    case "/insert":
        require './views/insert.php';
        break;
    case "/sql" :
        require './views/sql.php';
        break;
    default:
        http_response_code(404);
        require './views/404.php';
        break;
}