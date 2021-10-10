<?php

require_once "conecyion-api.php";



if($_SERVER["REQUEST_METHOD"]=="GET")
{
$query="select * from `products`";
$runquery=mysqli_query($con,$query);
$result=mysqli_fetch_all($runquery,MYSQLI_ASSOC);
$jsondata=json_encode($result);
print_r($jsondata);


}else

http_response_code(404);








?>