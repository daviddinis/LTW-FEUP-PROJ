<?php
include_once '../database/db_user.php';

$userTry = $_REQUEST["user"];

if (testeUserSignUp($userTry)) {
    echo "valid username";
} else {
    echo "Invalid username";
}