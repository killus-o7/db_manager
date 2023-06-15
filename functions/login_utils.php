<?php
function MovePostToSession(): void {
    $_SESSION["host"] = $_POST["host"];
    $_SESSION["user"] = $_POST["user"];
    $_SESSION["database"] = $_POST["database"];
    if (isset($_POST["password"]))
         $_SESSION["password"] = $_POST["password"];
    else $_SESSION["password"] = null;
}
function SqlCheckPost(): bool {
    return (
        isset($_POST["host"]) &&
        isset($_POST["user"]) &&
        isset($_POST["database"])
    );
}
function TryConnect(): void {
    $sql = false;
    try {
        $sql = mysqli_connect($_SESSION["host"], $_SESSION["user"], $_SESSION["password"], $_SESSION["database"]);
    } catch (mysqli_sql_exception $e) {
        $GLOBALS["notifications"] = $e->getMessage();
        require_once "components/login/login.html";
    }
    $GLOBALS["sql"] = $sql;
}