<?php

$user= $_REQUEST['userName'];

$passkey=$_REQUEST['userPassword'];




if($user=="admin" && $passkey=="Admin@123"){

    header("Location:dashboard.php");

}else{
    echo "User is not valid";
}