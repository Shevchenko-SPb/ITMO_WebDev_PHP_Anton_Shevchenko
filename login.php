<?php


session_start();

$login = 'admin';
$passwd = '123';

$user_login = $_POST['login'];
$user_passwd = $_POST['passwd'];

if ($user_login !== $login || $user_passwd !== $passwd) {

    echo 'Login or password is incorrect! Please input try again!';
    usleep(4000);
    header('Location: ./index.php');
} else if (!($user_login && $user_passwd)) {
    echo 'Login or password is empty! Please input both.';
    usleep(4000);
    header('Location: ./index.php');
} else {
    $_SESSION['is_auth'] = true;
    $_SESSION['str'] = 'sdafasdfsdf';
    echo 'All is right!';
    header('Location: ./admin.php');
}