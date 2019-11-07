<!DOCTYPE HTML>
<?php
@session_start();
/*
*Form Name               : 
*Difficulty level        : 
*Description             : 
*Author                  : 
*Date                    : 
*Modified By             :
*Date of Modification    :
*Purpose of Modification :
*/
//echo $sesCategory."next".$sesSubject;
	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////
			require_once ($DOCUMENT_ROOT."/Science/CProgramming/classes/AllClasses.php");
             $objADDTutorialManager=new clsAddTutorialManager();
             $objADDTutorial=new clsWGAddTutorial();    
             $objADDTutorialSet= new clsWGAddTutorialSet();
             $SQuery="select wgfilename,wgtitle from wgaddtutorial where wgsubject='$sesSubject' and wgsubcategory='$sesCategory'";           
             $objADDTutorialSet=$objADDTutorialManager->RetrieveWGAddTutorialSet($SQuery);
             $numrecord=$objADDTutorialSet->GetCount();
             $Subject=str_replace(" ","","$sesSubject");
             $Category=str_replace(" ","","$sesCategory");            
	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////
?>
<html>
    <head>
    	<meta http-equiv="content-type" content="text/html" />
    	<meta name="author" content="" />
        <title>World Gyan</title>
        <link href="/../../css/style.css" rel="stylesheet" type="text/css" media="screen" />
    </head>

    <body>
		<div id="header">
            <table border="0" align="center">
              <tr >
                <td class="font-face"><h1 class="heading" >Welcome to World Gyan</h1></td>
            </tr>
            </table>        
        </div>
		<div id="sidebar-left">
           <!-- <img src="images/knowledge-translation-and-exchange.jpg"  width="210" height="220" alt=""/>
            <img src="images/Teach2World.jpg"  width="210" height="220" alt=""/>-->
            	<!-- end #content -->
        		<div id="sidebar">
        			<ul>
        				<li>
        					<div id="search" >
        					<form method="get" action="#">
        						<div>
        							<input type="text" name="s" id="search-text" value="" />
        							<input type="submit" id="search-submit" value="GO" />
        						</div>
        					</form>
        					</div>
        					<div style="clear: both;">&nbsp;</div>
        				</li>
        				<li>
        					<h2>About Us</h2>
        					<p>We provide all the knowledge and solution of problem in all the field  around the world.</p>
        				</li>
        				<li>
        					<h2>Category</h2>
        					<ul>
        						<li><a href="#">Science and Technology</a></li>
        						<li><a href="#">Sprituality</a></li>
        						<li><a href="#">History</a></li>
        						<li><a href="#">Helth</a></li>
        						<li><a href="#">Geology</a></li>
        						<li><a href="#">Others</a></li>
        					</ul>
        				</li>
        				<li>
        					<h2>Recent Added</h2>
        					<ul>
        						<li><a href="#">Laravel Tutorial</a></li>
        						<li><a href="Science/C programming/forms/C ProgrammingTutorials.php">C programming tutorial</a></li>
        						<li><a href="#">C++ tutorial</a></li>
        						<li><a href="#">Java Tutorial</a></li>
       							<li><a href="/WorldGyanPHP/Science/ControlSystem/forms/ControlSystem.php">Control System</a></li>
        					</ul>
        				</li>
        			</ul>
        		</div>
        		<!-- end #sidebar -->
            
        </div>
		<div id="main">
            <div id="menu">
        		<ul>
        			<li class="current_page_item" ><a href="/index.php">Home</a></li>
        			<li><a href="#">Feedback</a></li>
        			<li><a href="#">Chat</a></li>
        			<li><a href="#">Blog</a></li>
        			<li><a href="#">Help</a></li>
        			<li><a href="#">Contact</a></li>
        		</ul>
        	</div>
        	<!-- end #menu -->
        	<div id="page">
        		<div id="content">
                                       <!-- Start from Here -->
                                       <!--------------------------------------->
                                       <div class="post"><h1>Science And Technology &gt;Computer Science&gt;C Programming&gt;Title of file</h1> </div>                                       
        			 <table align="center"  width="80%" cellpadding="5" cellspacing="0" border="0" class="PageTextBox">
                                       <?
                                         for($i=0;$i<$numrecord;$i++)
                                        {
                                         $objADDTutorial=new clsWGAddTutorial(); 
                                         $objADDTutorial=new clsWGAddTutorial();
                                               $objADDTutorial=$objADDTutorialSet->GetItem($i);                                                 
                                                $sWGTitle=$objADDTutorial->getWGTitle();            
                                                $sWGDiscription=$objADDTutorial->getWGDiscription();         
                                                $sWGFileName=$objADDTutorial->getWGFileName();      
                                                $sWGFileType=$objADDTutorial->getWGFileType(); 
                                              
                                           echo " <tr>";
                                             echo" <td>";
                                              echo "<object data=\"$sWGFileName.pdf\" type=\"application/pdf\" width=\"300\" height=\"200\">";
                                               echo  "C Programming : <a href=/Science/$Category/$Subject/$sWGFileName>$sWGTitle.pdf</a>";
                                               echo "</object>" ;
                                            echo " </td>";
                                           echo " </tr>";
                                           }
                                        ?>                                 
                     </table>
       			</div>
                                <!--Work section End -->
                                <!--------------------------------------->
       		</div>
        	
        		<div style="clear: both;">&nbsp;</div>
        	</div>
        
        </div>
		<div id="sidebar-right">
            <div class="login">
                <h3 style="color: #0B041D;"  align="center">Log In</h3>
					<form>
						<div class="login">
							<input class="Txt" type="text" class="form-control" id="uid" name="uid" placeholder="Username">
						</div>
						<div class="login">
							<input class="Txt" type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
						</div>
                        <table align="center">                        
                            <tr>
    						  <td ><button type="submit" class="LoginBtn">Log In</button></td>
                            </tr>
                            <tr>
    						  <td><a style="color: #DFE60F;" href="#">Create Account</a></td>
                            </tr>
                            
                        </table>
					</form>
			</div>
         <h1>Other usefull link</h1>
			<ul>
				<li><a href="#">News</a></li>
				<li><a href="#">General Knowledge</a></li>
				<li><a href="#">Tips and Tricks</a></li>
				<li><a href="#">technical tips</a></li>
				<li><a href="#">Songs</a></li>
                <li><a href="#">Software</a></li>
                <li><a href="#">Notes</a></li>
                <li><a href="#">Encyclopedia</a></li>                
			</ul>
            
        </div>
		<div id="footer">
            <table style="width: 100%; font-weight:bold;" border="0">
                <tr>
                    <td width="15%"><a style="color: #742A2A;" href="#">FAQ and Support</a></td>
                    <td width="15%"><a style="color: #742A2A;" class="footerlink" href="#">Term and Conditiont</a></td>
                    <td width="15%"><a style="color: #742A2A;" class="footerlink"  href="#">Privacy Policy</a></td>
                    <td width="15%"><a style="color: #742A2A;" class="footerlink"  href="#">Career</a></td>
                </tr>
             <table width="100%">
	               <tr>
                		<td height="50px">
                			<div style="float: right;">
                				This Site Maintained by <a style="color:#70730F;" href="http://www.worldgyan.com" class="ntcs" target="_blank"><b> WorldGyan.com</b></a>
                			</div>                        
                		</td>
                    </tr>
                    <tr>
                        <td>
                            <div>
              				  Copyright ©2017 WorldGyan.com. All Rights Reserved.
         			        </div>
                        </td>
                    </tr>
                        
                    
             </table>
            </table>
         
        </div>
	</body>
<script language="javascript" type="text/javascript">
	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////
		
	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////
    
</script>
</html>