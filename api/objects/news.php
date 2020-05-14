<?php
class News{
  
    // database connection and table name
    private $conn;
    private $table_name = "news";
  
    // object properties
    public $id;
    public $idTheLoai;
    public $title;
    public $img;
    public $short_content;
    public $content;
    public $hot;
    public $new;
    public $deCu;
  
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
                    idTheLoai=:idTheLoai, title=:title, img=:img, short_content=:short_content, content=:content,hot=:hot,new=:new,deCu=:deCu";
      
        // prepare query
        $stmt = $this->conn->prepare($query);
      
        // sanitize
        $this->idTheLoai=htmlspecialchars(strip_tags($this->idTheLoai));
        $this->title=htmlspecialchars(strip_tags($this->title));
        $this->img=htmlspecialchars(strip_tags($this->img));
        $this->short_content=htmlspecialchars(strip_tags($this->short_content));
        $this->hot=htmlspecialchars(strip_tags($this->hot));
        $this->new=htmlspecialchars(strip_tags($this->new));
        $this->deCu=htmlspecialchars(strip_tags($this->deCu));
        $this->content=htmlspecialchars(strip_tags($this->content));
      
        // bind values
        $stmt->bindParam(":idTheLoai", $this->idTheLoai);
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":img", $this->img);
        $stmt->bindParam(":short_content", $this->short_content);
        $stmt->bindParam(":hot", $this->hot);
        $stmt->bindParam(":new", $this->new);
        $stmt->bindParam(":deCu", $this->deCu);
        $stmt->bindParam(":content", $this->content);
      
      
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
                    idTheLoai=:idTheLoai, 
                    title=:title, 
                    img=:img, 
                    short_content=:short_content,
                    content=:content,
                    hot=:hot,
                    new=:new,
                    deCu=:deCu
                WHERE
                    id = :id";
      
        // prepare query
        $stmt = $this->conn->prepare($query);
      
        // sanitize
        $this->idTheLoai=htmlspecialchars(strip_tags($this->idTheLoai));
        $this->title=htmlspecialchars(strip_tags($this->title));
        $this->img=htmlspecialchars(strip_tags($this->img));
        $this->short_content=htmlspecialchars(strip_tags($this->short_content));
        $this->hot=htmlspecialchars(strip_tags($this->hot));
        $this->new=htmlspecialchars(strip_tags($this->new));
        $this->deCu=htmlspecialchars(strip_tags($this->deCu));
        $this->content=htmlspecialchars(strip_tags($this->content));
      
        // bind values
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":idTheLoai", $this->idTheLoai);
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":img", $this->img);
        $stmt->bindParam(":short_content", $this->short_content);
        $stmt->bindParam(":hot", $this->hot);
        $stmt->bindParam(":new", $this->new);
        $stmt->bindParam(":deCu", $this->deCu);
        $stmt->bindParam(":content", $this->content);
      
      
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

     // // used when filling up the update product form
    // function readOne(){
      
    //     // query to read single record
    //     $query = "SELECT
    //                 c.name as category_name, p.id, p.name, p.description, p.price, p.category_id, p.created
    //             FROM
    //                 " . $this->table_name . " p
    //                 LEFT JOIN
    //                     categories c
    //                         ON p.category_id = c.id
    //             WHERE
    //                 p.id = ?
    //             LIMIT
    //                 0,1";
      
    //     // prepare query statement
    //     $stmt = $this->conn->prepare( $query );
      
    //     // bind id of product to be updated
    //     $stmt->bindParam(1, $this->id);
      
    //     // execute query
    //     $stmt->execute();
      
    //     // get retrieved row
    //     $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
    //     // set values to object properties
    //     $this->name = $row['name'];
    //     $this->price = $row['price'];
    //     $this->description = $row['description'];
    //     $this->category_id = $row['category_id'];
    //     $this->category_name = $row['category_name'];
    // }

    // // search products
    // function search($keywords){
      
    //     // select all query
    //     $query = "SELECT
    //                 c.name as category_name, p.id, p.name, p.description, p.price, p.category_id, p.created
    //             FROM
    //                 " . $this->table_name . " p
    //                 LEFT JOIN
    //                     categories c
    //                         ON p.category_id = c.id
    //             WHERE
    //                 p.name LIKE ? OR p.description LIKE ? OR c.name LIKE ?
    //             ORDER BY
    //                 p.created DESC";
      
    //     // prepare query statement
    //     $stmt = $this->conn->prepare($query);
      
    //     // sanitize
    //     $keywords=htmlspecialchars(strip_tags($keywords));
    //     $keywords = "%{$keywords}%";
      
    //     // bind
    //     $stmt->bindParam(1, $keywords);
    //     $stmt->bindParam(2, $keywords);
    //     $stmt->bindParam(3, $keywords);
      
    //     // execute query
    //     $stmt->execute();
      
    //     return $stmt;
    // }

    // // read products with pagination
    // public function readPaging($from_record_num, $records_per_page){
      
    //     // select query
    //     $query = "SELECT
    //                 c.name as category_name, p.id, p.name, p.description, p.price, p.category_id, p.created
    //             FROM
    //                 " . $this->table_name . " p
    //                 LEFT JOIN
    //                     categories c
    //                         ON p.category_id = c.id
    //             ORDER BY p.created DESC
    //             LIMIT ?, ?";
      
    //     // prepare query statement
    //     $stmt = $this->conn->prepare( $query );
      
    //     // bind variable values
    //     $stmt->bindParam(1, $from_record_num, PDO::PARAM_INT);
    //     $stmt->bindParam(2, $records_per_page, PDO::PARAM_INT);
      
    //     // execute query
    //     $stmt->execute();
      
    //     // return values from database
    //     return $stmt;
    // }

    // // used for paging products
    // public function count(){
    //     $query = "SELECT COUNT(*) as total_rows FROM " . $this->table_name . "";
      
    //     $stmt = $this->conn->prepare( $query );
    //     $stmt->execute();
    //     $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
    //     return $row['total_rows'];
    // }
}
?>