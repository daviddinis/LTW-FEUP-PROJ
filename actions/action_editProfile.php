<?php
    include_once('../includes/session.php');
    include_once('../database/db_upload.php');
    include_once('../database/db_user.php');
    include_once('../actions/validation.php');

    if ($_SESSION['csrf'] !== $_POST['csrf']) {
        $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Invalid CSRF!');
        die(header('Location: ../pages/user.php'));
    }

    $name = test_input($_POST['name']);
    $user = getUser($_SESSION['username']);
    $updatedUser = new ArrayObject();
    $updatedUser['name'] = $name;
    $updatedUser['username'] = $_SESSION['username'];

    if (!preg_match("/^[a-zA-Z0-9]+$/", $_SESSION['username'])) {
        $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Username can only contain letters and numbers!');
        die(header('Location: ../pages/user.php'));
    }

    uploadToPath("../imageDatabase/userProfiles/");
    updateUser($updatedUser);

    header('Location: ../pages/user.php');
?>