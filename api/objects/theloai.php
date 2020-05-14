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

    // create product
    function create(){
      
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    Ten=:Ten, TenKhongDau=:TenKhongDau";
      
        // prepare query
        $stmt = $this->conn->prepare($query);
      
        // sanitize
        $this->Ten=htmlspecialchars(strip_tags($this->Ten));
        $this->TenKhongDau=htmlspecialchars(strip_tags($this->TenKhongDau));

        // bind values
        $stmt->bindParam(":Ten", $this->Ten);
        $stmt->bindParam(":TenKhongDau", $this->TenKhongDau);
      
      
        // execute query
        if($stmt->execute()){
            return true;
        }
      
        return false;
          
    }

   

    // // update the product
    function update(){
      
        // update query
        $query = "UPDATE
                    " . $this->table_name . "
               SET
                    Ten=:Ten, 
                    TenKhongDau=:TenKhongDau
                WHERE
                    id = :id";
      
        // prepare query
        $stmt = $this->conn->prepare($query);
      
        // sanitize
        $this->id=htmlspecialchars(strip_tags($this->id));
        $this->Ten=htmlspecialchars(strip_tags($this->Ten));
        $this->TenKhongDau=htmlspecialchars(strip_tags($this->TenKhongDau));
      
        // bind values
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":Ten", $this->Ten);
        $stmt->bindParam(":TenKhongDau", $this->TenKhongDau);
      
        // execute query
        if($stmt->execute()){
            return true;
        }
      
        return false;
    }

    // // delete the product
    function delete(){
      
        // delete query
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
      
        // prepare query
        $stmt = $this->conn->prepare($query);
      
        // sanitize
        $this->id=htmlspecialchars(strip_tags($this->id));
      
        // bind id of record to delete
        $stmt->bindParam(1, $this->id);
      
        // execute query
        if($stmt->execute()){
            return true;
        }
      
        return false;
    }
}
?>