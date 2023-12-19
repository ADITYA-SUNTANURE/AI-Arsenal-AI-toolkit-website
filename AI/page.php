<?php
include 'config.php';

if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    if($msg=="success"){
        //Your success message
    }
    else if($msg=="error"){
        //Your error message
    }
}
?>