<?php
session_start();
session_regenerate_id();

$userSessionId = session_id();
$userSession = str_replace(
    " ",
    "",
    $userSessionId . $_SERVER["REMOTE_ADDR"] . $_SERVER["HTTP_USER_AGENT"]
);
$Token = str_replace(";", ",", $userSession);

$file_User_DATA = "user_DATA.csv";
$user_login = $_POST["login"];
$user_password = $_POST["password"];

$passwordBase = file($file_User_DATA);
$salt = "-45dfeHK/";

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'insert':
            insert();
            break;
        case 'select':
            select();
            break;
    }
}

function select() {
    echo "The select function is called.";
    exit;
}

function insert() {
    echo "The insert function is called.";
    exit;
}

loginUser();
function loginUser()
{
    global $passwordBase,
        $user_password,
        $user_login,
        $Token,
        $salt,
        $file_User_DATA;
    foreach ($passwordBase as &$value) {
        $passwords = explode(";", $value);
        if (
            $passwords[1] == $user_login &&
            $passwords[2] == sha1($user_password . $salt)
        ) {
            if ($user_login == "admin") {
                $_SESSION["is_auth"] = true;
                $passwords[3] = "$Token\r\n";
                $value = implode(";", $passwords);
                header("Location: ./admin.php");
            } else {
                $_SESSION["is_auth"] = true;
                $passwords[3] = "$Token\r\n";
                $value = implode(";", $passwords);
                header("Location: ./user.php");
            }
        }
    }
    file_put_contents($file_User_DATA, $passwordBase);
    echo "Неправильный логин или пароль!";
}

//registrationUser () ;
function registrationUser()
{
    global $passwordBase, $user_login, $user_password;
    foreach ($passwordBase as $value) {
        $passwords = explode(";", $value);
        if ($passwords[1] == $user_login) {
            exit("Логин уже занят");
        }
    }
    if ($user_login == $user_password) {
        exit("Логин и пароль не должны совпадать!");
    } else {
        createUser();
        $_SESSION["is_auth"] = true;
        header("Location: ./user.php");
    }
}

function createUser()
{
    global $file_User_DATA,
        $user_password,
        $user_login,
        $Token,
        $salt,
        $passwordBase;
    if (count($passwordBase) == null) {
        $uniqId = 1;
    } else {
        $uniqId = count($passwordBase) + 1;
    }
    $user_passwordMD5 = sha1($user_password . $salt);
    $data1 = "$uniqId;";
    $data2 = "$user_login;";
    $data3 = "$user_passwordMD5;";
    $data4 = "$Token\r\n";

    file_put_contents(
        $file_User_DATA,
        $data1 . $data2 . $data3 . $data4,
        FILE_APPEND
    );
}
