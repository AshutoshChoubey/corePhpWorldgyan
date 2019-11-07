<?php
@session_start();

if(!isset($sesEmployeeID)||!isset($sesEmployeeUserName)||!isset($sesUserType)||!isset($sesPassword))
{
    session_unregister('sesEmployeeID','sesEmployeeUserName','sesUserType','sesPassword');
     echo "<script language=\"javascript\">alert(\"Session Expired...Please Relogin\")</script>";
     echo "<script language=\"javascript\">location.href=\"UpdateDetail.php\"</script>";
     exit;
    
}
require_once($DOCUMENT_ROOT."/class/clspersonalinformationmanager.php");

      
            $objpersonalinformationSet=new clspersonalinformationSet();
            $objpersonalinformationManager=new clspersonalinformationManager();
            $objpersonalinformation=new clspersonalinformation();
            $sQuery="select piemployeeid,
                            piemployeename,
                            pifathersname,
                            pinickname,
                            pimaritialstatus,
                            to_char(pimriagedate,'dd/mm/yyyy') as pimriagedate,
                            piemail,
                            piwebsite,
                            pibloodgroup,
                            to_char(pidateofbirth,'dd/mm/yyyy') as pidateofbirth,
                            pisex,
                            pipannumber,
                            pipassportnumber,
                            pipermanentaddress,
                            piresidentialaddress,
                            pialternatemobilenumber,
                            pimobilenumber
            from personalinformation 
            where piemployeeid=$sesEmployeeID";
          $objpersonalinformation=$objpersonalinformationManager -> retrievepersonalinformation($sQuery);
        
          if($objpersonalinformation==null)
           {
            
            echo "<script language=\"javascript\">alert(\"plz enter correct Employee ID\")</script>";
           
            
            }
        
         
        
         else{
                   $Empid=$objpersonalinformation->getPIEmployeeId();
                   $nameR=$objpersonalinformation->getPIEmployeeName();
                   $fnameR=$objpersonalinformation->getPIFathersName();
                   $nickNameR=$objpersonalinformation->getPINickName();
                   $spimaritialstatusR=$objpersonalinformation->getPIMaritialStatus();
                   $spimriagedateR=$objpersonalinformation->getPIMriageDate();
                   $spiemailR=$objpersonalinformation->getPIEmail();
                   $spiwebsiteR=$objpersonalinformation->getPIWebsite();
                   $spibloodgroupR=$objpersonalinformation->getPIBloodGroup();
                   $dtpidateofbirthR=$objpersonalinformation->getPIDateOfBirth();
                   $spisexR=$objpersonalinformation->getPISex();
                   $spipannumberR=$objpersonalinformation->getPIPanNumber();
                   $spipassportnumberR=$objpersonalinformation->getPIPassportNumber();
                   $spipermanentaddressR=$objpersonalinformation->getPIPermanentAddress();
                   $spiresidentiaaddresR=$objpersonalinformation->getPIResidentialAddress();
                   $lPIMobileNumberR=$objpersonalinformation->getPIMobileNumber();
                   $lPIAlternateMobileNumberRS=$objpersonalinformation->getPIAlternateMobileNumber();
          
         }
      
   
   
   if($REQUEST_METHOD=="POST" )
   {
            $objpersonalinformation1=new clspersonalinformation();
            $objpersonalinformationSet=new clspersonalinformationSet();
            $objpersonalinformationManager=new clspersonalinformationManager();
            
            
            $objpersonalinformation1->setPIEmployeeId($Empid);
            $objpersonalinformation1->setPIEmployeeName($name);
            $objpersonalinformation1->setPIFathersName($fname);
            $objpersonalinformation1->setPINickName($nname);
            $objpersonalinformation1->setPIMaritialStatus($ms); 
            $objpersonalinformation1->setPIMriageDate($md);
            $objpersonalinformation1->setPIEmail($email);
            $objpersonalinformation1->setPIWebsite($web);
            $objpersonalinformation1->setPIBloodGroup($bg);
            $objpersonalinformation1->setPIDateOfBirth($dob);
            $objpersonalinformation1->setPISex($sex);
            $objpersonalinformation1->setPIPanNumber($pan);
            $objpersonalinformation1->setPIPassportNumber($pas);
            $objpersonalinformation1->setPIPermanentAddress($pa);
            $objpersonalinformation1->setPIResidentialAddress($ra);
            $objpersonalinformation1->setPIMobileNumber($pn);
            $objpersonalinformation1->setPIAlternateMobileNumber($rpn);
   
    $objpersonalinformation1 = $objpersonalinformationManager -> updatepersonalinformation($objpersonalinformation1);
  if($objpersonalinformation1==1)
  {
     echo "<script language=\"javascript\">alert(\"Successfully updated\")</script>";
     echo "<script language=\"javascript\">location.href=\"UpdateDetail.php\"</script>";
    }
    else{
      echo "<script language=\"javascript\">alert(\"Error\")</script>";  
     
    }
   
   }
   

