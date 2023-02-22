<?php
$message = $_GET['message'] . "\n";
file_put_contents('database.txt', $message, FILE_APPEND);
?>

<a href="database.txt">查看所有留言</a>
