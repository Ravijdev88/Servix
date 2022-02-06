<?php
    include('functions.php');
    $id = $_GET['id'];
    
    $query = "DELETE FROM `pre_comment` WHERE `pre_comment`.`id` = '$id';";
        if(performQuery($query)){
            echo "comment has been rejected.";
        }else{
            echo "Unknown error occured. Please try again.";
        }
?>
<br/><br/>
<a href="pre_comment.php" class="btn btn-primary text-light">Back</a>