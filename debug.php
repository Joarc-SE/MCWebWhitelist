<?php
$db = new PDO("sqlite:database.sqlite");
$result = $db->prepare('SELECT * FROM users');
$result->query();
$result = $result->fetchAll();
print_r($result);

?>