?>
<html>
<head>
    <link rel='stylesheet' href='../css/formStyle.css'/>
    <script language="javascript" src="../JavaScript/addPersonalJS.js"></script>
</head>
<body>
    <div class="header">
        <table width=100% border=0>
            <tr  class="lefta">
                <td bgcolor=#032D5D>&nbsp;</td>
                <td align="center" ><div class="BHL"><a href="" class="tbar" style="text-decoration: none;"><b></b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="location.href='loginHome.php'" class="tbar" style="text-decoration: none;"><b>Home</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="location.href='LogOutPage.php'" class="tbar" style="text-decoration: none;"><b>Logout</b></a></div></td>
                 <td bgcolor=#032D5D>&nbsp;</td>
            </tr>
            <tr><td colspan="3" class="font-face" ><h1 align="center" class="heading" >Update Personal Detail</h1></td></tr>
        </table>
    </div>
<form  method="POST" name="frmPersonal">
    <table width="100%"  border="0" class="centerTable">
    <tr><td width="18%" valign="top">
    <table bgcolor=#FFFFFF style="height: 500px;" border=0>
        <tr><td valign="top" style="height: 30px;"><input type="button" value="Add personal Detail"class="clsbtnLeft"  onclick="location.href='frmAddPersonalDetailLogin.php'" /></td><td style="width: 5px;"></td><td rowspan="6"class="centerLine"></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="View Detail" class="clsbtnLeft" onclick="location.href='ViewDetail.php'" onclick="changeback()"/></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Update Qualification Detail" class="clsbtnLeft" onclick="location.href='frmUpdateQualificationDetail.php'" onclick="changeback()"/></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Update Personal Detail" class="SelectedButton"   onclick="location.href='UpdateDetail.php'" /></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Delete" class="clsbtnLeft" onclick="location.href='Delete.php'" />
            <tr><td valign="top"><input type="button" value="Search" class="clsbtnLeft"onclick="location.href='frmSearch.php'"/></td></tr>
            </table></td>
     <td valign="top">
     <div class="DivFromStyle" style="background-color: #BBD4F2 ;">
        <table width="100%"  border="0" cellspacing="5" cellpadding="3">
        <tr><td> <label style="color: red;">*</label>Represent Mandatory field</td></tr>
          <tr>
            <td><b>Employee  Name</b></td>
            <td>  : </td>  
            <td> <input class="b" type="text"  value="<?php echo $nameR ?>" name="name" id="name"size="30"/><label style="color: red;">*</label></td> 
            <td><b>Employee  ID</b></td>
            <td>  : </td>  
            <td> <?php echo $Empid ?></td>
            </tr>
          <tr>
             <td class="box"><b>Father's Name</b></td> 
             <td>  : </td> 
             <td>  <input class="b" type="text" name="fname" value="<?php echo $fnameR ?>" id="fname" size="30"/><label style="color: red;">*</label></td> 
             <td><b>Nick Name</b></td> 
             <td>  :</td> 
             <td> <input class="b" id="nname" name="nname" value="<?php echo $nickNameR ?>" type="text"size="10"/></td>
          </tr>
         <tr>
              <td class="box"><b>Marital Status</b></td>
              <td>:</td>
              <td> <select id="ms" name="ms" class="b" onchange="MaritalStatus()" >
                  <option value="no">&lt;option&gt;</option>
                  <option value="Unmaried" <?php if("Unmaried"==$spimaritialstatusR) echo "selected" ?> >Unmaried</option>
                  <option value="Maried" <?php if("Maried"==$spimaritialstatusR) echo "selected" ?>> Maried</option>
              </select><label style="color: red;">*</label></td>

          <td><b>Mariage Date</b></td>
          <td>:</td>
          <td><input id="mad" name="md" value="<?php echo $spimriagedateR ?>" class="b"type="text"size="30" />
          <label class="lablelColor">(dd/mm/yyyy)</label></td>
         </tr>
       <tr>
           <td class="box"><b> Email</b></td> 
           <td>  :</td> 
           <td>  <input id="email" name="email" value="<?php echo $spiemailR ?>" class="b" type="text"size="30"/><label style="color: red;">*</label></td> 
           <td> <b> Website </b></td> 
           <td>  :</td> 
           <td>  <input class="b" name="web" value="<?php echo $spiwebsiteR ?>" id="web" type="text"size="30"/>
           <label class="lablelColor"></label></td>
        </tr>
        <tr>
            <td class="box"><b>Blood Group</b></td>
            <td>:</td>
            <td><select id="bg" name="bg" class="b" >
            <option value="no">&lt;select&gt;</option>
            <option <?php if("AB+"==$spibloodgroupR) echo "selected" ?>> AB+ </option>
            <option <?php if("AB-"==$spibloodgroupR) echo "selected" ?>> AB- </option>
            <option <?php if("O+"==$spibloodgroupR) echo "selected" ?>>O+</option>
            <option <?php if("O-"==$spibloodgroupR) echo "selected" ?>>O-</option>
            <option <?php if("B-"==$spibloodgroupR) echo "selected" ?>>B-</option>
            <option <?php if("B+"==$spibloodgroupR) echo "selected" ?>>B+</option>
            <option <?php if("A+"==$spibloodgroupR) echo "selected" ?>>A+</option>
            <option <?php if("A-"==$spibloodgroupR) echo "selected" ?>>A-</option></select><label style="color: red;">*</label></td>
        </tr>
       <tr>
           <td class="box"> <b> Date of Birth</b></td> 
            <td>  : </td> 
            <td><input class="b" value="<?php echo $dtpidateofbirthR ?>" name="dob" id="dob"type="text" />
            <label style="color: red;">*</label><label class="lablelColor">(dd/mm/yyyy)</label></td>
            <td> <b>  Sex </b></td> 
            <td>  :</td> 
            <td><select id="cdob" name="sex" class="b" >
            <option value="no">&lt;select&gt;</option>
            <option value="Male" <?php if("Male"==$spisexR) echo "selected" ?>> Male </option>
            <option value="Female" <?php if("Female"==$spisexR) echo "selected" ?>> Female </option>
            <option value="Others" <?php if("Others"==$spisexR) echo "selected" ?>>Others</option>
            </select><label style="color: red;">*</label></td>
       </tr>
       <tr>
          <td class="box"><b> Pan</b></td> 
          <td> :</td> 
          <td> <input class="b" id="pan" name="pan" value="<?php echo $spipannumberR ?>" type="text"size="30" maxlength="10" /> </td> 
          <td> <b> Passport Number</b></td> 
          <td> :</td> 
          <td><input class="b" name="pas" id="pas" value="<?php echo $spipassportnumberR ?>" type="text"size="30" maxlength="15"/></td>
       </tr>
       <tr>
              <td class="box"><b>Permanent Address</b></td> 
              <td> :</td> 
              <td>  <textarea class="b" name="pa" id="pa"rows="5" maxlength="300"><?php echo $spipermanentaddressR ?></textarea><label style="color: red;">*</label></td> 
              <td> <b>Residential Address</b> </td> 
              <td>  :</td> 
              <td><textarea class="b" name="ra" id="ra" rows="5"  maxlength="300"><?php echo $spiresidentiaaddresR ?></textarea><label style="color: red;">*</label></td>
       </tr>
      <tr></tr><td></td><td></td><td></td> <td cellspan=5><input type="checkbox" id="AddressCheckBoxID" name="chAddressCheckBox" onclick="checkBox()"/><label>Same as permanent Address</label></td></tr>
       <tr>
          <td class="box"><b> Mobile Number</b></td> 
          <td>  :</td> 
          <td>  <input class="b" name="pn"id="pn" type="text" value="<?php echo $lPIMobileNumberR ?>"size="30"  maxlength="10"/><label style="color: red;">*</label></td> 
          <td> <b> Alternate mobile number</b></td> 
          <td>  :</td> 
          <td><input class="b" name="rpn" id="rpn" value="<?php echo $lPIAlternateMobileNumberRS ?>" type="text"size="30" maxlength="10"/></td>
       </tr>
       <tr>
         <td colspan="6" align="center"bgcolor=""> <input type="button" class="stdBtn" onclick="check()" value="Update"/>&nbsp;&nbsp;<input type="button" class="stdBtn" onclick="clr()" value="clear"/>&nbsp;&nbsp; </td>
       </tr>
    </table>
    </div>
    </td>
    </tr>
    </table>
    <table width=100%>
    
    <tr style="height: 30px;">
      <td align="right"><div class="Footer"><label style="color: white;">This Site Maintained by</label> NIST Technology Consulting Service&nbsp;</div></td>
    </tr>
</table>
</form>  

    
</body>

</html>