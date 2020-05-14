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

  
    // set product property values
    $news->id = $data->id;
    $news->idTheLoai = $data->idTheLoai;
    $news->title = $data->title;
    $news->img = $data->img;
    $news->short_content = $data->short_content;
    $news->content = $data->content;
    $news->hot = $data->hot;
    $news->new = $data->new;
    $news->deCu = $data->deCu;
  
    // create the product
    if($news->update()){
  
        // set response code - 201 created
        http_response_code(201);
  
        // tell the user
        echo json_encode(array("message" => "News was updated."));
    }
  
    // if unable to create the product, tell the user
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to update news."));
    }
?>