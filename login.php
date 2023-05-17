<?php
session_start();
session_regenerate_id();
session_id();

$user_login = $_POST["login"];
$user_password = $_POST["password"];

$file = "user_DATA.csv";
$passwordBase = file_get_contents($file);
$arrayUserDATA = explode(";", $passwordBase);

if ($user_login == "admin" &&
    in_array($user_login, $arrayUserDATA) &&
    in_array(md5($user_password), $arrayUserDATA)
) { $_SESSION['is_auth'] = true;
    header("Location: ./admin.php");
} elseif (
    in_array($user_login, $arrayUserDATA) &&
    in_array(md5($user_password), $arrayUserDATA)
) { $_SESSION['is_auth'] = true;
    header("Location: ./user.php");
} elseif (
    in_array($user_login, $arrayUserDATA) ||
    in_array(md5($user_password), $arrayUserDATA)
) { $_SESSION['is_auth'] = false;
    echo "Неправильный логин или пароль!";
} else {
    $uniqId = uniqid();
    $user_passwordMD5 = md5($user_password);
    $data1 = "$uniqId;";
    $data2 = "$user_login;";
    $data3 = "$user_passwordMD5;";
    $data4 = session_id();
    $data5 = "\r\n";
    file_put_contents(
        $file,
        $data1 . $data2 . $data3 . $data4 . $data5,
        FILE_APPEND
    );
}
