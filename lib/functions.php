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
    }catch (PDOException $e){
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $e->getMessage();
    }
}
