<pre>
<?php
//$_GET - данные, отправление методом GET   http://localhost:8070/less4.php?id=1&cat=post&boo=true
//$_POST - данные, отправление методом POST

var_dump($_GET);
var_dump($_POST);
?>
</pre>

<form  method="post"> <!-- action="less4.php" или если нет, то обработчик тот же файл-->
    <input type="text" name="username">
    <input type="password" name="password">
<input type="submit" value="OK">
</form>