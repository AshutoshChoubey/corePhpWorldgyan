<?php
@session_start();
$time= new DateTime();
$currentLoginTime=date('s');
if(!$current_login_time>60)
{
    session_unregister('sesEmployeeID','sesEmployeeUserName','sesUserType','sesPassword');
     echo "<script language=\"javascript\">alert(\"Session Expired...Please Relogin\")</script>";
     echo "<script language=\"javascript\">location.href=\"UpdateDetail.php\"</script>";
}
if(!isset($sesEmployeeID)||!isset($sesEmployeeUserName)||!isset($sesUserType)||!isset($sesPassword))
{
    session_unregister('sesEmployeeID','sesEmployeeUserName','sesUserType','sesPassword');
     echo "<script language=\"javascript\">alert(\"Session Expired...Please Relogin\")</script>";
     echo "<script language=\"javascript\">location.href=\"UpdateDetail.php\"</script>";
    
}

require_once($DOCUMENT_ROOT."/class/clsQualificationDetailManager.php");
require_once($DOCUMENT_ROOT."/class/clspersonalinformationmanager.php");
require_once($DOCUMENT_ROOT."/class/clsPMSLoginManager.php");
if($REQUEST_METHOD=='POST'&& $hidPostType==1)
{
   if($sesUserType=='Admin')
   { 
     
        $squery="select * from personalinformation where piemployeeid=$txtEmp";
        
        $objpersonalinformationManager=new clspersonalinformationManager();
        $result=$objpersonalinformationManager->retrievepersonalinformation($squery);
        
        if($result==null)
        {
            echo "<script language=\"javascript\">alert(\"invalid Employee ID...... Please Enter Correct Employee ID\")</script>"; 
            
        }
        else
        {
            
            $SesEmployeeIDDelete=$result->getPIEmployeeId();
            $SesEmployeeNameDelete=$result->getPIEmployeeName();
            $SesEmpIDDelete=$txtEmp;
            //echo $SesEmployeeIDDelete.$SesEmpIDDelete.$SesEmployeeNameDelete;
            session_register('SesEmpIDDelete','SesEmployeeNameDelete');
             
             echo "<script language=\"javascript\">var conf=confirm(\"Do you want to Delete?\");if(conf){location.href=\"DeleteConform.php\"}</script>";
            
             
        }
    }
    else{
        echo "<script language=\"javascript\">alert(\"only Admin can delete the data of Employee \")</script>";
    }
}
        
       

?>
<html>
<head>
    <script language="javascript" src="../JavaScript/DeleteJS.js"></script>
<link rel='stylesheet' href='../css/formStyle.css'/>

</style>
</head>

<body>
    <div class="header">
        <table width=100% border=0>
            <tr  style="height: 30px;">
                <td bgcolor=#032D5D>&nbsp;</td>
               <td align="center" ><div class="BHL"><a href="" class="tbar" style="text-decoration: none;"><b></b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="location.href='loginHome.php'" class="tbar" style="text-decoration: none;"><b>Home</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="location.href='LogOutPage.php'" class="tbar" style="text-decoration: none;"><b>Logout</b></a></div></td>
                <td bgcolor=#032D5D>&nbsp;</td>
            </tr>
            <tr><td colspan="3" class="font-face" ><h1 align="center" class="heading" >Delete</h1></td></tr>
        </table>

    </div>
<form name="FORMSTYLE" class="FORMSTYLE" method="POST">
<input type="hidden" name="hidPostType" id="hidPostTypeID" />
    <table width="100%"  border="0" style="height: 300px;">
    
        <tr><td width="18%" valign="top">
        <table bgcolor=#FFFFFF style="height: 500px;" border="0">
            
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Add personal Detail" class="clsbtnLeft"  onclick="location.href='frmAddPersonalDetailLogin.php'" /></td><td style="width: 5px;"></td><td rowspan="6"class="centerLine"></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="View Detail" class="clsbtnLeft" onclick="location.href='ViewDetail.php'" onclick="changeback()"/></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Update Qualification Detail" class="clsbtnLeft" onclick="location.href='frmUpdateQualificationDetail.php'" onclick="changeback()"/></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Update Personal Detail" class="clsbtnLeft" onclick="location.href='UpdateDetail.php'" /></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Delete"  class="SelectedButton" onclick="location.href='Delete.php'" />
            <tr><td valign="top"><input type="button" value="Search" class="clsbtnLeft"onclick="location.href='frmSearch.php'"/></td></tr>
            
        </table></td>
        
        <td valign="top">
        <div style="background-color: #BBD4F2;">
                <table width="100%"  border="0">
                    <tr><td></td></tr>
                    <tr>
                        <td width="20%">&nbsp;</td>
                        
                        <td width="20%" align="center"><label><i><b>Enter Employee id</b></i></label></td>
                        <td> <input class="TextBoxStyle" type="text" name="txtEmp" id="txtEmpID"size="30"/></td>
                        <td>&nbsp;</td>
                    </tr>
             
                </table>
                
                <table width="100%"  border=0 style="display: ;" id="tabSearch">
                    <tr><td style="height: 10px;"></td></tr>
                    
                  <tr><td align="center"><input type="button" value="Delete" class="stdBtn" onclick="funsearch();" /></td>   </tr>
                    
                                
                </table>
              
            
            
        </div>
            
      
        </tr>
        
            
            
        </table>
        <table width=100% style="vertical-align: bottom;">
        
        <tr style="height: 30px;">
            
            <td align="right"><div class="Footer"><label style="color: white;">This Site Maintained by</label> NIST Technology Consulting Service&nbsp;</div></td>
        </tr>
        

</table>
</form>  


  
    
</body>

</html>