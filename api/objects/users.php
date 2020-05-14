<?php
class User{
  
    // database connection and table name
    private $conn;
    private $table_name = "users";
  
    // object properties
    public $id;
    public $name;
    public $email;
    public $password;
    public $provider;
    public $provider_id;
    public $remember_token;
    public $created_at;
    public $updated_at;
  
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
                    name=:name, 
                    email=:email, 
                    password=:password, 
                    created_at=:created_at , 
                    updated_at=:updated_at";
      
        // prepare query
        $stmt = $this->conn->prepare($query);
      
        // sanitize
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->created_at = date("Y-m-d H:i:s");
        $this->updated_at = date("Y-m-d H:i:s");;

        // bind values
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":created_at", $this->created_at);
        $stmt->bindParam(":updated_at", $this->updated_at);
      
      
        // execute query
        if($stmt->execute()){
            return true;
        }
      
        return false;
          
    }

   

    // // update the product
    // function update(){
      
    //     // update query
    //     $query = "UPDATE
    //                 " . $this->table_name . "
    //            SET
    //                 idTheLoai=:idTheLoai, 
    //                 title=:title, 
    //                 img=:img, 
    //                 short_content=:short_content,
    //                 content=:content,
    //                 hot=:hot,
    //                 new=:new,
    //                 deCu=:deCu
    //             WHERE
    //                 id = :id";
      
    //     // prepare query
    //     $stmt = $this->conn->prepare($query);
      
    //     // sanitize
    //     $this->idTheLoai=htmlspecialchars(strip_tags($this->idTheLoai));
    //     $this->title=htmlspecialchars(strip_tags($this->title));
    //     $this->img=htmlspecialchars(strip_tags($this->img));
    //     $this->short_content=htmlspecialchars(strip_tags($this->short_content));
    //     $this->hot=htmlspecialchars(strip_tags($this->hot));
    //     $this->new=htmlspecialchars(strip_tags($this->new));
    //     $this->deCu=htmlspecialchars(strip_tags($this->deCu));
    //     $this->content=htmlspecialchars(strip_tags($this->content));
      
    //     // bind values
    //     $stmt->bindParam(":id", $this->id);
    //     $stmt->bindParam(":idTheLoai", $this->idTheLoai);
    //     $stmt->bindParam(":title", $this->title);
    //     $stmt->bindParam(":img", $this->img);
    //     $stmt->bindParam(":short_content", $this->short_content);
    //     $stmt->bindParam(":hot", $this->hot);
    //     $stmt->bindParam(":new", $this->new);
    //     $stmt->bindParam(":deCu", $this->deCu);
    //     $stmt->bindParam(":content", $this->content);
      
      
    //     // execute query
    //     if($stmt->execute()){
    //         return true;
    //     }
      
    //     return false;
    // }

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