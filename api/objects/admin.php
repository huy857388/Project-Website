<?php
class Admin{
  
    // database connection and table name
    private $conn;
    private $table_name = "admin";
  
    // object properties
    public $username;
    public $password;
    public $name;
    public $email;
    public $phone;
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
    function read(){
      
        // select all query
        $query = "SELECT * FROM `$this->table_name`";
      
        // prepare query statement
        $stmt = $this->conn->prepare($query);
      
        // execute query
        $stmt->execute();
      
        return $stmt;
    }
}
?>