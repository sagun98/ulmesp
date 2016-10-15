<?php
	session_start();

  if ($_SESSION['login_status']){
	include ('connect.php');
	$_SESSION['id']=$_GET['id'];
	$gg=$_GET['id'];

  
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
    width: 11.99999%;
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

<?php
 $files = glob("./uploads/*.*");
 //print_r($files);
 foreach ($files as $filename) {
   //echo "$filename size " . filesize($filename) . "\n";
  }
 
  $sqll = ("SELECT id,name,description FROM ulmesp where id=?");
		$stmtt=$db3->prepare($sqll);
		$stmtt-> bind_param('i',$_SESSION['id']);
		$stmtt->execute();
		$stmtt->bind_result($id,$name,$description);
		$stmtt-> fetch();
            ?>

<div class="responsive" style="margin-top: 30px;">
  <div class="img">
      <img src="uploads/<?echo $name?>" alt="Trolltunga Norway" width="300" height="400">
    </a>
    <div class="desc"><?echo $description?></div>
  </div>
</div>

 <form method="post" action="">
   	<textarea name="description" id="description" rows="8" cols="50" style="margin-top: 30px;"><?echo $description?></textarea>
   	<br>
   	<input type="submit" name="update" id="update" value="Update"></input>
         
    </form>
<?php
	if (isset($_POST['update'])){
    $stmt1 = $db->prepare("UPDATE ulmesp SET description=? WHERE id = ?");
				$stmt1->bind_param('si',$_POST['description'],$_SESSION['id']);
				$stmt1->execute(); 
				$stmt1->close();
				header('Location: change.php?id='.$id.'');
				
			}
    }
    else{
      header('Location:index.php');
    }
				?>
<br><br>

<a href="login.php" ><button class="button" style="vertical-align:middle"><span>Back</span></button> </a>

</body>
</html>

