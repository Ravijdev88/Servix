<?php
session_start();
include('functions.php');
if (!isset($_SESSION["admin"])) {
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>	

<?php
#include('functions.php');
    $id = $_GET['id'];
    $query = "select * from `pre_comment` where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
        	$name= $row['name'];
			$email = $row['email'];
			$contact = $row['contact'];
			$location= $row['location'];
			$image= $row['image'];
			$note= $row['note'];
			$date=date('d-m-Y');
			$query = "INSERT INTO `comments` (name,email,contact,image,location,note,date) VALUES ('$name','$email','$contact','$image','$location','$note','$date');";	
		}
		$query .= "DELETE FROM `pre_comment` WHERE `pre_comment`.`id` = '$id';";
		if(performQuery($query)){
            echo "comment has been accepted.";
        }else{
            echo "Unknown error occured. Please try again.";
        }
    }else{
        echo "Error occured.";
    }
?>
<br/><br/>
<a href="pre_comment.php" class="btn bg-primary text-light">Back</a>