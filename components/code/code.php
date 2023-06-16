<form id="code" method="post">
    <input name="execute" value="<?php echo $_POST["execute"]??"SELECT * FROM `{$_SESSION['table']}`";?>"/>
    <div>
        <input type="submit"/>
    </div>
</form>
