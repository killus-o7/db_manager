<?php
session_start();
$GLOBALS["notifications"] = array();
require "./components/login/login.php";
$sql = $GLOBALS["sql"] ?? false;
if ($sql)
    $_SESSION["table"] = $_GET["table"] ?? mysqli_fetch_row(mysqli_query($sql, "SHOW TABLES"))[0];
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="/index.css" />
        <script type="text/javascript">
            let head = document.querySelector("head")
            let _ = [
                "login",
                "notifications",
                "index",
                "code",
                "result_table"
            ]; _.forEach(e => {
                let link = document.createElement("link")
                link.rel  = "stylesheet"
                link.type = "text/css"
                link.href = `/components/${e}/${e}.css`
                head.appendChild(link)
            })
        </script>
        <title>Database Manager</title>
    </head>
    <body>
        <div id="left-panel">
            <div id="left-panel-bg"></div>
            <div id="left-panel-content">
                <?php
                require "./components/index/left_panel.php";
                ?>
            </div>
        </div>
        <div id="right-panel">
            <div id="header">
                <div id="nav">
                    <a href="./content?table=<?php echo $_SESSION["table"]?>">dane</a>
                    <a href="./structure?table=<?php echo $_SESSION["table"]?>">struktura</a>
                    <a href="./insert?table=<?php echo $_SESSION["table"]?>">wstaw</a>
                </div> <hr/>
                <?php require "./components/code/code.php"; ?>
            </div>

            <div id="main">
                <?php require "./functions/router.php"?>
            </div>
        </div>


    <?php require "components/notifications/notifications.php" ?>
    </body>
</html>