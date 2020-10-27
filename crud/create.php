<?php 

require __DIR__ . '/../vendor/autoload.php';

use Source\Models\User;

$user = new User();
$user->nome = "Debora";
$user->site = "http://deb.com.br";
$user->save();