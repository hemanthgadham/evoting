<?php

define("DB_HOST", "");
define("DB_NAME", "");
define("UNAME", "");
define("PASS","");

$connection = mysqli_connect(DB_HOST,UNAME,PASS);

if($connection){
    $stat2 = mysqli_select_db($connection,DB_NAME);
}else{
    die("Connection Error");
}


