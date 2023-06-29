<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "pruebas";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // begin the transaction
    $conn->beginTransaction();
    // our SQL statements
    $conn->exec("INSERT INTO users (name, email, password, address, phone, birthday)
    VALUES (1,'John', 'john@example.com', '123456', 'cdmx', '1234567890', '2000-12-12'),
    (2, 'usuario1@gmail.com', '123456', 'Mexico', '9876543210', '2001-12-12'),
    (3, 'usuario2@gmail.com', '123456', 'Mexico', '9876543210', '2002-12-12'),
    (4, 'usuario3@gmail.com', '123456', 'Mexico', '9876543210', '2003-12-12'),
    (5, 'usuario4@gmail.com', '123456', 'Mexico', '9876543210', '2004-12-12'),
    (6, 'usuario5@gmail.com', '123456', 'Mexico', '9876543210', '2005-12-12'),
    (7, 'usuario6@gmail.com', '123456', 'Mexico', '9876543210', '2006-12-12'),
    (8, 'usuario7@gmail.com', '123456',  'Edo Mexico', '9876543210', '2007-12-12'),
    (9, 'usuario8@gmail.com', '123456',  'Edo Mexico', '9876543210', '2008-12-12'),
    (10, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12');

    // commit the transaction
    $conn->commit();
    echo "New records created successfully";
} catch (PDOException $e) {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
}

$conn = null;
