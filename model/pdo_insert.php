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
    (10, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (11, 'usuario10@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (12, 'usuario11@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (13, 'usuario12@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (14, 'usuario13@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (15, 'usuario14@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (16, 'usuario23@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (17, 'usuario67@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (18, 'usuario87@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (19, 'usuario34@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (20, 'usuario85@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (21, 'usuario91@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (22, 'usuario97@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (23, 'usuario94@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (24, 'usuario93@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (25, 'usuario92@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (26, 'usuario22@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (27, 'usuario33@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (28, 'usuario44@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (29, 'usuario49@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (30, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (31, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (32, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (33, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (34, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (35, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (36, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (37, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (38, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (39, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (40, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (41, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (42, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (43, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (44, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (45, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (46, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (47, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (48, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (49, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12'),
    (50, 'usuario9@gmail.com', '123456', 'Edo Mexico', '9876543210', '2009-12-12');

    // commit the transaction
    $conn->commit();
    echo "New records created successfully";
} catch (PDOException $e) {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
}

$conn = null;
