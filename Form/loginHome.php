<?php


@session_start();

if(!isset($sesEmployeeID)||!isset($sesEmployeeUserName)||!isset($sesUserType)||!isset($sesPassword))
{
    session_unregister('sesEmployeeID','sesEmployeeUserName','sesUserType','sesPassword');
     echo "<script language=\"javascript\">alert(\"Session Expired...Please Relogin\")</script>";
     echo "<script language=\"javascript\">location.href=\"Home.php\"</script>";
     exit;
    
}

?>
<html>
<head>
<link rel='stylesheet' href='../css/formStyle.css'/>
    <style>
    .BHL{

        border-radius: 5px;
        background-color:#4A7AB8;
        padding:5px;

    }
    .Footer{
        background-color: #4A7AB8;
        height: 30px;
        border-radius: 10px 10px 0px 0px;
    }
    .header{
        background-color: #032D5D;
    }
    .clsbtn{
            width: 100px;
            background-color: #FFFFFD;
            color: #3A659A;
            font-weight: bold;
            border:1px solid blue;
            border-radius: 8px 8px 0px 0px;
    }
    .tbar{
        color:white;
    }
    .clsbtnLeft{
            width: 200px;
            height: 30px;
            font-size: 11px;
            background-color: #5B8AC0;
            color: white;
            font-weight: bold;
            text-align: left;
            border-radius: 0px 8px 8px 0px;
    }
   @font-face {
    font-family: myFirstFont;
    src: url(PRISTINA.TTF);
    font-weight: bold;
}
.heading{
     font-family: myFirstFont;
     color: white;
     font-size: 40px;
}
.LabelText{
    color: #FC6E1A;
}
.DIVTEXT{
     height: 60px;
    border-radius: 5px 5px 0px 0px;
    border: 1px solid gray;
    background-color: #F5F5F5;
}
.FORMSTYLE{
    height: 480px;
}


</style>
</head>

<body>
    <div class="header">
        <table width=100% border=0>
            <tr  style="height: 30px;">
                <td bgcolor=#032D5D>&nbsp;</td>
                <td align="center" ><div class="BHL"><a onclick="location.href='ForgetPassword.php'" class="tbar" style="text-decoration: none;"><b>Reset password</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="location.href='loginHome.php'" class="tbar" style="text-decoration: none;"><b>Refresh</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="location.href='LogOutPage.php'" class="tbar" style="text-decoration: none;"><b>Logout</b></a></div></td>
                <td bgcolor=#032D5D>&nbsp;</td>
            </tr>
            <tr><td colspan="3" class="font-face" ><h1 align="center" class="heading" >Personal Managment System</h1></td></tr>
        </table>

    </div>
<form class="FORMSTYLE" method="POST">
    <table width="100%"  border=0 style="height: 300px;">
    
    <tr><td width="18%" valign="top">
    <table bgcolor=#FFFFFF style="height: 500px;" border=0>
        <tr><td valign="top" style="height: 30px;"><input type="button" value="Add personal Detail" class="clsbtnLeft" onclick="location.href='frmAddPersonalDetailLogin.php'" /></td><td style="width: 5px;"></td><td rowspan="7"class="centerLine"></td></tr>
        <tr><td valign="top" style="height: 30px;"><input type="button" value="View Detail" class="clsbtnLeft" onclick="location.href='ViewDetail.php'" onclick="changeback()"/></td></tr>
        <tr><td valign="top" style="height: 30px;"><input type="button" value="Update Personal Detail" class="clsbtnLeft" onclick="location.href='UpdateDetail.php'" onclick="changeback()"/></td></tr>
        <tr><td valign="top" style="height: 30px;"><input type="button" value="Update Qualification Detail" class="clsbtnLeft" onclick="location.href='frmUpdateQualificationDetail.php'" onclick="changeback()"/></td></tr>
        <tr><td valign="top" style="height: 30px;"><input type="button" value="Delete" class="clsbtnLeft" onclick="location.href='Delete.php'" />
        <tr><td valign="top"><input type="button" value="Search" class="clsbtnLeft" onclick="location.href='frmSearch.php'"/></td></tr>
         
    
         
       
    </table></td>
    
    <td valign="top">
    <div style="background-color: #FAF9F9;">
        <table width="100%"  border=0 >
            <tr><td style="height: 10px;"></td></tr>
        
            <tr>
                 <td class="DIVTEXT" valign="top"><label class="LabelText">Add Record</label><br /><label style="color: gray; font-size: 12px;">To Add information</label></td>
            </tr>
            <tr><td style="height: 5px;"></td></tr>
            <tr>
                <td class="DIVTEXT" valign="top"><label class="LabelText">Update Record</label><br /><label style="color: gray; font-size: 12px;">To Update Information </label></td>
            </tr>
            <tr><td style="height: 5px;"></td></tr>
            <tr>
                
            <tr>
                <td class="DIVTEXT" valign="top"><label class="LabelText">Search</label><br /><label style="color: gray; font-size: 12px;">To Search Personal Information</label></td>
            </tr>
             <tr>
                <td class="DIVTEXT" valign="top"><label class="LabelText">Delete</label><br /><label style="color: gray; font-size: 12px;">To Delete Information</label></td>
            </tr>
        
        </table>
    </div>
        
    </td>
    </tr>
        
        
    </table>
</form>  
<table width=100%>
    
    <tr style="height: 30px;">
        
        <td align="right"><div class="Footer"><label style="color: white;">This Site Maintained by</label> NIST Technology Consulting Service&nbsp;</div></td>
    </tr>
    

</table>
    
  
    
</body>

</html>