<?php
require_once "conecyion-api.php";


if($_SERVER["REQUEST_METHOD"]=="DELETE")
{

$uri=$_SERVER["REQUEST_URI"];
$uriarray=explode("/",$uri);
$id=end($uriarray);

$query_id="select * from `products` where id=$id";
$runquery_id=mysqli_query($con,$query_id);
if(mysqli_num_rows($runquery_id)>0)
{
    $query="delete  from `products` where id=$id";
    $runquery=mysqli_query($con,$query);
    if($runquery)
    {
        echo json_encode(["msg"=>"deleted susscs"]);
    }
}else
{
    echo json_encode(["msg"=>"deleted failed not found id"]);
}

}else
{
    http_response_code(404);
}



?>