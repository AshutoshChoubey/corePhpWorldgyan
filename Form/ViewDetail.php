<?php
@session_start();

if(!isset($sesEmployeeID)||!isset($sesEmployeeUserName)||!isset($sesUserType)||!isset($sesPassword))
{
    session_unregister('sesEmployeeID','sesEmployeeUserName','sesUserType','sesPassword');
     echo "<script language=\"javascript\">alert(\"Session Expired...Please Relogin\")</script>";
     echo "<script language=\"javascript\">location.href=\"UpdateDetail.php\"</script>";
     exit;
    
}
require_once($DOCUMENT_ROOT."/class/clspersonalInformationManager.php");
//if($REQUEST_METHOD=="POST" && $hidPostType==1)
//{
  
      
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
      //echo nl2br($sQuery);
          $objpersonalinformation=$objpersonalinformationManager->retrievepersonalinformation($sQuery);
        
          if($objpersonalinformation==null)
           {
            /*
            piemployeeid serial NOT NULL,
  piemployeename character varying,
  pifathersname character varying,
  pinickname character varying,
  pimaritialstatus character varying,
  pimriagedate date,
  piemail character varying,
  piwebsite character varying,
  pibloodgroup character varying,
  pidateofbirth date,
  pisex character varying,
  pipannumber character varying,
  pipassportnumber character varying,
  pipermanentaddress character varying,
  piresidentialaddress character varying,
  pimobilenumber character varying,
  pialternatemobilenumber 
*/            echo "<script language=\"javascript\">alert(\"plz enter correct Employee ID\")</script>";
        
           }
        
         else{
                   $Empid=$objpersonalinformation->getPIEmployeeId();
                   $name=$objpersonalinformation->getPIEmployeeName();
                   $fname=$objpersonalinformation->getPIFathersName();
                   $nickName=$objpersonalinformation->getPINickName();
                   $spimaritialstatus=$objpersonalinformation->getPIMaritialStatus();
                   $spimriagedate=$objpersonalinformation->getPIMriageDate();
                   $spiemail=$objpersonalinformation->getPIEmail();
                   $spiwebsite=$objpersonalinformation->getPIWebsite();
                   $spibloodgroup=$objpersonalinformation->getPIBloodGroup();
                   $dtpidateofbirth=$objpersonalinformation->getPIDateOfBirth();
                   $spisex=$objpersonalinformation->getPISex();
                   $spipannumber=$objpersonalinformation->getPIPanNumber();
                   $spipassportnumber=$objpersonalinformation->getPIPassportNumber();
                   $spipermanentaddress=$objpersonalinformation->getPIPermanentAddress();
                   $spiresidentiaaddres=$objpersonalinformation->getPIResidentialAddress();
                   $lPIMobileNumber=$objpersonalinformation->getPIMobileNumber();
                   $lPIAlternateMobileNumber=$objpersonalinformation->getPIAlternateMobileNumber();
          
           }
      
 //  }

/*require_once($DOCUMENT_ROOT."/class/clsQualificationDetailManager.php");
 
            $objQualificationDetailOtherHigherQualification=new clsQualificationDetail();
            $objQualificationDetailManager=new clsQualificationDetailManager();
            $objQualificationDetailSet=new clsQualificationDetailSet();
            $sQuery="select * from qualificationdetail where piemployeeid=$sesEmployeeID ";
            
            $objQualificationDetailSet=$objQualificationDetailManager->retrieveQualificationDetail($sQuery);
           
           if($objQualificationDetailSet==null)
           {
              echo "<script language=\"javascript\">alert(\"plz enter correct Employee ID\")</script>";
            
            }
        
         else{
            
            $count=$objQualificationDetailSet->getcount();
            for($i=0;$i<$count;$i++)
            {
                        $objQualificationDetailOtherHigherQualification=$objQualificationDetailSet-> getitem($i);
                        $sesEmpID=$objQualificationDetailOtherHigherQualification->getQDEmployeeId();
                        $OtherHigherQualificationDegreeName=$objQualificationDetailOtherHigherQualification->getQDDegreeName();
                        $OtherHigherQualificationInstituteName= $objQualificationDetailOtherHigherQualification->getQDInstituteName();
                        $OtherHigherQualificationSpecification= $objQualificationDetailOtherHigherQualification->getQDSpecification();
                        $OtherHigherQualificationPassingYear= $objQualificationDetailOtherHigherQualification->getQDPassingYear();
                        $OtherHigherQualificationMarks=$objQualificationDetailOtherHigherQualification->getQDMarks();

            }
  }*/

    

 
?>
<html>
<head>
<link rel='stylesheet' href='../css/formStyle.css'/>
<script language="javascript" src="../JavaScript/UpdateQualificationDetailJs.js"></script>
    
</head>

<body>
    <div class="header">
        <table width=100% border=0>
            <tr  style="height: 30px;">
                <td bgcolor=#032D5D>&nbsp;</td>
               <td align="center" ><div class="BHL"><a href="" class="tbar" style="text-decoration: none;"><b></b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="location.href='loginHome.php'" class="tbar" style="text-decoration: none;"><b>Home</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="location.href='LogOutPage.php'" class="tbar" style="text-decoration: none;"><b>Logout</b></a></div></td>
                <td bgcolor=#032D5D>&nbsp;</td>
            </tr>
            <tr><td colspan="3" class="font-face" ><h1 align="center" class="heading" >View Personal Detail</h1></td></tr>
        </table>

    </div>
