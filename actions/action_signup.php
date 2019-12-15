<?php
  include_once('../includes/session.php');
  include_once('../database/db_user.php');

  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];


  // Don't allow certain characters
  if ( !preg_match ("/^[a-zA-Z0-9]+$/", $username)) {
    $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Username can only contain letters and numbers!');
    die(header('Location: ../pages/login.php'));
  }

  try {
    insertUser($username, $password, $name);
    $_SESSION['username'] = $username;
    $_SESSION['name'] = $name;
    $_SESSION['messages'][] = array('type' => 'success', 'content' => 'Signed up and logged in!');
    header('Location: ../pages/user.php');
  } catch (PDOException $e) {
    die($e->getMessage());
    $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Failed to signup!');
    header('Location: ../pages/signup.php');
  }
?>