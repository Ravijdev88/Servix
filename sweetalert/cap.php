<?php
	if (isset($_POST['submit'])) {
		$img = $_POST['image'];
	    $folderPath = "uploads/";
	  
	    $image_parts = explode(";base64,", $img);
	    $image_type_aux = explode("image/", $image_parts[0]);
	    $image_type = $image_type_aux[1];
	  
	    $image_base64 = base64_decode($image_parts[1]);
	    $fileName = uniqid() . '.png';
	  
	    $file = $folderPath . $fileName;
	    file_put_contents($file, $image_base64);
	  
	    #print_r($fileName);
	}
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Capture webcam image with php and jquery - ItSolutionStuff.com</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #results { padding:20px; }
    </style>
</head>
<body>
  
<div class="container">
    <h5 class="text-center">Capture webcam image with php and jquery - ItSolutionStuff.com</h5>
   
    <form method="POST" action="">
        <div class="row">
            <div class="col-md-6">
                <div id="my_camera"></div>
                <br/>
                <input type=button value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
            <div class="col-md-6">
                <div id="results">Your captured image will appear here...</div>
            </div>
            <div class="col-md-4">
                <br/>
                <button name="submit" class="btn btn-success mr-auto">Submit</button>
            </div>
        </div>
    </form>
</div>
  
<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>
 
</body>

useful php code to submit to database after capture

// below is the php code
<?php
$users_id = sanitize($_POST['users_id']);

$path = 'images/saved_images/webcam'.date('YmdHis').rand(383,1000).'.jpg';

move_uploaded_file($_FILES['webcam']['tmp_name'], $path);

$sql = "INSERT INTO trial(users_id,image) VALUES('$users_id','".$path."')";

$db->query($sql);

echo "<script>window.open('trailmodal.php','_self')</script>";
?>

// the java code
<script type="text/javascript">
function take_snapshot() {

    //To take the snapshot and get image data

    Webcam.snap(function (data_uri) {

        // To display the results in page

        document.getElementById('results').innerHTML =

            '<h3>Here is your image....</h3>' +

            '<img src="' +data_uri+ '" width=\'280px\' height=\'250px\'/>';

        Webcam.upload(data_uri, 'saveimages.php', function (code, text) {

                alert("Successfull");

        });

    });

    Webcam.reset();

}
</script>