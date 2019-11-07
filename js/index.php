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
    <style>

/* Style The Dropdown Button */
.dropbtn {
    background: linear-gradient(#FFDCC4,#FF9042,#FF8632 );
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background: linear-gradient(#FFDCC4,#FF9042,#FF8632 );
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>    

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    
   
    <link href="../../../../css/custom.css" rel="stylesheet"/>
    
</head>

<body>

    <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="background: linear-gradient(#FFDCC4,#FF9042,#FF8632 );" >
    <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header" ><!-- Logo color -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="http://www.worldgyan.com" style="color: white;"><span style="font-family: French Script MT; font-size:larger; font-weight: bold;">WorldGyan</span></a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li >
                        <a style="color: white;" href="worldgyan.com">Home</a>
                    </li>
                    <li>
                        <a style="color: white;" href="../../../../About.php">About</a>
                    </li>
                    <li>
                        <a style="color: white;" href="../../../../Contact.php">Contact </a>
                    </li>
					<li >
                    <div class="dropdown">                    
						
                        
                        <a style="color: white; href='' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><button class="dropbtn">Online Materials <span class="caret"></span></button></a>
						                        
                        <div class="dropdown-content">
                        
							<a style="color: black;"  href="../../../../index.php#DownloadMaterial">Download Material</a>
							<a style="color: black;"  href="../../../../index.php#TutorialLink">Tutorial</a>
							<a style="color: black;" href="../../../../index.php#OthersLink">Others</a>
                            <a style="color: black;" href="./../../../index.php#OthersLinkHindi">Hindi Article</a>
						</div>
                </div>                        
					</li>    
                </ul>
				<!-- Search -->
				<form class="navbar-form navbar-center" role="search">
					<div class="form-group">
						<input type="text" class="form-control" required="" placeholder="Search"/>
					</div>
					<button  style="border-color: Black; " type="submit" class="btn btn-warning "><span class="glyphicon glyphicon-search"></span> Search</button>
				</form>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div class="container-fluid" style="height: 300px;" >
<p style="color: black; font-size: 50px; float: top;"><b>File not found</b> </p>
<p style="color: #0F2037; font-size: 30px;"><b> please visit <a href="http://www.worldgyan.com" style="color: green;">worldgyan.com</a></b> </p>

	
  
</div>
	
	<footer>

		<div class="footer-blurb">

         <div class="sharetastic"></div>

  

			<div class="container">

				<div class="row">

                    

    				<table style="width: 100%; font-weight:bold;" border="0">

                        <tr>

                            <td ><a style="color: #742A2A;"class="footerlink" href="../../../../Mission.php">Mission</a></td>

                            <td ><a style="color: #742A2A;" class="footerlink"  href="../../../../Helping.php">Helping</a></td>

                            <td ><a style="color: #742A2A;" class="footerlink"  href="../../../../Career.php">Career</a></td>

                        </tr>

                         

                </table>	

    			

                </div>



            </div>

                <table width="100%" border='0'>

            	               <tr>

                            		<td height="50px">

                            			<div style="float: right;font-size: x-small;">

                            				This Site Maintained by <a style="color:#70730F; font-size: xx-small;"  href="http://www.worldgyan.com" ><b> WorldGyan.com</b></a>

                            			</div>                        

                            		</td>

                                </tr>

                                

                </table>

				<!-- /.row -->	

        </div>

        <div class="small-print">

        	<div class="container">

        		<p>Copyright &copy;<?php echo $currentDate=date('Y'); ?> WorldGyan.com  </p>

        	</div>

        </div>

	</footer>


    <script src="../../../../js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

    
</body>

</html>
