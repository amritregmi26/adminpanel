<?php

define('host', 'localhost');
define('user','root');
define('pass', '');
define('db','mbman_db');

$conn = mysqli_connect(host, user, pass, db);
if(!$conn)
{
    echo('connection not established');
}

?>