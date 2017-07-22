<?php
$password = '123456';
echo password_hash($password, PASSWORD_DEFAULT);


var_dump(password_verify($password, '$2y$10$8duB/N5/cWxesVGEWxkBfuorRhIBK3pq.N43FfTm3V5B9MZD8q3eu'));