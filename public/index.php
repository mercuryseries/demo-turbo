<?php
session_start();

const BASE_DIR = __DIR__ . '/../app';

require_once match ($_SERVER['REQUEST_URI']) {
    '/' => BASE_DIR . '/home.php',
    '/about' => BASE_DIR . '/about.php',
    '/help' => BASE_DIR . '/help.php',
    '/contact' => BASE_DIR . '/contact.php',
    default => BASE_DIR . '/404.php',
};
