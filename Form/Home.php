<?php
session_destroy();
@session_start();

require_once($DOCUMENT_ROOT."/class/clsPMSLoginManager.php");
if($REQUEST_METHOD=="POST")
{
   $objPMSLoginSet=new clsPMSLoginSet();
   $objPMSLogin=new clsPMSLogin();
    $objBscSpecificationManager=new clsPMSLoginManager();
    $squery="select *from personalmanagementsystemlogin where pmsemployeeid=$txtUserID";
     $objPMSLogin=$objBscSpecificationManager->retrivePMSLogin($squery);
     
      if($objPMSLogin!=null)
{     
          $sesEmployeeID= $objPMSLogin->getPMSEmployeeId();
          $sesEmployeeUserName=$objPMSLogin->getPMSEmployeeUserName();
          $sesUserType=$objPMSLogin->getPMSUserType();
          $sesPassword=$objPMSLogin->getPMSPassword();
          
                    session_register('sesEmployeeID','sesEmployeeUserName','sesUserType','sesPassword');
    
    if($sesEmployeeID==$txtUserID&& $sesPassword==$txtPassword)
    { 
                echo "<script>alert('Successfully logged in');</script>";
                echo "<script language=\"javascript\">location.href=\"loginHome.php\"</script>";
    }
    else{
        echo "<script>alert('Login Fail...Please Enter correct User ID and Password');</script>";
       
    }
}
else{
    echo "<script>alert('Login Fail...Please Enter correct User ID and Password');</script>";
    
}

}
//$txtUserName
?>
<html>
<head>

    <link rel='stylesheet' href='../css/formStyle.css'/>
</head>

<body>
    <div class="header">
        <table width=100% border=0>
           <div> <tr  style="height: 30px;">
                <td bgcolor=#032D5D>&nbsp;</td>
                <td align="center" ><div class="BHL"><a href="" class="tbar" style="text-decoration: none;"><b></b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="tbar" style="text-decoration: none;"><b>Refresh</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='ForgetPassword.php' class="tbar" style="text-decoration: none;"></a></div></td>
                <td bgcolor=#032D5D>&nbsp;</td>
            </tr></div>
            <tr><td colspan="3" class="font-face" ><h1 align="center" class="heading" >Online information System</h1></td>
            </tr>
        </table>
        <table width="100%"  style="padding-left:5px; float:right; padding-right:20px; background-color: #032D5D;" cellpadding="0px" border="0">
        	<tr>
		<td > 
      <form name="FormLogin" method="POST">
			<table width="40%" style="padding-left:5px; float:right; padding-right:20px;" cellpadding="0px" border="0">
				<tr>
					<td class="lebel" align="center"> 
						User ID :								
						<input type="textbox" name="txtUserID" id="UserID" value="<?php echo $txtUserID ?>" class="PageTextBox"/>
					</td>
					<td class="lebel"  align="center"> 
						Password :	
						<input type="Password" name="txtPassword" id="PasswordID" value="<?php echo $txtPassword ?>" class="PageTextBox"/>
					</td>
					<td  align="center">
						&nbsp;
						<input type="button"  value="Login" class="PageTextBox" onclick="Login()"/>
                      
					</td>
				</tr>                           
			</table>
            </form>
		</td>
	</tr>
    </table>

    </div>

<input type="hidden" name="hidPostType" id="hidPostTypeID" />
    <table width="100%"  border=0 style="height: 300px;">
    
    <tr><td width="18%" valign="top">
    <table bgcolor=#FFFFFF style="height: 500px;" border=0>
        
        <tr><td valign="top" class="lefta"><input type="button" value="Registration" class="clsbtnLeft"  onclick="location.href='AddPersonalDetail.php'" /><td style="width: 5px;"></td><td rowspan="3"style="width: 10px;height: 100%;background-color: #E3EFFB;"></td></tr>
         <tr><td valign="top"><input type="button" value="Search" class="clsbtnLeft" onclick="location.href='Search.php'"/></td></tr>
        
          
          
        
      
       
    </table></td>
    
    
    
        
    </td>
    </tr>
        
        
    </table>
 
<table width=100%>
    
    <tr style="height: 30px;">
        
        <td align="right"><div class="Footer"><label style="color: white;">This Site Maintained by</label> NIST Technology Consulting Service&nbsp;</div></td>
    </tr>
    

</table>
    
  
    
</body>
<script type="text/javascript">
    function Login()
    {
        var UserId=document.getElementById('UserID').value;
        var objUserID=document.getElementById('UserID');
        if(UserId=='')
        {
            alert("please enter your User ID");
            objUserID.focus();
            objUserID.selected;
            return false;
        }
         var tringgg=0;
        for(i=0;i<UserId.length;i++)
          { 
           
            if(!(UserId.charCodeAt(i)>=48 && UserId.charCodeAt(i)<=57))
            {
                tringgg=1;
            }
            }
            if(tringgg==1)
            {
              alert("invalid User ID... Only Number is allow for User ID");
              return false;  
            }
        var password=document.getElementById('PasswordID').value;
        var objpassword=document.getElementById(PasswordID);
        if(password=='')
        { 
            alert("please enter your password");
            objpassword.focus();
            objpassword.selected;
            return false;
            
        }
       document.getElementById("hidPostTypeID").value=1;
        window.document.FormLogin.submit();
        
        
    }
</script>
</html>