<form id="insert" method="post" action="./content?table=<?php echo $_SESSION["table"]; ?>">
    <table>
    <?php
    $sql = $GLOBALS["sql"];
    $query = "SHOW COLUMNS FROM `{$_SESSION["table"]}`";
    $result = mysqli_query($sql, $query);
    $rows = "";
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td> <input class='insert-input' /> </td>
        </tr>";
        $rows = $rows."$row[0] ";
    };
    ?>
    </table>
    <input name="execute" value="<?php echo $rows; ?>" hidden/>
    <script src="/functions/insert_create_query.js"></script>
    <button onclick="createInsertQuery('<?php echo $_SESSION["table"]; ?>')" type="button">wyślij</button>
</form>
