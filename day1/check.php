<?php

$user= $_POST['userName'];

$passkey=$_POST['userPassword'];




if($user=="admin" && $passkey=="Admin@123"){
    echo "<b>" .$user. "</b>";

    echo "<br> <b>". $passkey ."</b>";    
}else{
    echo "User is not valid";
}