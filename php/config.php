<?php
    define('db_server', 'localhost');
    define('db_username', 'root');
    define('db_password', 'VesterCorporation');
    define('db_name','vester_db');

    $conn = mysqli_connect(db_server, db_username, db_password, db_name);

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

?>