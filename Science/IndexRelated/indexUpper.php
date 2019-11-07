<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

     <title><?php echo $Title ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    
    <meta name="Keywords" content="<?php echo $Keywords ?>"/>
    <meta name="Description" content="<?php echo $Description ?> "/>


   
    
    <link href="../css/custom.css" rel="stylesheet"/>
    <script src="../sweetalert.min.js"></script></script> 
    <link rel="stylesheet" type="text/css" href="../sweetalert.css" />      
   <script language="javascript" src="../JavaScript/IndexJS.js"></script>
     <?php
    require "../IndexRelated/SocialMedia.php";
    
    ?>
</head>

<body>

    <!-- Navigation -->
    	<?php
    require "../IndexRelated/Nav.php"
    ?>


<div class="container-fluid">

		<!-- Left Column -->
		<div class="col-sm-2" >

           <!-- Text Panel -->
			<!-- Form --> 

			

			<!-- List-Group Panel -->
			<div class="panel panel-primary">
				<div style="background-color: #FF9767;" class="panel-heading">
					<h1 style="color: #780606;" class="panel-title">Download Materials</h1>
				</div>
				<div class="list-group">
			         <a class="list-group-item"  style="border-bottom: 2px dotted #0A1062;" href="javascript:void Category('Science and Technology')">Science and Technology</a>
					<a class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="javascript:void Category('Sprituality')">Sprituality</a>
					<a class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="javascript:void Category('History')">History</a>
					<a class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="javascript:void Category('Helth')">Helth</a>
					<a class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="javascript:void Category('Geology')">Geology</a>
					<a class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="javascript:void Category('Others')">Others</a>

			 </div>
			</div>
			<!-- Text Panel -->	
				
		</div><!--/Left Column-->
  
  <div class="col-sm-8">