<?php
$sql = $GLOBALS["sql"];
$result = mysqli_query($sql, $GLOBALS["query"]??$_POST["execute"]);
$GLOBALS["result"] = $result;
$affected = mysqli_affected_rows($sql);

if (!is_bool($result)) {
    if ($GLOBALS["info"]) echo "<p>Wyniki wyszukania: znaleziono $affected rekordów</p>";
    require "./components/result_table/result_table.php";
} else if ($GLOBALS["info"]) echo "<p>Zmodywikowano $affected rekordów</p>";