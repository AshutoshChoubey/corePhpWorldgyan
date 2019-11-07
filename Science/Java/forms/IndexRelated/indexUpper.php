<!DOCTYPE html>

<html lang="en">

<head>

     <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="Keywords" content="<?php echo $Keywords ?>"/>

    <meta name="Description" content="<?php echo $Description ?> "/>





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

    require "../../../IndexRelated/Nav.php"

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

				    <a <?php if($Contents=='JavaTutorial') echo "style=\"background-color: #483131;color:white; \""  ?> class="list-group-item"  style="border-bottom: 2px dotted #0A1062;" href="/Science/Java/forms/JavaTutorial">Introduction</a>

					<a  <?php if($Contents=='JavaTutorialBasicSyntax') echo "style=\"background-color: #483131;color:white; \""  ?> class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Java/forms/JavaTutorialBasicSyntax">Basic Syntax</a>                    

					<a <?php if($Contents=='JavaTutorialJavaPlatform') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Java/forms/JavaTutorialJavaPlatform">Java Platform</a>

					<a <?php if($Contents=='JavautorialArraysandForloop') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Java/forms/JavautorialArraysandForloop">Arrays and For loop</a>

					<a <?php if($Contents=='JavautorialConstructors') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Java/forms/JavautorialConstructors">Constructors</a>

					<a <?php if($Contents=='JavaTutorialStaticMembers') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Java/forms/JavaTutorialStaticMembers">Static Members</a>

                    <a <?php if($Contents=='JavaTutorialOverloadingMethods') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Java/forms/JavaTutorialOverloadingMethods">Overloading Methods</a>

                    <a <?php if($Contents=='JavaTutorialInnerClasses') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Java/forms/JavaTutorialInnerClasses">Inner Classes</a>

                    <a <?php if($Contents=='JavaTutorialInheritance') echo "style=\"background-color: #483131;color:white; \""  ?> class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Java/forms/JavaTutorialInheritance">Inheritance</a>

                    <a <?php if($Contents=='JavaTutorialAccessusingSuperkeyword') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"href="/Science/Java/forms/JavaTutorialAccessusingSuperkeyword">Accessusing Super keyword</a>

                    <a <?php if($Contents=='JavaTutorialConstructorsinInheritance') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Java/forms/JavaTutorialConstructorsinInheritance">Constructors in Inheritance</a>

                    <a <?php if($Contents=='JavaTutorialOverriddenMethods') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Java/forms/JavaTutorialOverriddenMethods">Overridden Methods</a>

                    <a <?php if($Contents=='JavaTutorialFinalKeyword') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"  href="/Science/Java/forms/JavaTutorialFinalKeyword">Final Keyword</a>

                    <a <?php if($Contents=='JavaTutorialMultipleimplements') echo "style=\"background-color: #483131;color:white; \""  ?>class="list-group-item" style="border-bottom: 2px dotted #0A1062;"  href="/Science/Java/forms/JavaTutorialMultipleimplements">Multiple implements</a>

                    <a  <?php if($Contents=='SyntaxErrorsRuntimeErrorsandLogicErrors') echo "style=\"background-color: #483131;color:white; \""  ?> class="list-group-item" style="border-bottom: 2px dotted #0A1062;" href="/Science/Java/forms/SyntaxErrorsRuntimeErrorsandLogicErrors">Syntax Errors Runtime Errors and Logic Errors</a>

					     						

				</div>

			</div>



			

				

		</div><!--/Left Column-->

  

  <div class="col-sm-8">