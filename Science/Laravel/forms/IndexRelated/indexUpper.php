<!DOCTYPE html>


<html lang="en">


<head>


    <meta charset="utf-8"/>


    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>


    <meta name="viewport" content="width=device-width, initial-scale=1"/>


    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <meta name="author" content="<?php echo $Author ?>"/>


    <meta name="Keywords" content="<?php echo $Keywords ?>"/>


    <meta name="Description" content="<?php echo $Description ?> "/>








    <title><?php
     if($Title!='')
     {
        echo $Title;
     }
     else
     {
        echo "Laravel Tutorial";
     }
    
     ?></title>





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


				    <a <?php if($Contents=='LaravelTutorial') echo "style=\"background-color: #483131;color:white; \""  ?> class="list-group-item"  style="border-bottom: 2px dotted #0A1062;" href="/Science/Laravel/forms/LaravelTutorial">Introduction</a>


					<a  <?php if($Contents=='LaravelInstalation') echo "style=\"background-color: #483131;color:white; \""  ?> class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Laravel/forms/LaravelInstalation">Instalation</a>                    


					<a <?php if($Contents=='LaravelApplicationStrucure') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Laravel/forms/LaravelApplicationStrucure">Application Strucure</a>


                    <a <?php if($Contents=='LaravelConfiguration') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Laravel/forms/LaravelConfiguration">Configuration</a>


					<a <?php if($Contents=='PreppingTheDatabase') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Laravel/forms/PreppingTheDatabase">Prepping The Database</a>


                    <a <?php if($Contents=='Laravel') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Laravel/forms/Laravel">Laravel Basic</a>


				    <a <?php if($Contents=='Routing') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Laravel/forms/Routing">Routing</a>


					<a <?php if($Contents=='Middleware') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Laravel/forms/Middleware">Middleware</a>


				    <a <?php if($Contents=='Controllers') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Laravel/forms/Controllers">Controllers</a>


				    <a <?php if($Contents=='Requests') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Laravel/forms/Requests">Requests</a>


				    <a <?php if($Contents=='Responses') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"  href="/Science/Laravel/forms/Responses">Responses</a>


				    <a <?php if($Contents=='Views') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Laravel/forms/Views">Views</a>


		   	        <a <?php if($Contents=='BladeTemplates') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Laravel/forms/BladeTemplates">BladeTemplates</a>


					   								


				</div>


			</div>





			


				


		</div><!--/Left Column-->


  


  <div class="col-sm-8">


  