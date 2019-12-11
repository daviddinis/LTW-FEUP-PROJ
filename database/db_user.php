<?php
  include_once('../includes/database.php');

  /**
   * Verifies if a certain username, password combination
   * exists in the database. Use the sha1 hashing function.
   */
  function checkUserPassword($username, $password) {

    $user = getuser($username);

    return $user !== false && password_verify($password, $user['password']);
  }

  function insertUser($username, $password, $name) {
    $db = Database::instance()->db();

    $options = ['cost' => 12];

    $stmt = $db->prepare('INSERT INTO user VALUES(?, ?, ?, ?)');
    $stmt->execute(array($username, password_hash($password, PASSWORD_DEFAULT, $options), $name, "../imageDatabase/userProfiles/default_profile_pic.png"));
  }

  function getUser($username){
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM user WHERE username = ?');
    $stmt->execute(array($username));

    return $stmt->fetch();
  }

  function getUserPhoto($username){
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT photoURL FROM user WHERE username = ?');
    $stmt->execute(array($username));
    $photo = $stmt->fetch();
    return $photo['photoURL'];
  }
?>