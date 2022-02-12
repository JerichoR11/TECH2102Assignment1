<?php
$db_username="root";//database user
$db_password="";//database password
$db_name="students";//specific data thats going to be used
$local_server="localhost";// server thats being used
$serverConnection= new mysqli($local_server,$db_username,$db_password,$db_name);
if(!$serverConnection){
    die(mysqli_error(($serverConnection)));
    //http response code that returns bad gateway
  http_response_code(502);//returns an invalid response
}
else{
    //http response code 201 created
    http_response_code(201);//to show that a connection has been made
}


?>