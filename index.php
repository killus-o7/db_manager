<?php
session_start();
require "components/login/login.php";
if (isset($_SESSION["sql"]) && $_SESSION["sql"])
    $sql = $_SESSION["sql"];
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="index.css" />
        <script type="text/javascript">
            let head = document.querySelector("head")
            let _ = [
                "login",
                "errors"
            ]; _.forEach(e => {
                let link = document.createElement("link")
                link.rel  = "stylesheet"
                link.type = "text/css"
                link.href = `components/${e}/${e}.css`
                head.appendChild(link)
            })

        </script>
        <title>Database Manager</title>
    </head>
    <body>
        <div id="right-panel">
            <div>

            </div>
        </div>
        <div id="header">
            <div id="code">

            </div>
            <div id="nav">
                <a href="./?selectCurrent=true">data view</a>
                <a href="./">structure</a>
                <a href="./">SQL</a>

            </div>
            <hr/>
        </div>

        <div id="main">
            <?php
            $request = $_SERVER['REQUEST_URI'];

            switch ($request) {
                case '':
                case '/' :
                    require __DIR__ . '/views/index.php';
                    break;
                case '/select' :
                    require __DIR__ . '/views/select.php';
                    break;
                default:
                    http_response_code(404);
                    require __DIR__ . '/views/404.php';
                    break;
            }
            ?>
        </div>
    </body>
</html>