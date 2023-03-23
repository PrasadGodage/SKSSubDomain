<?php

    $host = "localhost";

    $root = "soulsoftin_root";
    $root_password = "soulshiv@1987#Soul";

    $user = 'newuser';
    $pass = 'newpass';
    $db = "sks";

    try {
        $dbh = new PDO("mysql:host=$host", $root, $root_password);

        $dbh->exec("CREATE DATABASE `$db`;
                CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
                GRANT ALL ON `$db`.* TO '$user'@'localhost';
                FLUSH PRIVILEGES;")
        or die(print_r($dbh->errorInfo(), true));

    }
    catch (PDOException $e) {
        die("DB ERROR: " . $e->getMessage());
    }
?>