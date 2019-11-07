<?php

define('DB_SERVER','localhost');

define('DB_USER','ashutosh1995');

define('DB_PASS' ,'Ashu@9705747915');

define('DB_NAME', 'WG');

$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) ;

// Check connection

if (mysqli_connect_errno())

{

echo "Failed to connect to MySQL: " . mysqli_connect_error();

 }



//$connection = mysqli_connect("localhost","root", "","worldgyan") or die("couldn't make a connection.");

//$connection = mysqli_connect("host=localhost, dbname=worldgyan ,user=root ,password=123456") or die("couldn't make a connection.");



//$servername="localhost";

//$username="your_username";

//$password="";

//$dbname="worldgyan";

//$connection= new mysqli($servername,$username,$password,$dbname);

//print_r($connection) ;

//if($connection->connection_error) 

//{

//    die("Connection faild:".$connection->connect_error);

//} 

//

    

?>

