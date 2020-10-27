<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

if (preg_match('/\.(?:png|jpg|gif)$/', $_SERVER["REQUEST_URI"])) {
    /** Exibir arquivo requisitado */
    return false;
} else {
    require __DIR__ . '/index.php';
}
