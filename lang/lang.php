<?php
session_start();

$lang = $_SESSION['lang'] ?? 'en';

$file = __DIR__ . "/message-$lang.php";

$MSG = file_exists($file)
    ? require $file
    : require __DIR__ . "/message-en.php";
