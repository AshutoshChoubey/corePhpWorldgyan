<?php
@session_start();

require_once ($DOCUMENT_ROOT."/class/clsPMSLoginManager.php");

if($REQUEST_METHOD=="POST"&& $hidPostType==1)
{
      $objPMSLoginSet=new clsPMSLoginSet();
      $objPMSLogin=new clsPMSLogin();
      $objPMSLoginManager=new clsPMSLoginManager();
            
     
           
            $sQuery="select * from personalmanagementsystemlogin   where pmsemployeeid=$txtUserID";
    
     if($sesUserType=='Admin')  
      { 
    
           $objPMSLogin=$objPMSLoginManager->retrivePMSLogin($sQuery);
          if($objPMSLogin=='')
          {
            echo "<script>alert('Please Enter valid User Id');</script>";
            echo "<script language=\"javascript\">location.href=\"ForgetPassword.php\"</script>"; 
          }
           else
          {
           $UserID=$objPMSLogin->getPMSEmployeeId();
           
         
           $EmployeeUserName=$objPMSLogin->getPMSEmployeeUserName();
           $UserType=$objPMSLogin->getPMSUserType();
           $Password=$objPMSLogin->getPMSPassword();
         }
    
    }
    else 
    {
        echo "<script>alert('Only Admin can Reset the Password');</script>";
            echo "<script language=\"javascript\">location.href=\"ForgetPassword.php\"</script>"; 
    }
    
    
          
            
        }
        
  if($REQUEST_METHOD=="POST"&& $hidPostType==2)
{
    if($sesUserType=='Admin')
     {
      $objPMSLoginSet=new clsPMSLoginSet();
      $objPMSLogin=new clsPMSLogin();
      $objPMSLoginManager=new clsPMSLoginManager();
            
           
           
            
         $objPMSLogin->setPMSEmployeeId($txtUserID);
         //$objPMSLogin->setPMSEmployeeUserName($SesEmployeeName);
         //$objPMSLogin->setPMSUserType($SelUserType);
         $objPMSLogin->setPMSPassword($txtPassword);
    
    $result=$objPMSLoginManager->UpdatePMSLogin($objPMSLogin);
     if($result>=1)
        {
            echo "<script>alert('Successfully Reset your Password');</script>";
            echo "<script language=\"javascript\">location.href=\"loginHome.php\"</script>";
 
        }
          else
          {
            echo "<script>alert('error');</script>";
          }
          
            
        }
        else
        {
          echo "<script>alert('Only Admin can Reset Your Password ..Please contact Administrator');</script>";
            echo "<script language=\"javascript\">location.href=\"loginHome.php\"</script>";  
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
            <tr><td colspan="3" class="font-face" ><h1 align="center" class="heading" >Reset  Password</h1></td></tr>
        </table>
    </div>
 
  <div>  
    <table width="100%"   class="centerTable"  cellspan=4>
    
            <tr>
                <td width="18%" valign="top">   
                    <table bgcolor=#FFFFFF style="height: 500px;" border="0" style="border-color: green;">
                           <tr><td valign="top" style="height: 30px;"><input type="button" value="Forget Password" class="SelectedButton"  onclick="location.href='ForgetPassword.php'" /></td><td style="width: 5px;"></td><td rowspan="6"class="centerLine"></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="View Detail" class="clsbtnLeft" onclick="location.href='ViewDetail.php'" onclick="changeback()"/></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Update Qualification Detail" class="clsbtnLeft" onclick="location.href='frmUpdateQualificationDetail.php'" onclick="changeback()"/></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Update Personal Detail" class="clsbtnLeft" onclick="location.href='UpdateDetail.php'" /></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Delete" class="clsbtnLeft" onclick="location.href='Delete.php'" />
            <tr><td valign="top"><input type="button" value="Search" class="clsbtnLeft"onclick="location.href='frmSearch.php'"/></td></tr>
            
                     </table>
                </td>
                
                 <td valign="top"width=80% style="background-color:  #BBD4F2;">
                
                 <form  method="POST" name="FormLogin">
                 <input type="hidden" name="hidPostType" id="hidPostTypeID" />
                     <table border="0" width=100% cellspacing="" cellpading="" valign="top"  >
                         <tr>
                             <td style="background-color: #BBD4F2;">
                             
                                
                              <table  id="otherHigherQuaTable" cellpadding="15">
                                 <caption style="margin-bottom: 20px;">Pasdword Reset</caption>
                                 
                                 <tr>
                                             <td>Enter  User ID</td>
                                             <td>:</td>
                                             <td><input type="text" name="txtUserID" id="UserID" value="<?php echo $UserID;?>"  class="b" /></td>
                                           <tr>  <td  align="center"bgcolor=" #BBD4F2"> <input type="button" class="wbutton" onclick="check()" value="submit"/></td></tr>
                                     </tr>
                                     <?php
                                     if($REQUEST_METHOD=="POST"&& $hidPostType==1)
                                     
                                      {?>
                                     <tr>
                                             <td>User Name</td>
                                             <td>:</td>
                                             <td><?php echo $EmployeeUserName;?></td>
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
                                     
                             </table>
                         <table border="0"  width=100% >
                              <tr>
                                 <td  align="center"bgcolor=" #BBD4F2"> <input type="button" class="wbutton" onclick="check1()" value="submit"/>&nbsp;&nbsp;<input type="button" class="wbutton" onclick="clr()" value="clear"/>&nbsp;&nbsp; </td>
                               </tr> 
                      </table>
                       <?php }?>
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
        var eideid1=document.getElementById('UserID').value;
         var empIDTrim=eideid1.trim();
        if(eideid1=='' || empIDTrim==0)
        {
            alert("please Enter Employee Id");
            return false;
            
        }
        var tringgg=0;
        for(i=0;i<empIDTrim.length;i++)
          { 
           
            if(!(empIDTrim.charCodeAt(i)>=48 && empIDTrim.charCodeAt(i)<=57))
            {
                tringgg=1;
            }
            }
            if(tringgg==1)
            {
              alert("invalid Employee Id... Only Number is allow for Employee Id");
              return false;  
            }
       document.getElementById("hidPostTypeID").value=1;
        window.document.FormLogin.submit();
        
       
        
    }
    function check1()
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
        document.getElementById("hidPostTypeID").value=2;
        window.document.FormLogin.submit();
        
    }
function clr()
        {
            document.FormLogin.reset();
        }
</script>

</html>