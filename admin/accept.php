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
    $query = "select * from `provider_request` where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
        	$name= $row['name'];
			$email = $row['email'];
			$contact = $row['contact'];
			$password= $row['password'];
			$city = $row['city'];
			$address= $row['address'];
			$experience= $row['experience'];
			$work_type= $row['work_type'];
			$others= $row['others'];
			$image= $row['image'];
			$details= $row['details'];
			$capture= $row['capture'];
			$nepabill= $row['nepabill'];
			$national_id= $row['national_id'];
			$status = "Verified";
			$date=date('d-m-Y');
			$query = "INSERT INTO `providers` (name,contact,email,password,city,address,experience,id_pic,nepabill,work_type,others,image,details,capture,status, date) VALUES ('$name','$contact','$email','$password','$city','$address','$experience','$national_id','$nepabill','$work_type','$others','$image','$details','$capture','$status','$date');";	
		}
		$query .= "DELETE FROM `provider_request` WHERE `provider_request`.`id` = '$id';";
		if(performQuery($query)){
            echo "Account has been accepted.";
        }else{
            echo "Unknown error occured. Please try again.";
        }
    }else{
        echo "Error occured.";
    }
?>
<br/><br/>
<a href="provider_request.php" class="btn bg-primary text-light">Back</a>