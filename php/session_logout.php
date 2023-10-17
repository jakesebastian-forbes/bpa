<?php
session_start();
print_r($_SESSION);

session_unset();
sleep(2);
print_r($_SESSION);

header('Location: ../');

?>