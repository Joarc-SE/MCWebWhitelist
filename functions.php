<?php /*if ($_SERVER['REQUEST_URI'] != "/") header('Location: /');*/ ?>
<?php

function addUser($username, $password, $rank) {
  $db = new PDO('sqlite:database.sqlite');
  $data = array($username, $password, $rank);
  $response = $db->prepare('INSERT INTO users (username, password, rank) VALUES (?, ?, ?)');
  $response->query($data);
}

function delUser($username) {

}

function changeRank($rank) {

}

function populateDB() {
  $password = password_hash("admin", PASSWORD_BCRYPT);
  $db = new PDO('sqlite:database.sqlite');
  $db->query('CREATE TABLE users(id INTEGER PRIMARY KEY, username TEXT, password TEXT, rank INTEGER)');
  $db->query('CREATE TABLE whitelisted(id INTEGER PRIMARY KEY, username TEXT, addedby INTEGER, date TEXT)');
  $db->query('CREATE TABLE settings(id INTEGER PRIMARY KEY, guestrank INT, rconport INTEGER, rconpassword TEXT,queryport INTEGER)');
  $db->query('INSERT INTO users (username, password, rank) VALUES ("admin", "$password", 4)');
  $db->query('INSERT INTO whitelisted (username, addedby, date) VALUES ("joarc", 1, 1)');
  $db->query('INSERT INTO settings (guestrank, rconport, rconpassword, queryport) VALUES (0, 25575, "password", 25565)');
}

function userExists($username) {
  $db = new PDO('sqlite:database.sqlite');
  $data = array($username);
  $response = $db->prepare('SELECT * FROM users WHERE username = ?');
  $response->execute($data);
  $result = $response->fetch();
  if ($result["username"] != null && $result["username"] == $username) {
    return true;
  } else {
    return false;
  }
}

function checkPassword($username, $password) {
  $db = new PDO('sqlite:database.sqlite');
  $data = array($username);
  $query = $db->prepare('SELECT * FROM users WHERE username = ?');
  $query->execute($data);
  $result = $query->fetch();
  if (password_verify($password, $result['password'])) {
    return true;
  } else {
    return false;
  }
}
