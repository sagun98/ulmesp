
<!DOCTYPE html>
<html lang="en">
    <head>
  
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Emerging Scholar Program 2016</title>
     
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link href='http://fonts.googleapis.com/css?family=Alegreya+SC:700,400italic' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/modernizr.custom.97074.js"></script>
        <noscript><link rel="stylesheet" type="text/css" href="css/noJS.css"/></noscript>
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top clearfix">
               </div><!--/ Codrops top bar -->
            <header class="clearfix">
                
               
                <h1>Emerging Scholar Program <span>2016</span></h1>
                
                <p>University Of Louisiana at Monroe</p>
                 <span>Dr. David McGraw</span>

             <div style="margin-right: 280px;">  <?php include ('header.php'); ?> </div>
              <span>This website contains of the images taken or that will be taken from planetary telescope. <br><br><br></span>
            </header>
            <section>

            
                <ul id="da-thumbs" class="da-thumbs">
<?php
//getting data from db

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
                    <li>
                        <a  href="view.php?id=<?php echo $id?>" >
                            <img src="uploads/<?echo $name?>" width="30%" height="30%"/>
                        
                            <div><span><?echo $date?> </span></div>

                        </a>
                    </li>

 <?}?>
                </ul>
               
            </section>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.hoverdir.js"></script>    
        <script type="text/javascript">
            $(function() {
            
                $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

            });
        </script>
    </body>
</html>







