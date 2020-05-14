<?php
// required headers
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	  
	// get database connection
	include_once '../config/database.php';
	  
	// instantiate product object
	include_once '../objects/news.php';
	  
	$database = new Database();
	$db = $database->getConnection();
	  
	$news = new News($db);
	  
	// get posted data
	$data = json_decode(file_get_contents("php://input"));
  
	// set product id to be deleted
	$news->id = $data->id;
	  
	// delete the product
	if($news->delete()){
	  
	    // set response code - 200 ok
	    http_response_code(200);
	  
	    // tell the user
	    echo json_encode(array("message" => "News was deleted."));
	}
	  
	// if unable to delete the product
	else{
	  
	    // set response code - 503 service unavailable
	    http_response_code(503);
	  
	    // tell the user
	    echo json_encode(array("message" => "Unable to delete News."));
	}
?>