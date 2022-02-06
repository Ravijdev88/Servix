<?php
    include('functions.php');
    $id = $_GET['id'];
    
    $query = "DELETE FROM `provider_request` WHERE `provider_request`.`id` = '$id';";
        if(performQuery($query)){
            echo "Account has been rejected.";
        }else{
            echo "Unknown error occured. Please try again.";
        }
?>
<br/><br/>
<a href="provider_request.php" class="btn btn-primary text-light">Back</a>