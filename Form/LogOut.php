<?php
@session_start();

 
session_unset();
@session_destroy();

        
    
   

      
     


?>
<html>
<head>
	


<link rel='stylesheet' href='../css/formStyle.css'/>
<script language="javascript" src="../JavaScript/QualificationDetail.js"></script>
</head>

<body>
 <div class="header">
        <table width=100% border=0>
            <tr  class="lefta">
                <td bgcolor=#032D5D>&nbsp;</td>
                <td align="center" ><div class="BHL"><a href="" class="tbar" ><b></b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="location.href='Home.php'" class="tbar" ><b>Login Page</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="tbar" ><b></b></a></div></td>
                <td bgcolor=#032D5D>&nbsp;</td>
            </tr>
            <tr><td colspan="3" class="font-face" ><h1 align="center" class="heading" >Personal Management System Logout</h1></td></tr>
        </table>
    </div>
 
  <div>  
    <table width="100%"   class="centerTable"  cellspan=4>
    
            <tr>
                <td width="18%" valign="top">   
                    <table bgcolor=#FFFFFF style="height: 500px;" border="0" style="border-color: green;">
                       
                        
                     </table>
                </td>
                
                 <td valign="top"width=80% style="background-color:  #BBD4F2;">
                
                 <form  method="POST" name="FormLogin">
                     <table border="0" width=100% cellspacing="" cellpading="" valign="top"  >
                         <tr>
                             <td style="background-color: #BBD4F2;">
                             
                                
                              <table  id="otherHigherQuaTable" cellpadding="15">
                                 
                                 <tr>
                                             <td><b>Successfully Log Out</b></td>
                                            
                                     </tr>
                                     <tr>
                                           <tr><td valign="top"><input type="button" value="Re login" class="wbutton" onclick="location.href='Home.php'"/></td></tr>
                                     </tr>
                                     
                                    
                             </table>
                         <table border="0"  width=100% >
                             
                      </table>
                 </td>    
                   </tr> 
                </table>
                
                
                            
            </form>
           </td>
        </tr> 
          
    </table>
     



</table>
</div>
<table width=100%>
<tr style="height: 30px;">
        
        <td align="right"><div class="Footer"><label style="color: white;">This Site Maintained by</label> NIST Technology Consulting Service&nbsp;</div></td>
    </tr></table>
</body>

</script>

</html>