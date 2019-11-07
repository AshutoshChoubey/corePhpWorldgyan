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
             $objWGSubCategory=new clsWGSubCategory();
             $objWGSubCategorySet=new clsWGSubCategorySet();    
             $objWGSubCategoryManager=new clsWGSubCategoryManager();
             $SQuery="select * from wgsubcategory" ;
             $objWGSubCategorySet=$objWGSubCategoryManager->RetrieveWGSubCategorySet($SQuery);
             $numrecord=$objWGSubCategorySet->GetCount();
             
             $objWGSubject=new clsWGSubject();
             $objWGSubjectSet=new clsWGSubjectSet();    
             $objWGSubjectManager=new clsWGSubjectManeger();
             $SQuery="select * from wgsubject" ;
             $objWGSubjectSet=$objWGSubjectManager->RetrieveWGSubjectSet($SQuery);
             $numrecordSub=$objWGSubjectSet->GetCount();
             
             if($REQUEST_METHOD=="POST")
             {
                $objADDTutorialManager=new clsAddTutorialManager();
                $objADDTutorial=new clsWGAddTutorial();    
                $objADDTutorialSet= new clsWGAddTutorialSet();
                
                $objADDTutorial->setWGUserId(124);                
                $objADDTutorial->setWGUserType('admin');
                $objADDTutorial->setWGCategory($sltCategory);
                $objADDTutorial->setWGSubCategory($sltSubCategoryName);                             
                $objADDTutorial->setWGSubject($sltSubject);
                $objADDTutorial->setWGTitle($txtTitle);   
                $objADDTutorial->setWGFileName($fileUpload);
                $objADDTutorial->setWGFileType($RadFileType);
                $objADDTutorial->setWGDiscription($textAreaBody);
                $AddResult=$objADDTutorialManager->SaveTutorial($objADDTutorial);
                if($AddResult!=0)
                {
                    echo "successfully uploaded";
                }
                    
             }	
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
                <td class="font-face"><h1 class="heading" >Welcome To World Gyan</h1></td>
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
        			<div class="post">
                    <form name="frmAddTutorial" method="POST">
                        <h2 class="title" align="center">Add Tutorial</h2>
                        <table  align="center"  width="90%" cellpadding="5" cellspacing="0" border="0" class="PageTextBox">
                        	<tr>
                                    <td width="30%">&nbsp;</td>
                                    <td width="30%"></td>
                                    <td width="5%">&nbsp;</td>
                                    <td width="25%">&nbsp;</td>                                        
                            </tr>
                            <tr>
                            <td colspan="0">
                            Category :
                               </td>
                               <td>
                               <select class="sltBox" name="sltCategory" id="sltCategoryId">
                                    <option value="NA" >&lt;Category&gt;</option>
                                    <option >Science and Technology</option>
                                    <option >Sprituality</option>
                                    <option >History</option>
                                    <option >Helth</option>
                                    <option >Geology</option>
                                    <option >Others</option>
                                    
                                </select>
                                </td>
                            </tr>
                            <tr>
                               <td colspan="0">
                                 Sub Category:
                               </td>
                               <td>
                                <select  class="sltBox" name="sltSubCategoryName" id="sltSubCategoryNameId">
                                    <option value="NA" >&lt;Sub Category&gt;</option>
                                    <?
                                    
                                    for($i=0;$i<$numrecord;$i++)
                                    {
                                         $objWGSubCategory=new clsWGSubCategory();
                                         $objWGSubCategory=$objWGSubCategorySet->GetItem($i);                            
                                         $SubCategoryName=$objWGSubCategory->getWGSubCategoryName();
                                         $SubCategoryID=$objWGSubCategory->getWGSubCategoryID();
                                         //if($SubCategoryName==$sltSubCategoryName) 
                                          //echo "<option value=\"$SubCategoryID\" selected>$i ,$SubCategoryName</option>";                                                       
                                         //else
                                          echo "<option value=\"$SubCategoryName\">$SubCategoryName</option>";                                 }
                                    ?>
                                    
                                </select>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="0">
                                 Subject:
                               </td>
                               <td>
                                <select  class="sltBox" name="sltSubject" id="sltSubjectID">
                                    <option value="NA" >&lt;Subject&gt;</option>
                                    <?                                    
                                    for($i=0;$i<$numrecordSub;$i++)
                                    {
                                         $objWGSubject=new clsWGSubject();
                                         $objWGSubject=$objWGSubjectSet->GetItem($i);                            
                                         $WGSubId=$objWGSubject->getWGSubjectId();
                                         $WGSubName=$objWGSubject->getWGSubjectName();
                                         //if($SubCategoryName==$sltSubCategoryName) 
                                          //echo "<option value=\"$SubCategoryID\" selected>$i ,$SubCategoryName</option>";                                                       
                                         //else
                                          echo "<option value=\"$WGSubName\">$WGSubName</option>";                                 }
                                    ?>
                                    
                                </select>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="0">
                                 Title:
                               </td>
                               <td>
                                <input type="text" class="PageTextBox" name="txtTitle" id="txtTitleId" />
                               </td>
                           </tr>
                            <tr>
                               <td colspan="0">
                                 Type:
                               </td>
                               <td>
                                <input type="radio" value="File" name="RadFileType" />File
                                <input type="radio" value="text" name="RadFileType" />text
                               </td>
                           </tr>
                           <div>
                           <tr>
                               <td colspan="0">
                                 Upload File:
                               </td>
                               <td>
                                <input  class="Txt" type="file" name="fileUpload" id="fileUploadId" /><p>Only <font color="Blue">pdf,doc,docx,xl,jpeg</font> is allow</p>
                               </td>
                           </tr>
                           </div>
                           <div>
                           <tr>
                               <td colspan="0">
                                 Sub Tilte:
                               </td>
                               <td>
                                <input   class="PageTextBox" type="text"  />
                               </td>
                           </tr>
                           <tr>
                               <td colspan="0">
                                 Theory :
                               </td>
                               <td>
                                <textarea class="txtTextBox" style="resize: vertical; max-height: 300px;" name="textAreaBody" id="textAreaBodyId" ></textarea>
                                
                               </td>
                           </tr>
                           </div>
                           <tr>
                               <td colspan="3" align="center">
                                <input type="button" name="BtnAdd" id="BtnAddId" onclick="save()" class="addButton" value="Add" />
                                            
                               </td>
                           </tr>
                           
                            
                        </table>
                       <!-- <div class="PDF">10Storage Class
                        Note:-[when browser will not Support then File automatically download
                                  for next chapter/lession click on next]
                           <object data="ShomPrasadDas/BE2105_2084.pdf#page=2" type="application/pdf" width="600" height="650">
                           
                               C Programming : <a href="ShomPrasadDas/BE2105_2084.pdf">ShomPrasadDas/BE2105_2084.pdf</a>

                           </object>
                        </div>-->
                        </form>
        			</div>
        		 <div style="clear: both;">&nbsp;</div>
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
	function save()
    {
    //Save=document.getElementById('BtnAddId').value;
    window.document.frmAddTutorial.submit();
    alert("ok")

    }	
	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////
    
</script>
</html>