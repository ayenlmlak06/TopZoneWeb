<?php
    define('HOST','127.0.0.1');
    define('USER','root');
    define('PASS','');
    define('DB','topzonedb');

    function get_connection(){
        $conn = new mysqli(HOST,USER,PASS, DB);
        if($conn -> connect_errno){
            die('Connect failed with massage:' .$conn->connect_error);
        }
        $conn-> set_charset("utf8");
        return $conn;
    }
?>