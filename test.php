<?php
//header('Set-Cookie: foo=bar');

//setcookie('foo', 'bar', time() +1000, '/');

//var_dump($_COOKIE);

/*
 session_start();

$i = $_SESSION['count'] ?? 0;
$i++;
$_SESSION['count'] = $i;

echo $i;
?>


<a href="/test.php">Туда</a>

 */

$password = '123456';
echo password_hash($password, PASSWORD_DEFAULT);