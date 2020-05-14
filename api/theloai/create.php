<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// database connection will be here
// include database and object files
include_once '../config/database.php';
include_once '../objects/theloai.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$theloai = new TheLoai($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));

if(
    !empty($data->Ten) &&
    !empty($data->TenKhongDau)
){
  
    // set product property values
    $theloai->Ten = $data->Ten;
    $theloai->TenKhongDau = $data->TenKhongDau;
  
    // create the product
    if($theloai->create()){
  
        // set response code - 201 created
        http_response_code(201);
  
        // tell the user
        echo json_encode(array("message" => "TheLoai was created."));
    }
  
    // if unable to create the product, tell the user
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to TheLoai news."));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to create TheLoai. Data is incomplete."));
}
?>