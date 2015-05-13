<?php if ($_SERVER['REQUEST_URI'] != "/") header('Location: /'); ?>
<?php

function addUser($username, $password, $rank) {

}

function delUser($username) {

}

function changeRank($rank) {

}

function populateDB() {

}

function userExists($username) {
  $db = new PDO('sqlite:database.sqlite');
  $data = array($username);
  $response = $db->prepare('SELECT * FROM Users WHERE username = ?');
  $response->execute($data);
  $result = $response->fetch();
  if ($result["username"] != null && $result["username"] == $username) {
    return true;
  } else {
    return false;
  }
}
