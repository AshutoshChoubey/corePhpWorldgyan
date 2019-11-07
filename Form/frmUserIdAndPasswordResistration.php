<?php
@session_start();

require_once ($DOCUMENT_ROOT."/class/clsPMSLoginManager.php");

if($REQUEST_METHOD=="POST")
{
      $objPMSLoginSet=new clsPMSLoginSet();
      $objPMSLogin=new clsPMSLogin();
      $objBscSpecificationManager=new clsPMSLoginManager();
      //echo $sesUserType;
      //echo $SelUserType;
 if($sesUserType!='Admin')
   { 
     if($SelUserType=='Admin')
     {
       echo "<script language=\"javascript\">alert(\"only Admin can select Admin User type of Employee  \")
       </script>";
         
     }    
           
    
     else
     {       
            
                 $objPMSLogin->setPMSEmployeeId($sesEmpID);
                 $objPMSLogin->setPMSEmployeeUserName($SesEmployeeName);
                 $objPMSLogin->setPMSUserType($SelUserType);
                 $objPMSLogin->setPMSPassword($txtPassword);
                 
                 
                 
                 
                 
            if($sesEmpID=='')
            {
                echo "<script>alert('Please Register Your Personal Detail');</script>";
                
            }
            else{
            $result=$objBscSpecificationManager->savePMSLogin($objPMSLogin);
            }
            
            
            
            
            if($result>=1)
                {
                    echo "<script>alert('Success');</script>";
                    echo "<script language=\"javascript\">location.href=\"loginHome.php\"</script>";
                    //session_destroy();
         
                }
                  else
                  {
                    echo "<script>alert('error');</script>";
                  }
                  
            
        }
    
   
    }
    else
    {
    
                 $objPMSLogin->setPMSEmployeeId($sesEmpID);
                 $objPMSLogin->setPMSEmployeeUserName($SesEmployeeName);
                 $objPMSLogin->setPMSUserType($SelUserType);
                 $objPMSLogin->setPMSPassword($txtPassword);
                 
                 
                 
                 
                 
            if($sesEmpID=='')
            {
                echo "<script>alert('Please Register Your Personal Detail');</script>";
                
            }
            else{
            $result=$objBscSpecificationManager->savePMSLogin($objPMSLogin);
            }
            
            
            
            
            if($result>=1)
                {
                    echo "<script>alert('You are successfully Resistered');</script>";
                    echo "<script language=\"javascript\">location.href=\"loginHome.php\"</script>";
                    //session_destroy();
         
                }
                  else
                  {
                    echo "<script>alert('error');</script>";
                  }
                  
            
        } 
    
}
      
    


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
                <td align="center" ><div class="BHL"><a href="" class="tbar" style="text-decoration: none;"><b></b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="location.href='loginHome.php'" class="tbar" style="text-decoration: none;"><b>Home</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="location.href='LogOutPage.php'" class="tbar" style="text-decoration: none;"><b>Logout</b></a></div></td>
                 <td bgcolor=#032D5D>&nbsp;</td>
            </tr>
            <tr><td colspan="3" class="font-face" ><h1 align="center" class="heading" >User ID and Password Resistration</h1></td></tr>
        </table>
    </div>
 
  <div>  
    <table width="100%"   class="centerTable"  cellspan=4>
    
            <tr>
                <td width="18%" valign="top">   
                    <table bgcolor=#FFFFFF style="height: 500px;" border="0" style="border-color: green;">
                          <tr><td valign="top" style="height: 30px;"><input type="button" value="UserID and Password Resistration" class="SelectedButton"  onclick="location.href='frmUserIdAndPasswordResistration.php'" /></td><td style="width: 5px;"></td><td rowspan="6"class="centerLine"></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="View Detail" class="clsbtnLeft" onclick="location.href='ViewDetail.php'" onclick="changeback()"/></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Update Qualification Detail" class="clsbtnLeft" onclick="location.href='frmUpdateQualificationDetail.php'" onclick="changeback()"/></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Update Personal Detail" class="clsbtnLeft" onclick="location.href='UpdateDetail.php'" /></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Delete" class="clsbtnLeft" onclick="location.href='Delete.php'" />
            <tr><td valign="top"><input type="button" value="Search" class="clsbtnLeft"onclick="location.href='frmSearch.php'"/></td></tr>
            
                     </table>
                </td>
                
                 <td valign="top"width=80% style="background-color:  #BBD4F2;">
                
                 <form  method="POST" name="FormLogin">
                     <table border="0" width=100% cellspacing="" cellpading="" valign="top"  >
                         <tr>
                             <td style="background-color: #BBD4F2;">
                             
                                
                              <table  id="otherHigherQuaTable" cellpadding="15">
                                 <caption style="margin-bottom: 20px;">Set User Name And Password</caption>
                                 <tr>
                                             <td>User ID</td>
                                             <td>:</td>
                                             <td><?php echo $sesEmpID;?></td>
                                     </tr>
                                     <tr>
                                             <td>User Name</td>
                                             <td>:</td>
                                             <td><?php echo $SesEmployeeName;?></td>
                                     </tr>
                                     <tr>
                                             <td>Password</td>
                                             <td>:</td>
                                             <td> <input class="b" type="password" id="PasswordID" name="txtPassword" /></td>
                                     </tr>
                                     <tr>
                                             <td>Confirm Password </td>
                                             <td>:</td>
                                             <td> <input class="b" type="password" id="ConfirmPasswordID" name="txtConfirmPasswordID" /></td>
                                     </tr>
                                     <tr>
                                             <td>UserType </td>
                                             <td>:</td>
                                             <td> <select id="UserType" name="SelUserType" > <option value="User">User</option>
                                             <option value="Admin">Admin</option>
                                            
                                             </select></td>
                                     </tr>
                                    
                             </table>
                         <table border="0"  width=100% >
                              <tr>
                                 <td  align="center"bgcolor=" #BBD4F2"> <input type="button" class="stdBtn" onclick="check()" value="submit"/>&nbsp;&nbsp;<input type="button" class="stdBtn" onclick="clr()" value="clear"/>&nbsp;&nbsp; </td>
                               </tr> 
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
<script type="text/javascript">
    function check()
    {
        var password=document.getElementById('PasswordID').value;
        var objpassword=document.getElementById(PasswordID);
        if(password=='')
        { 
            alert("please enter your password");
            objpassword.focus();
            objpassword.selected;
            return false;
            
        }
        var trimpassword=password.trim();
        
        var confirmPassword=document.getElementById('ConfirmPasswordID').value
        var objconfirmPassword=document.getElementById('ConfirmPasswordID')
        if(confirmPassword=='')
        { 
            alert("please Confirm your password");
            objconfirmPassword.focus();
            objconfirmPassword.selected;
            return false;
            
        }
        var trimconfirmPassword=confirmPassword.trim();
        
        if(confirmPassword!=password)
        {
            alert("password not match");
            return false;
        }
        var UseType1=document.getElementById('UserType');
        if(UseType1=='na')
        {
            alert("Please select  user type");
            return false;
        }
        window.history.forward();
        window.document.FormLogin.submit();
        
        
    }
    function clr()
        {
            document.FormLogin.reset();
        }
</script>

</html>

