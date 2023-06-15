<?php
require "functions/login_utils.php";

if (SqlCheckPost()){
    MovePostToSession();
    TryConnect();
} else {
    TryConnect();
    if (!$GLOBALS["sql"]) require_once "login.html";
}