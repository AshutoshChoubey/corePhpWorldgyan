<?php
@session_start();

 
session_unset();
@session_destroy();

        
    
   

      
     


?>
<html>
<head>
<style>
.logout a
{ font-size: 12px;
  font-family:verdana;
  color: #239ad6;
  text-decoration: none;
  padding-right: 10px;   
} 

.logout a:hover
{ 
	font-size: 12px;
	font-family:verdana;
	color: #ff7200;
	text-decoration: none;
}
.logged_out
{
	text-align:center;
	color:#ff7200;
	font-family:verdana;
	font-size: 17px;
	font-weight:bold;
 }	
 .footer{
	text-align:center;
	color:#009512;
	font-family:verdana;
	font-size: 11px;
	font-style:normal;
	
}




</style>
<link rel="stylesheet" href="D/PHPApp/new php/css/LogOutCSS.css" />

	<title>Untitled 2</title>
</head>

<body>
<table border="0" cellpadding="0" cellspacing="0" width="950px" align="center" >
    	   <tr height="32px">
    			<td colspan=""><p class="topmenu"></p></td>
    		</tr>
    		<tr >
    			<td>
    				<table style="height:142px" width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#239ad6">
    					<tr>
    						<td  style="width:620px;" rowspan="3" style="paddin-bottom:0px;" align="left">
    							
    						</td>
    						<td style="width:330px;" align="center" valign="bottom" >
    							
    						</td>
    					</tr>
    				</table>				
    			</td>
    		</tr>
    		<tr   height="11px" >
    			<td colspan="2" >
    			</td>
    		</tr>
    		<tr height="100px">
    			<td colspan="2" class="logged_out">
                    You have been logged out!! </br>
                    Thanks for Using !!
                    <hr  width="500px">	
    			</td>
    			<tr height="50px">
    			<td colspan="2" class="logout" align="center" valign="top">
                    <a href="Home.php" >Relogin</a></br></br>
    			</td>
    		</tr>
    		<tr   height="11px" >
    			<td colspan="2">
    			</td>
    		</tr>
    		<tr  height="32px">
    			<td colspan="2"  align="center"><p class="footer">This Site Maintained by NIST Technology Consulting Services </p>
    			</td>
    		</tr>
    	</table>



</body>

</html>