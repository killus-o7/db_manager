<?php
$GLOBALS["query"] = "SHOW COLUMNS FROM `{$_SESSION["table"]}`";
$GLOBALS["info"] = false;
require "./functions/query.php";