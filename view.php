<html>
<head>
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>


<?php 
session_start();
include ('connect.php');

  $sqll = ("SELECT id,name,description,post_time FROM ulmesp where id=?");
		$stmtt=$db3->prepare($sqll);
		$stmtt-> bind_param('i',$_GET['id']);
		$stmtt->execute();
		$stmtt->bind_result($id,$name,$description,$date);
		$stmtt-> fetch();
            ?>

  <div class="img" style="width: 1000px; height: 500px;">
      <img style="max-height: 100%;max-width: 100%;" src="uploads/<?echo $name?>" alt="Trolltunga Norway" >

     <h4 style="margin-left: 10px;"><?echo $date?></h4>
    <div style="margin-left: 10px;"><h2><?echo "Description:".$description?></h2></div>
  </div>
  <br><br><br><br><br><br><br>

<a href="index.php" ><button class="button" style="vertical-align:middle"><span>Back</span></button> </a>
</html>