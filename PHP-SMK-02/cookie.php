<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


if (!isset($_COOKIE[$cookie_name])) {
    echo "Nama cookie '" . $cookie_name . "' Cookie tidak Jalan!";
} else {
    echo " Nama Cookie '" . $cookie_name . "' Cookie Jalan!<br>";
    echo "Nama User: " . $_COOKIE[$cookie_name];
}
