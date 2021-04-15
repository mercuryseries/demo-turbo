<?php
session_start();

const APP_DIR = __DIR__ . '/../app/';

require_once APP_DIR . match ($_SERVER['REQUEST_URI']) {
    '/' => 'home.php',
    '/about' => 'about.php',
    '/help' => 'help.php',
    '/contact' => 'contact.php',
    default => '404.php',
};
