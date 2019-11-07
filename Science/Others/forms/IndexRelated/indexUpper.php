<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="<?php echo $Author ?>"/>
    <meta name="Keywords" content="<?php echo $Keywords ?>"/>
    <meta name="Description" content="<?php echo $Description ?> "/>


    <title><?php echo $Title ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="/../../css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/../../../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="/../../css/custom.css" rel="stylesheet"/>
    <script src="/../../sweetalert.min.js"></script></script> 
    <link rel="stylesheet" type="text/css" href="../../../sweetalert.css" />      
   <script src="/../../JavaScript/IndexJS.js"></script>
    

<?php

    require "../../../IndexRelated/SocialMedia.php";

    

  ?> 
     
    
</head>

<body>

    <!-- Navigation -->
    <?php
    require "../../../IndexRelated/Nav.php"
    ?>

<div class="container-fluid">

		<!-- Left Column -->
		<div class="col-sm-2" >

           <!-- Text Panel -->
			<!-- Form --> 
			

			<!-- Text Panel -->
			<!-- List-Group Panel --><br />
			<div class="panel panel-primary">
				<div style="background-color: #FF9767;" class="panel-heading">
					<h1 style="color: #780606;" class="panel-title">Contains</h1>
				</div>
                <div class="list-group">
                    <a <?php if($Contents=='PositiveThinking') echo "style=\"background-color: #483131;color:white; \""  ?> class="list-group-item"  style="border-bottom: 2px dotted #0A1062;" href="/Science/Others/forms/PositiveThinking.php">Positive Thinking</a>
					<a  <?php if($Contents=='HealthTips') echo "style=\"background-color: #483131;color:white; \""  ?> class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="HealthTips.php">Health Tips</a>                    
					<a <?php if($Contents=='Story') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Others/forms/Story.php">A Heart Touching Story</a>
                    <a <?php if($Contents=='HomeRemedies') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Others/forms/HomeRemedies.php">Home Remedies</a>
                    <a <?php if($Contents=='Fullforms') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Others/forms/Fullforms.php">Full Forms</a>
                    <a <?php if($Contents=='Oppositewords') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Others/forms/Oppositewords.php">Opposite Words</a>
                    <a <?php if($Contents=='InspirationalThoughts') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Others/forms/InspirationalThoughts.php">Inspirational Thoughts</a>
                    <a <?php if($Contents=='FunnyJokes') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Others/forms/FunnyJokes.php">Funny Jokes</a>
                    <a <?php if($Contents=='InspirationalStories') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Others/forms/InspirationalStories.php">Inspirational Stories</a>
                    <a <?php if($Contents=='Quotations') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Others/forms/Quotations.php">Quotations</a>
                    <a <?php if($Contents=='GeneralKnowledge') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Others/forms/GeneralKnowledge.php">General Knowledge</a>								
                	 
                    <a  <?php if($Contents=='BodyPart') echo "style=\"background-color: #483131;color:white; \""  ?> class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Others/forms/BodyPart.php">Body Part</a>                    
					<a <?php if($Contents=='CountyCapitals') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Others/forms/CountyCapitals.php">County Capitals</a>
                    <a <?php if($Contents=='ImportantMedicinalPlants') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Others/forms/ImportantMedicinalPlants.php">Important Medicinal Plants</a>
                   
                   <a  <?php if($Contents=='IndiaAtaGlance') echo "style=\"background-color: #483131;color:white; \""  ?> class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Others/forms/IndiaAtaGlance.php">India At A Glance</a>                    
					<a <?php if($Contents=='ListofMedicinalplantsandtheiruses') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Others/forms/ListofMedicinalplantsandtheiruses.php">List of Medicinal plants and their uses</a>
                    <a <?php if($Contents=='SexRatio') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Others/forms/SexRatio.php">Sex Ratio in world</a>
                   	
                     <a  <?php if($Contents=='TopOperatingSystem') echo "style=\"background-color: #483131;color:white; \""  ?> class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Others/forms/TopOperatingSystem.php">Top Operating System</a>  
                      <a  <?php if($Contents=='FrameRate') echo "style=\"background-color: #483131;color:white; \""  ?> class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Others/forms/FrameRate.php">About Frame Rate</a>                    
				<!--                  
				<!--	<a <?php if($Contents=='PopulationInWorld') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Others/forms/PopulationInWorld.php">Population In Worldl</a>-->
                   	  							
				</div>
                </div>

			
				
		</div><!--/Left Column-->
  
  <div class="col-sm-8">