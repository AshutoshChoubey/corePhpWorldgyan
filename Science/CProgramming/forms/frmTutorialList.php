<!DOCTYPE HTML>
<?php
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
	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////
	require_once ($DOCUMENT_ROOT."/Science/CProgramming/classes/AllClasses.php");
             
                $objADDTutorialManager=new clsAddTutorialManager();
                $objADDTutorial=new clsWGAddTutorial();    
                $objADDTutorialSet= new clsWGAddTutorialSet();
                $SQuery="SELECT wguserid,wgusertype,wgcategory,t2.wgsubcategoryname as wgsubcategory,
                        t3.wgsubjectname as wgsubject,wgtitle,wgdiscription,wgfilename,wgfiletype
                        FROM wgaddtutorial t1, wgsubcategory t2,wgsubject t3
                        WHERE t1.wgsubcategory = t2.wgsubcategoryid and t1.wgsubject=t3.wgsubjectid
                        LIMIT 0 , 30" ;
                $objADDTutorialSet=$objADDTutorialManager->RetrieveWGAddTutorialSet($SQuery);
                $numrecord=$objADDTutorialSet->GetCount();
               
                
                
             
                
           	
	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////
?>
<html>
    <head>
    	<meta http-equiv="content-type" content="text/html" />
    	<meta name="author" content="" />
        <title>World Gyan</title>
        <link href="/css/style.css" rel="stylesheet" type="text/css" media="screen" />
    </head>

    <body>
		<div id="header">
         <div style="float: left;">Welcome <b>Ashutosh Kumar Choubey</b></div>
            <table border="0" align="center">
              <tr >              
                <td class="font-face"><h1 class="heading" >Welcome to worldGyan Tutorial List</h1></td>
            </tr>
            <div style="float: right;">Login as: <b>Admin</b></div>  
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
        						<li><a href="Science/Cprogramming/forms/CProgrammingTutorials.php">C programming tutorial</a></li>
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
                     <table align="center"  width="80%" cellpadding="5" cellspacing="0" border="1" class="PageTextBox">
                         <tr>
                          <td><b> Category</b> </td>
                          <td><b>Sub  Category</b> </td>
                          <td><b> Subject </b> </td>
                          <td><b> Title </b> </td>
                          <td><b> Discription</b> </td>
                           <td><b>File</b> </td>
                         </tr>
                                       <?
                                         for($i=0;$i<$numrecord;$i++)
                                            {
                                              $objADDTutorial=new clsWGAddTutorial();
                                              $objADDTutorial=$objADDTutorialSet->GetItem($i);
                                                $iWGUserId=$objADDTutorial->getWGUserId();
                                                $sWGUserType=$objADDTutorial->getWGUserType();        
                                                $sWGCategory=$objADDTutorial->getWGCategory();         
                                                $sWGSubCategory=$objADDTutorial->getWGSubCategory();         
                                                $sWGSubject=$objADDTutorial->getWGSubject();         
                                                $sWGTitle=$objADDTutorial->getWGTitle();            
                                                $sWGDiscription=$objADDTutorial->getWGDiscription();         
                                                $sWGFileName=$objADDTutorial->getWGFileName();      
                                                $sWGFileType=$objADDTutorial->getWGFileType();  
                                            
                                        ?>                                                            
                        <tr>
                          <td><a href="javascript:void "><?echo $sWGCategory?></a></td>
                          <td><? echo $sWGSubCategory ?> </td>
                          <td> <? echo $sWGSubject ?> </td>
                          <td><? echo $sWGTitle ?> </td>
                          <td ><div style="white-space: nowrap;width: 12em;overflow: hidden;"><?           
                           echo $sWGDiscription;
                           ?> </div>
                          
                          </td>
                          <td><? echo $sWGFileName ?> </td>
                         </tr>
                         
                        
                        
 	                      
         
                          <?
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