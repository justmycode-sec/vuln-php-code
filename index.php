<?php
$command = "ls ".$_GET['command'];

$output = exec($command);
