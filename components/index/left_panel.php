<a href="/">
    <?php echo $_SESSION["database"]; ?>
</a>
<div>
    <?php
    $sql = $GLOBALS["sql"];
    $result = mysqli_query($sql, "SHOW TABLES");
    while ($row = mysqli_fetch_row($result)){
        $active = "a";
        if (trim($_SESSION["table"]) == trim($row[0])) $active = "class='active'";
        echo "<a href='/content?table=$row[0]' $active>$row[0]</a>";
    }

    ?>
</div>