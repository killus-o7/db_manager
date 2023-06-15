<a href="/">
    <?php echo $_SESSION["database"]; ?>
</a>
<div>
    <?php
    $sql = $GLOBALS["sql"];
    $result = mysqli_query($sql, "SHOW TABLES");
    while ($row = mysqli_fetch_row($result))
        echo "<a href='/table/$row[0]/view'>$row[0]</a>";
    ?>
</div>