<?php
session_start();
$count = 0;
if (isset($_COOKIE['count'])) {
    $count = ($_COOKIE['count']) + 1;
}
setcookie('count', $count, time() + 3600);

echo "<form action='login.php' method='POST'>
<input name='login'></input>
<input name='password'></input>
<button>Login</button>
</form>";


echo "Вы посетили страницу: $count раз.";

