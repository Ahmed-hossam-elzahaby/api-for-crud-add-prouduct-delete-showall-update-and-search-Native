<?php
header("content-type:Application/json charset=UTF-8");
header("Access-Control-Allow-origin:*");
$con=mysqli_connect("localhost","root","","api_test");
if(!$con)
{
echo "faild to conect";
die();
}
?>