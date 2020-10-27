<?php
define("DATA_LAYER_CONFIG" , [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "test",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);






define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB_NAME', 'test');

try {

    $pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME, USER, PASSWORD);
    echo "<h4>Conectado ao Banco de Dados Test</h4><br>";
    
    $statement = $pdo->query("SELECT * FROM programadores");

    $row = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($row as $value) {
        echo "<li>" . $value['id'] . " - " . $value['nome'] . " - " . $value['site'] . "</li>";
    }
} catch (PDOException $execption) {
    echo 'Erro ao conectar com o MYSQL: ' . $execption->getMessage();
}


