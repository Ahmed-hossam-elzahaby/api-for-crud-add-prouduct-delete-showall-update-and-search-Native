<?php

require_once "conecyion-api.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$data=json_decode(file_get_contents("php://input"));
$name= htmlspecialchars( trim( $data->name));
$price=$data->price;

$description=$data->description;








$query="INSERT INTO `products` (`name`,`description`,`price`) values ('$name','$description',$price)";
$runquery=mysqli_query($con,$query);
if($runquery)
{
    echo json_encode(['msg'=>"add succes"]);
}else
{
    echo json_encode(['msg'=>"added failed"]);
}
}else
{

    http_response_code(404);
}







?>