<?php
session_start();
include ('connect.php');
if ($_SESSION['login_status']){
echo "<h2>Login Sucessful</h2>";

 	// Uploading the image into the upload folder.
	       if (isset($_POST['submit_1'])){
	        	
	        		$uploaddir = 'uploads/';
					define ('SITE_ROOT', realpath(dirname(__FILE__)));
					$uploadfile = SITE_ROOT.'/uploads/'. basename($_FILES['image']['name']);
					$uploadfile=str_replace(' ','|',$uploadfile);
					$image = $uploadfile;
					$pos = strpos($image, "uploads/");
  				  $image = substr($image, $pos+8); 
  				  echo $image;



		if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
		    echo "UPLOAD SUCCESSFUL";

		    $a="No description";
		    $date=date("Y M d");
		  
			// taking the uploaded file to the database.
		   $insert= $db1->prepare("INSERT INTO ulmesp(name,post_time,description) VALUES (?,?,?)");
 		   $insert->bind_param ('sss', $image,$date,$a);
  		   $insert->execute();
  		   
  		   $insert->close();
				header('Location: login.php');
			}
		else {
		    echo "Possible file upload attack!\n";
		}
  }
?>
<!DOCTYPE html>
<html>
<head>
<style>
div.img {
    border: 1px solid #ccc;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 18.99999%;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>
<body>

<! Uploading a file HTML>
<form  method="POST" enctype="multipart/form-data">
					<div>
					<h3>(Choose File first and then hit POST to post the new pictures.)</h3> 
		
					<input type ="file" name="image">
					</div>
				<div>
					<input type="submit" name="submit_1" value= "Post" >		
				</div>	
				</form>
        <hr>

<h2> Click on the images to change their Description</h2>
<?php

 $files = glob("./uploads/*.*");
 //print_r($files);
 foreach ($files as $filename) {
   //echo "$filename size " . filesize($filename) . "\n";
  }

?>
<?php 
$sql = "SELECT id, name, post_time, description FROM ulmesp " ; 
            $stmt= $db->prepare($sql);
            $stmt-> execute();
            $stmt-> bind_result($id,$name,$date, $description);
            while ($stmt->fetch()){
            ?>

<div class="responsive" style="margin-top: 30px;">
  <div class="img">
    <a  href="change.php?id=<?php echo $id?>">
      <img src="uploads/<?echo $name?>" alt="Trolltunga Norway" width="300" height="400">
    </a>
    <div class="desc"><? echo $description?></div>
  </div>
  <div style="margin-left: 80px;"> <?php echo "$date"; ?> </div>
</div>


<?php
	}
}

else {
  header('Location:index.php');
}


?>


<div style= "position:absolute; font-size:18px; top:8px;right:16px">
<a href= "logout.php" style="font-size: 26px; ">Log out </a>
</div>




</body>
</html>
