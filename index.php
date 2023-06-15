<?php
session_start();
$GLOBALS["notifications"] = array();
require "./components/login/login.php";
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
                "index"
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
        <div id="right-panel">
            <div id="right-panel-bg"></div>
            <div id="right-panel-content">
                <?php
                require "./components/index/right_panel.php";
                ?>
            </div>
        </div>
        <div id="header">
            <div id="code">

            </div>
            <div id="nav">
                <a href="?action=view">data view</a>
                <a href="./structure">structure</a>
                <a href="./sql">SQL</a>

            </div>
            <hr/>
        </div>

        <div id="main">
            <?php
            $request = $_SERVER['REQUEST_URI'];
            switch ($request){
                case "":
                case "/" :
                    require __DIR__ . '/views/index.php';
                    break;
                case "view":
                    require __DIR__ . '/views/view.php';
                    break;
                case "structure":
                    require __DIR__ . '/views/structure.php';
                    break;
                case "insert":
                    require __DIR__ . '/views/insert.php';
                    break;
                case "select":
                    require __DIR__ . '/views/select.php';
                    break;
                case "sql" :
                    require __DIR__ . '/views/sql.php';
                    break;
                default:
                    http_response_code(404);
                    require __DIR__ . '/views/404.php';
                    break;
            }

            /*
            switch ($request) {
                case '':
                case '/' :
                    require __DIR__ . '/views/index.php';
                    break;
                case '/table' :
                    require __DIR__ . '/views/select.php';
                    break;
                case '/sql' :
                    require __DIR__ . '/views/structure.php';
                    break;
                default:
                    http_response_code(404);
                    require __DIR__ . '/views/404.php';
                    break;
            }
            */
            ?>
        </div>
    <?php require "components/notifications/notifications.php" ?>
    </body>
</html>