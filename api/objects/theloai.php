<?php
class TheLoai{
  
    // database connection and table name
    private $conn;
    private $table_name = "theloai";
  
    // object properties
    public $id;
    public $Ten;
    public $TenKhongDau;
  
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