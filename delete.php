<?php
$db = mysqli_connect('127.0.0.1', 'root', 'root', 'dtc');
$sql = "DELETE FROM USER WHERE id={$_GET['id']}";
mysqli_query($db, $sql);

header('Location: view.php');
exit();