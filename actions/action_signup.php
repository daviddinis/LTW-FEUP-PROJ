<?php
session_start();
if (!empty($_POST)) {
    $username = $_GET['username'];
    $password = $_GET['password'];
}