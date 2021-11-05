<?php
$password = "mitgas123";
// Set a password for the Admin Panel
// You can access the Panel on: www.yourdomain.com/admin.php




$pass = hash('', $password);
unset($password);

?>