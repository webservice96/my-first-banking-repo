<?php 

/**
 * Banking_DB.
 *
 * @author	Helal Uddin
 * @since	v0.0.1
 * @version	v1.0.0	Saturday, July 3rd, 2021.
 * @global
 */
class Banking_DB{
    protected const DB_HOST = 'localhost';
    protected const DB_USER = 'root';
    protected const DB_NAME = 'bankDB';
    protected const DB_PASS = '';
    private $conn;

    function __construct(){
        $this->conn = mysqli_connect(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);

        if($this->conn){
            die("Database Connection Error!");
        }
    }

}