<form class="FORMSTYLE" method="POST" name="frmPersonal">
<input type="hidden" name="hidPostType" id="hidPostTypeID" />
    <table width="100%"  border=0 style="height: 300px;">
    
    <tr><td width="18%" valign="top">
    <table bgcolor=#FFFFFF style="height: 500px;" border=0>
        
        <tr><td valign="top" style="height: 30px;"><input type="button" value="View Personal Detail Detail" class="SelectedButton" onclick="location.href='ViewDetail.php'" onclick="changeback()"/></td><td style="width: 5px;"></td><td rowspan="6"class="centerLine"></td></tr>
       <tr><td valign="top"><input type="button" value="View Qualification Detail" class="clsbtnLeft" onclick="location.href='ViewQualificationDetail.php'"/></td></tr>
       
        
    </table></td>
    
    <td valign="top">
    <div style="background-color:#BBD4F2;" >
      
            
                        
          
          
           <?php 
           { 
            //<?php if($count>0 )
            ?>
       <table width="100%"  border="0" cellspacing="5" cellpadding="3">
        
        
          <table width="100%"  border="0" cellspacing="5" cellpadding="3" >
                         <tr>
                             <td style="background-color: #BBD4F2;">
                             
                                 
                              <table width="100%"  border="0" cellspacing="5" cellpadding="3">
                              
                                <tr>
                                                 <td><b>Employee ID</b></td>
                                                 <td>:</td>
                                                 <td > <?php echo $sesEmployeeID;?> </td>
                                    
                                    
                                       
                                                <td><b>Empolyee  Name</b></td>
                                                <td>  : </td>  
                                                <td> <?php echo $name; ?> </td> 
              
                                   </tr>
                                   <tr>
                                                 <td class="box"><b>Father's Name</b></td> 
                                                 <td>  : </td> 
                                                 <td>  <?php echo $fname; ?></td> 
                                             
                                                 <td><b>Nick Name</b></td> 
                                                 <td>  :</td> 
                                           
                                                 <td> <?php echo $nickName; ?></td>
                                 
                                  </tr>
                                  <tr>
                                                  <td class="box"><b>Marital Status</b></td>
                                                  <td>:</td>
                                                  <td> 
                                                  
                                                  <?php if("Unmaried"==$spimaritialstatus) echo "$spimaritialstatus" ?>
                                                  <?php if("Maried"==$spimaritialstatus) echo "$spimaritialstatus" ?>
                                                  </td>
                                                  
                                                 
                                                      
                                                 <td><b>Mariage Date</b></td>
                                                 <td>:</td>
                                                 <td><?php echo $spimriagedate; ?></td>
                                          
                                   </tr>
                                   <tr>
                                     <td class="box"><b> Email</b></td> 
                                   
                                       <td>  :</td> 
                                       <td>  <?php echo $spiemail; ?></td> 
                                       <td> <b> Website </b></td> 
                                       <td>  :</td> 
                                       <td>  <?php echo $spiwebsite; ?></td></td> 
                           
                                   </tr>
                                    <tr>
                                        <td class="box"><b>Blood Group</b></td>
                                        <td>:</td>
                                        <td>
                                        
                                        
                                         <?php if("AB+"==$spibloodgroup) echo "$spibloodgroup" ?> 
                                        <?php if("AB-"==$spibloodgroup) echo "$spibloodgroup" ?>
                                        <?php if("O+"==$spibloodgroup) echo "$spibloodgroup" ?>
                                         <?php if("O-"==$spibloodgroup) echo "$spibloodgroup" ?>
                                         <?php if("B+"==$spibloodgroup) echo "$spibloodgroup" ?> 
                                        <?php if("B-"==$spibloodgroup) echo "$spibloodgroup" ?>
                                        <?php if("A+"==$spibloodgroup) echo "$spibloodgroup" ?>
                                         <?php if("A-"==$spibloodgroup) echo "$spibloodgroup" ?>
                                        </td>
                                  
                                   </tr>
                                   <tr>
                                       <td class="box"> <b> Date of Birth</b></td> 
                                   
                                       <td>  : </td> 
                                     
                                       <td><?php echo $dtpidateofbirth; ?>
                                       </td>
                                       <td> <b>  Sex </b></td> 
                                       <td>  :</td> 
                                 
                                        <td>
                                        <?php if("Male"==$spisex) echo "$spisex" ?>
                                        <?php if("Female"==$spisex) echo "$spisex" ?>
                                         <?php if("Others"==$spisex) echo "$spisex" ?></td>
                              
                                   </tr>
                                   <tr>
                                      <td class="box"><b> Pan</b></td> 
                                   
                                      <td> :</td> 
                                      <td> <?php echo $spipannumber; ?> </td> 
                                      <td> <b> Passport Number</b></td> 
                                      <td> :</td> 
                                      <td><?php echo $spipassportnumber; ?></td>
                                 
                                   </tr>
                                   <tr>
                                          <td class="box"><b>Permanent Address</b></td> 
                                   
                                          <td> :</td> 
                                          <td>  <?php echo $spipermanentaddress; ?></td> 
                                          <td> <b> Residential Address</b> </td> 
                                          <td>  :</td> 
                                          <td><?php echo $spiresidentiaaddres; ?></td>
                                
                                   </tr>
                                   <tr>
                                     <td class="box"><b> Mobile Number</b></td> 
                                   
                                      <td>  :</td> 
                                      <td>  <?php echo $lPIMobileNumber; ?></td> 
                                      <td> <b> Alternate Mobile Number</b></td> 
                                      <td>  :</td> 
                                      <td><?php echo $lPIAlternateMobileNumber; ?></td>
                                   </tr>
                                   
       
        
                          </table>
                         <table border="0"  width=100% >
                              <tr>
                                 <td  align="center"bgcolor=" #BBD4F2"> <input type="button" class="wbutton" onclick="check1()" value="print"/>&nbsp;&nbsp;&nbsp;&nbsp; </td>
                               </tr> 
                        </table>
                    <?php
                    }
                    ?>
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