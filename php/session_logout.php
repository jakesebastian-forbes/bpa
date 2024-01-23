<?php
session_start();
print_r($_SESSION);

session_unset();
sleep(1);
print_r($_SESSION);

header('Location: ../');

?>