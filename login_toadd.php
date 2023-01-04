<?php

    session_start();

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = md5($_POST['password']);
    $_SESSION['sid'] = session_id();
?>