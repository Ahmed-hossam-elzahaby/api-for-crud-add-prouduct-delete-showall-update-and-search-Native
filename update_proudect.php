<?php

require_once "conecyion-api.php";

if($_SERVER["REQUEST_METHOD"]=="PUT")
{

$uri=$_SERVER["REQUEST_URI"];
$uriArray=explode("/",$uri);
$id=end($uriArray);
$data=json_decode(file_get_contents("php://input"));
$name=$data->name;
$price=$data->price;
$description=$data->description;
$query="UPDATE `products` SET `name`='$name', `description`='$description',`price`=$price WHERE id=$id ";
$runquery=mysqli_query($con,$query);
if($runquery)
{
    echo json_encode(["msg"=>"update susses"]);

}else
{
    echo json_encode(["msg"=>"faild to update"]);
}

}else
{
    http_response_code(404);
}





?>