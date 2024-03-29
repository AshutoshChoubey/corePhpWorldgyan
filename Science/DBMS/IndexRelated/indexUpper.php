<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="<?php echo $Author ?>"/>
    <meta name="Keywords" content="<?php echo $Keywords ?>"/>
    <meta name="Description" content="<?php echo $Description ?> "/>

    
    <title>WorldGyan</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="../../../css/custom.css" rel="stylesheet"/>
    <script src="../../../sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../sweetalert.css" />      
    <script src="../../../JavaScript/IndexJS.js"></script>
    <script src="../../../sweetalert.min.js"></script></script> 
    
    <?php
    require "SocialMedia.php";
    
    ?>
    
</head>

<body>

    <!-- Navigation -->
    <?php
    require "Nav.php";
    ?>

<div class="container-fluid" >


		<!-- Left Column -->
		<div class="col-sm-2"  >

           <!-- Text Panel -->
			<!-- Form --> 
			<div  class="panel panel-primary">
				<div  style="background-color: #FF9767;" class="panel-heading">
					<h3 style="color: #780606;" class="panel-title">
						<span class="glyphicon glyphicon-log-in"></span> 
						Log In
					</h3>
				</div>
				<div   class="panel-body">
					<form>
						<div class="form-group">
							<input type="text" required=""  class="form-control" id="uid" name="uid" placeholder="Username"/>
						</div>
						<div class="form-group">
							<input type="password" required=""  class="form-control" id="pwd" name="pwd" placeholder="Password"/>
						</div>
						<button  style="border-color: Black; " type="submit" class="btn btn-warning">Log In</button>
					</form>
				</div>
			</div>

			<!-- Text Panel -->
			<!-- List-Group Panel -->
			<div class="panel panel-primary" id="TutorialLink">
				<div style="background-color: #FF9767;" class="panel-heading">
					<h1 style="color: #780606;" class="panel-title">Tutorials</h1>
				</div>
				<div class="list-group">
				
        						<a class="list-group-item"  style="border-bottom: 2px dotted #0A1062;" href="/Science/Java/forms/JavaTutorial.php">Java Tutorial</a>
        						<a class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/DBMS/forms/index.php">DBMS Tutorial</a>
        						<a class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Laravel/forms/LaravelTutorial.php">Laravel Tutorial</a>
			
				</div>
			</div>

			<!-- List-Group Panel -->
			<div class="panel panel-primary" id="DownloadMaterial">
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