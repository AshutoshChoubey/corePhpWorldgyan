<!DOCTYPE html>

<html lang="en">

<head>

     <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="Keywords" content="<?php echo $Keywords ?>"/>

    <meta name="Description" content="<?php echo $Discription ?> "/>

    <meta name="author" content="<?php echo $Author ?>"/>





    <title><?php echo $Title ?></title>



    <!-- Bootstrap Core CSS -->

    <link href="../../../css/bootstrap.min.css" rel="stylesheet"/>



    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->

    <link href="../../../css/custom.css" rel="stylesheet"/>

    <script src="../../../sweetalert.min.js"></script></script> 

    <link rel="stylesheet" type="text/css" href="../../../sweetalert.css" />      

   <script language="javascript" src="../../../JavaScript/IndexJS.js"></script>

   <?php

    require "../../../IndexRelated/SocialMedia.php";

    

  ?> 

   

</head>



<body>



    <!-- Navigation -->

     <?php

    require "../../../IndexRelated/Nav.php";

    

    ?>



<div class="container-fluid">



		<!-- Left Column -->

		<div class="col-sm-2" >



           <!-- Text Panel -->

			

			<!-- List-Group Panel -->

			<div class="panel panel-primary">

				<div style="background-color: #FF9767;" class="panel-heading">

					<h1 style="color: #780606;" class="panel-title">Tutorials</h1>

				</div>

				<div class="list-group">

                    <a  <?php if($Contents=='index') echo "style=\"background-color: #483131;color:white; \""  ?> class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/DBMS/forms/Introduction.php">Introduction</a>                    

   	                <a  <?php if($Contents=='Architecture') echo "style=\"background-color: #483131;color:white; \""  ?> class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/DBMS/forms/Architecture.php">Three Schema Architecture</a>                    

					<a <?php if($Contents=='Language') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/DBMS/forms/Language.php">DBMS Languages</a>

                    <a <?php if($Contents=='Interfaces') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/DBMS/forms/Interfaces.php">DBMS Interfaces</a>

					<a <?php if($Contents=='DataModel') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/DBMS/forms/DataModel.php">Data Model</a>

                    <a <?php if($Contents=='ERModel') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/DBMS/forms/ERModel.php">E-R Data Model</a>

				    <a <?php if($Contents=='RelationalModel') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/DBMS/forms/RelationalModel.php">Relational Model</a>

					<a <?php if($Contents=='Coding') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/DBMS/forms/Coding.php">Bigening of DBMS Coding</a>

                    <a <?php if($Contents=='joins') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/DBMS/forms/joins.php">Joins of Tables</a>

					   								

				</div>

			</div>



			

				

		</div><!--/Left Column-->

  

  <div class="col-sm-8">

  