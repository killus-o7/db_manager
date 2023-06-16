<?php
$result = $GLOBALS["result"];
$sql = $GLOBALS["sql"];
?>
<table id="result_table">
    <tr>
        <?php
        foreach (mysqli_fetch_fields($result) as $field) echo "<th>$field->name</th>";
        ?>
    </tr>
    <?php
    while ($row = mysqli_fetch_row($result)){
        echo "<tr>";
        foreach ($row as $item) echo "<td>$item</td>";
        echo "</tr>";
    }
    ?>
</table>
