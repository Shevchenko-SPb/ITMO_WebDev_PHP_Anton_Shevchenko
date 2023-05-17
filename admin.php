<?php
session_start();
if (isset($_SESSION['is_auth']) && $_SESSION['is_auth'] == true ){
    echo 'Welcome!';
} else {
    header('Location: ./login.php');
}
