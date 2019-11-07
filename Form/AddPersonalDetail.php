<?php
@session_start();
require_once($DOCUMENT_ROOT."/class/clsPersonalInformationManager.php");
/* $empID=$objperesonalmanagementsystem->getPIEmployeeId();
            
            echo "<script>alert('Success');
            location.href='QualificationDetail.php?empID=$empID';</script>";*/
if($REQUEST_METHOD=="POST")
{
         $objpersonalinformationSet = new clspersonalinformationSet();
         $objperesonalmanagementsystem=new clspersonalinformation();
       
          
       $objperesonalmanagementsystem->setPIEmployeeId($eid);
       $objperesonalmanagementsystem->setPIEmployeeName($name);
       $objperesonalmanagementsystem->setPIFathersName($fname);
       $objperesonalmanagementsystem->setPINickName($nname);
       $objperesonalmanagementsystem->setPIMaritialStatus($ms); 
       $objperesonalmanagementsystem->setPIMriageDate($md);
       $objperesonalmanagementsystem->setPIEmail($email);
       $objperesonalmanagementsystem->setPIWebsite($web);
       $objperesonalmanagementsystem->setPIBloodGroup($bg);
       $objperesonalmanagementsystem->setPIDateOfBirth($dob);
       $objperesonalmanagementsystem->setPISex($sex);
       $objperesonalmanagementsystem->setPIPanNumber($pan);
       $objperesonalmanagementsystem->setPIPassportNumber($pas);
       $objperesonalmanagementsystem->setPIPermanentAddress($pa);
       $objperesonalmanagementsystem->setPIResidentialAddress($ra);
       $objperesonalmanagementsystem->setPIMobileNumber($pn);
       $objperesonalmanagementsystem->setPIAlternateMobileNumber($rpn);
  	
        $objpersonalinformationmanager = new clspersonalinformationmanager();
        $iResult = $objpersonalinformationmanager->savepersonalinformation($objperesonalmanagementsystem);
        
        if($iResult==1)
        {
            $objpersonalinformationmanager = new clspersonalinformationmanager();
            $objperesonalmanagementsystem= $objpersonalinformationmanager->retrievepersonalinformation("select max(piemployeeid) as piemployeeid from personalinformation");
            $empID=$objperesonalmanagementsystem->getPIEmployeeId();
            $sesEmpID=$empID;
           //$sesEmpname=$name;
            
            session_register('sesEmpID');
           // session_register('$sesEmpname');
            echo "<script>alert('Your personal Detail Successfully saved');location.href='QualificationDetail.php';
            </script>";
             
        }
          else
          {
            echo "<script>alert('error');</script>";
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
                <td align="center" ><div class="BHL"><a href="" class="tbar" ><b></b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="location.href='Home.php'" class="tbar" ><b>Login Page</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="tbar" ><b></b></a></div></td>
                <td bgcolor=#032D5D>&nbsp;</td>
            </tr>
            <tr><td colspan="3" class="font-face" ><h1 align="center" class="heading" >Add Personal Detail</h1></td></tr>
        </table>
    </div>
<form  method="POST" name="frmPersonal">
    <table width="100%"  border="0" class="centerTable">
    <tr><td width="18%" valign="top">
    <table bgcolor=#FFFFFF style="height: 500px;" border=0>
        <tr><td valign="top" class="lefta"><input type="button" value="Add personal Detail" class="SelectedButton"  onclick="location.href='AddPersonalDetail.php'" /></td><td style="width: 5px;"></td><td rowspan="6"class="centerLine"></td></tr>
        
        <tr><td valign="top"><input type="button" value="Search" class="clsbtnLeft" onclick="location.href='Search.php'"/></td></tr>
     </table></td>
     <td valign="top">
     <div class="DivFromStyle" style="background-color: #BBD4F2 ;">
        <table width="100%"  border="0" cellspacing="5" cellpadding="3">
        <tr><td> <label style="color: red;">*</label>Represent Mandatory field</td></tr>
          <tr>
            <td><b>Employee  Name</b></td>
            <td>  : </td>  
            <td> <input class="b" type="text" name="name" id="name"size="30"/><label style="color: red;">*</label></td> 
            </tr>
          <tr>
             <td class="box"><b>Father's Name</b></td> 
             <td>  : </td> 
             <td>  <input class="b" type="text" name="fname" id="fname" size="30"/><label style="color: red;">*</label></td> 
             <td><b>Nick Name</b></td> 
             <td>  :</td> 
             <td> <input class="b" id="nname" name="nname" type="text"size="10"/></td>
          </tr>
         <tr>
              <td class="box"><b>Marital Status</b></td>
              <td>:</td>
              <td> <select id="ms" name="ms" class="b"onchange="MaritalStatus()" >
                  <option value="no">&lt;option&gt;</option>
                  <option  >Unmaried</option>
                  <option value="Maried"> Maried</option>
              </select><label style="color: red;">*</label></td>

          <td><b>Mariage Date</b></td>
          <td>:</td>
          <td><input id="mad" name="md"class="b"type="text"size="30" />
          <label class="lablelColor">(dd/mm/yyyy)</label></td>
         </tr>
       <tr>
           <td class="box"><b> Email</b></td> 
           <td>  :</td> 
           <td>  <input id="email" name="email" class="b" type="text"size="30"/><label style="color: red;">*</label></td> 
           <td> <b> Website </b></td> 
           <td>  :</td> 
           <td>  <input class="b" name="web" id="web" type="text"size="30"/>
           <label class="lablelColor"></label></td>
        </tr>
        <tr>
            <td class="box"><b>Blood Group</b></td>
            <td>:</td>
            <td><select id="bg" name="bg" class="b" >
            <option value="no">&lt;select&gt;</option>
            <option> AB+ </option>
            <option> AB- </option>
            <option>O+</option>
            <option>O-</option>
            <option>B-</option>
            <option>B+</option>
            <option>A+</option>
            <option>A-</option></select><label style="color: red;">*</label></td>
        </tr>
       <tr>
           <td class="box"> <b> Date of Birth</b></td> 
            <td>  : </td> 
            <td><input class="b" name="dob" id="dob"type="text" />
            <label style="color: red;">*</label><label class="lablelColor">(dd/mm/yyyy)</label></td>
            <td> <b>  Sex </b></td> 
            <td>  :</td> 
            <td><select id="cdob" name="sex" class="b" >
            <option value="no">&lt;select&gt;</option>
            <option > Male </option>
            <option > Female </option>
            <option>Others</option>
            </select><label style="color: red;">*</label></td>
       </tr>
       <tr>
          <td class="box"><b> Pan</b></td> 
          <td> :</td> 
          <td> <input class="b" id="pan" name="pan" type="text"size="30" maxlength="10" /> </td> 
          <td> <b> Passport Number</b></td> 
          <td> :</td> 
          <td><input class="b" name="pas" id="pas" type="text"size="30" maxlength="15"/></td>
       </tr>
       <tr>
              <td class="box"><b>Permanent Address</b></td> 
              <td> :</td> 
              <td>  <textarea class="b" name="pa" id="pa"rows="5" maxlength="300"></textarea><label style="color: red;">*</label></td> 
              <td> <b>Residential Address</b> </td> 
              <td>  :</td> 
              <td><textarea class="b" name="ra" id="ra" rows="5" maxlength="300"></textarea><label style="color: red;">*</label></td>
       </tr>
      <tr></tr><td></td><td></td><td></td> <td cellspan=5><input type="checkbox" id="AddressCheckBoxID" name="chAddressCheckBox" onclick="checkBox()"/><label>Same as permanent Address</label></td></tr>
       <tr>
          <td class="box"><b> Mobile Number</b></td> 
          <td>  :</td> 
          <td>  <input class="b" name="pn"id="pn" type="text"size="30"  maxlength="10"/><label style="color: red;">*</label></td> 
          <td> <b> Alternate mobile number</b></td> 
          <td>  :</td> 
          <td><input class="b" name="rpn" id="rpn" type="text"size="30" maxlength="10"/></td>
       </tr>
       <tr>
         <td colspan="6" align="center"bgcolor=""> <input type="button" class="stdBtn" onclick="check()" value="submit"/>&nbsp;&nbsp;<input type="button" class="stdBtn" onclick="clr()" value="clear"/>&nbsp;&nbsp; </td>
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