<?php
if (
    isset($_POST["host"]) &&
    isset($_POST["user"]) &&
    isset($_POST["database"])
) try {
    if (isset($_POST["password"]))
        $_SESSION["sql"] = mysqli_connect(hostname: $_POST["host"], username: $_POST["user"], password: $_POST["password"], database: $_POST["database"]);
    else $_SESSION["sql"] = mysqli_connect(hostname: $_POST["host"], username: $_POST["user"], database: $_POST["database"]);
} catch (mysqli_sql_exception $e) {
    $_SESSION["error"] = $e->getMessage();
    require_once "login.html";
} else if (!$_SESSION["sql"]){
    require_once "login.html";
} else {
    $sql = $_SESSION["sql"];
}