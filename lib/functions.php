<?php
// Function to connect database
function db_connect() {
    try {
        require 'config.php';

        $pdo = new PDO(
            $config['database_dsn'],
            $config['database_user'],
            $config['database_pass']
        );
        return $pdo;
    }catch (PDOException $exception) {
        echo $pdo . "<br>" . $exception->getMessage();
        exit;
    }
}
