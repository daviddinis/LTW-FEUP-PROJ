<?php
  include_once('../includes/session.php');
  include_once('../database/db_user.php');
  include_once('../actions/validation.php');

  $username = test_input($_POST['username']);
  $password = test_input($_POST['password']);

  if (checkUserPassword($username, $password)) {
    $_SESSION['username'] = $username;
    $_SESSION['messages'][] = array('type' => 'success', 'content' => 'Logged in successfully!');
    header('Location: ../pages/user.php');
  } else {
    $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Login failed!');
    header('Location: ../pages/login.php');
  }

?>