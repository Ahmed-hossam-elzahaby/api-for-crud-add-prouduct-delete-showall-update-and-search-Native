<?php

require_once "conecyion-api.php";

if($_SERVER["REQUEST_METHOD"]=="GET")
{
    $uri=$_SERVER["REQUEST_URI"];
    $uriarray=explode("/",$uri);
    $term=end($uriarray);
    
    // print_r($term);
    $query="select * from `products` where `name` like '%$term%'";
    
    
    $runquery=mysqli_query($con,$query);
    if(mysqli_num_rows($runquery)>0){

        $result=mysqli_fetch_all($runquery,MYSQLI_ASSOC);
    
        $data=json_encode($result);
        print_r($data);

    }else
    {
        echo json_encode(["msg"=>"not found"]);
    }
    
}else
{
    http_response_code(404);
}










?>