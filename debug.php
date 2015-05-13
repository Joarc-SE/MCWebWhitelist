<?php
$db = new PDO('sqlite:database.sqlite');
$response = $db->prepare('SELECT * FROM users');
$response->execute();
$result = $response->fetchAll();
print_r($result);

?>
