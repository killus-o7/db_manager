<?php
$GLOBALS["query"] = $_POST["execute"]??"SELECT * FROM `{$_SESSION["table"]}`";
$GLOBALS["info"] = true;
require "./functions/query.php";