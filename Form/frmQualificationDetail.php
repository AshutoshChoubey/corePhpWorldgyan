<?php 
@session_start();
require_once ($DOCUMENT_ROOT."/class/clsQualificationDetailManager.php");
require_once($DOCUMENT_ROOT."/class/clspersonalInformationManager.php");
//echo $SesEmployeeName;
//echo "dsfd";
//echo $PostGradCgpa.$PostGraduation.$PostGradRadio;
if($REQUEST_METHOD=="POST")
{ 
    session_register('sesEmpname');
  
        $objQualificationDetailTenth=new clsQualificationDetail();
        $objQualificationDetailSet=new clsQualificationDetailSet();
       
  

        $objQualificationDetailTenth->setQDEmployeeId($sesEmpID);
        $objQualificationDetailTenth->setQDQualification("10th");
        $objQualificationDetailTenth->setQDOrderNumber(1);
       // $objQualificationDetailTenth->setQDSpecializationOrBranch($TenthPassingyear);
        $objQualificationDetailTenth->setQDInstituteName($TenthInstitute);
        $objQualificationDetailTenth->setQDJoiningYear($TenthJoiningDate);
        $objQualificationDetailTenth->setQDLeavingYear($TenthLeavingDate);
        $objQualificationDetailTenth->setQDIsCgpa($TenthRadio);
        $objQualificationDetailTenth->setQDPercentageOrCgpa($TenthGrade);
        $objQualificationDetailSet->add($objQualificationDetailTenth);
       
       $objQualificationDetailtweleve=new clsQualificationDetail();
       $objQualificationDetailtweleve->setQDEmployeeId($sesEmpID);
       $objQualificationDetailtweleve->setQDOrderNumber(2);
       $objQualificationDetailtweleve->setQDQualification($TwelveSelName);
       //$objQualificationDetailtweleve->setQDSpecializationOrBranch($TenthPassingyear);
       $objQualificationDetailtweleve->setQDInstituteName($TwelveInstitute);
       $objQualificationDetailtweleve->setQDJoiningYear($TwelveJoiningDate);
       $objQualificationDetailtweleve->setQDLeavingYear($TwelveLeavingDate);
       $objQualificationDetailtweleve->setQDIsCgpa($twelveCGPA);
       $objQualificationDetailtweleve->setQDPercentageOrCgpa($TweleveGrade);
       $objQualificationDetailSet->add($objQualificationDetailtweleve);
           
        if($GraduationSel=='B.tech')
        {    
       $objQualificationDetailGraduationBtech=new clsQualificationDetail();
       $objQualificationDetailGraduationBtech->setQDEmployeeId($sesEmpID);
       $objQualificationDetailGraduationBtech->setQDQualification($GraduationSel);
       $objQualificationDetailGraduationBtech->setQDOrderNumber(3);
       $objQualificationDetailGraduationBtech->setQDSpecializationOrBranch($BtechBranch);
       $objQualificationDetailGraduationBtech->setQDInstituteName($BtechInstitute);
       $objQualificationDetailGraduationBtech->setQDJoiningYear($BtechJoiningDate);
       $objQualificationDetailGraduationBtech->setQDLeavingYear($BtechLeavingDate);
       $objQualificationDetailGraduationBtech->setQDIsCgpa($RadioBtech);
       $objQualificationDetailGraduationBtech->setQDPercentageOrCgpa($BtechCgpa);
       $objQualificationDetailSet->add($objQualificationDetailGraduationBtech);
        }
        if($GraduationSel=='B.Sc')
        {
        $objQualificationDetailGraduationBsc=new clsQualificationDetail();
        $objQualificationDetailGraduationBsc->setQDEmployeeId($sesEmpID);
        $objQualificationDetailGraduationBsc->setQDOrderNumber(3);
        $objQualificationDetailGraduationBsc->setQDQualification($GraduationSel);
        $objQualificationDetailGraduationBsc->setQDSpecializationOrBranch($BscSpecialization);
        $objQualificationDetailGraduationBsc->setQDInstituteName($BscInstitute);
        $objQualificationDetailGraduationBsc->setQDJoiningYear($BscJoiningDate);
        $objQualificationDetailGraduationBsc->setQDLeavingYear($BscLeavingDate);
        $objQualificationDetailGraduationBsc->setQDIsCgpa($BscRadio);
        $objQualificationDetailGraduationBsc->setQDPercentageOrCgpa($BscCgpa);
        $objQualificationDetailSet->add($objQualificationDetailGraduationBsc);
           }
           if($GraduationSel=='others')
        {
        $objQualificationDetailGraduationOthers=new clsQualificationDetail();
        $objQualificationDetailGraduationOthers->setQDEmployeeId($sesEmpID);
        $objQualificationDetailGraduationOthers->setQDOrderNumber(3);
        $objQualificationDetailGraduationOthers->setQDQualification($OthersGradutionDegree);
        $objQualificationDetailGraduationOthers->setQDSpecializationOrBranch($OtherGraduationSpecialization);
        $objQualificationDetailGraduationOthers->setQDInstituteName($OtherGraduationInstitute);
        $objQualificationDetailGraduationOthers->setQDJoiningYear($OtherGraduationJoiningDate);
        $objQualificationDetailGraduationOthers->setQDLeavingYear($OtherGraduationLeavingDate);
        $objQualificationDetailGraduationOthers->setQDIsCgpa($OthersGradutionRadio);
        $objQualificationDetailGraduationOthers->setQDPercentageOrCgpa($OtherGraduationCgpa);
        $objQualificationDetailSet->add($objQualificationDetailGraduationOthers);
          }
          if($PostGraduation!='NA')
          {
           // echo $PostGraduation;
         $objQualificationDetailPostGraduation=new clsQualificationDetail();
        $objQualificationDetailPostGraduation->setQDEmployeeId($sesEmpID);
        $objQualificationDetailPostGraduation->setQDOrderNumber(4);
        $objQualificationDetailPostGraduation->setQDQualification($PostGraduation);
        $objQualificationDetailPostGraduation->setQDSpecializationOrBranch($PostGradSpecial);
        $objQualificationDetailPostGraduation->setQDInstituteName($PostGradInstitute);
        $objQualificationDetailPostGraduation->setQDJoiningYear($PodtGradJoiningDate);
        $objQualificationDetailPostGraduation->setQDLeavingYear($PostGradLeavingDate);
        $objQualificationDetailPostGraduation->setQDIsCgpa($PostGradRadio);
        $objQualificationDetailPostGraduation->setQDPercentageOrCgpa($PostGradCgpa);
        $objQualificationDetailSet->add($objQualificationDetailPostGraduation);
         }
         
         if($OtherHigherQualificationDegree!='')
         {
        $objQualificationDetailOtherHigherQualification=new clsQualificationDetail();
        $objQualificationDetailOtherHigherQualification->setQDEmployeeId($sesEmpID);
        $objQualificationDetailOtherHigherQualification->setQDOrderNumber(5);
        $objQualificationDetailOtherHigherQualification->setQDQualification($OtherHigherQualificationDegree);
        $objQualificationDetailOtherHigherQualification->setQDSpecializationOrBranch($OtherHigherQualificationSpecialization);
        $objQualificationDetailOtherHigherQualification->setQDInstituteName($OtherHigherQualificationInstitute);
        $objQualificationDetailOtherHigherQualification->setQDJoiningYear($OtherHigherQualificationJoiningDate);
        $objQualificationDetailOtherHigherQualification->setQDLeavingYear($OtherHigherQualificationLeavingDate);
        $objQualificationDetailOtherHigherQualification->setQDIsCgpa($OtherHigherQualificationDegreeRadio);
        $objQualificationDetailOtherHigherQualification->setQDPercentageOrCgpa($OtherHigherQualificationCgpa);
        $objQualificationDetailSet->add($objQualificationDetailOtherHigherQualification);
         }   
    $count = $objQualificationDetailSet->getcount();
    
    
    
    $objQualificationDetailManager=new clsQualificationDetailManager;
    $result=$objQualificationDetailManager->saveQualificationDetailSet($objQualificationDetailSet);
    
    $objpersonalinformationSet = new clspersonalinformationSet();
    $objperesonalmanagementsystem=new clspersonalinformation();
    $pQuery="select * from personalinformation where piemployeeid=$sesEmpID";
    
    $objpersonalinformationmanager = new clspersonalinformationmanager();
    $objperesonalmanagementsystem=$objpersonalinformationmanager->retrievepersonalinformation($pQuery);
    $SesEmployeeName =$objperesonalmanagementsystem->getPIEmployeeName();
    //echo $SesEmployeeName;
    session_register('SesEmployeeName');
    if($result>=1)
        {
            echo "<script>alert('Your Qualification Detail Successfully saved');</script>";
            echo "<script language=\"javascript\">location.href=\"frmUserIdAndPasswordResistration.php\"</script>";
 
        }
          else
          {
            echo "<script>alert('error');</script>";
          }
          
            
        }
            
    

require_once($DOCUMENT_ROOT."/Class/clsBtechBranchManager.php");
$objBtechBranch=new clsBtechBranch();
        $objBtechBranchSet=new clsBtechBranchSet();
        $objBtechBranchManager=new clsBtechBranchManager();
        $sqlBtechBranch="select qdbranchid,branchname from qdbtechbranch order by branchname";
        
        $objBtechBranchSet=$objBtechBranchManager->RetrieveBtechBranchSet($sqlBtechBranch);
        
        $numrecordsBtechBranch=$objBtechBranchSet->GetCount();
        
require_once($DOCUMENT_ROOT."/class/clsBscSpecificationManager.php");
        $objBscSpecificationSet=new clsBscSpecficationSet();
        $objBscSpecification=new clsBscSpecfication();
        $objBscSpecificationManeger=new clsBscSpecificationManager();
        $sqlBscSpecification="select bscid,bscspecification from bscspecification order by bscspecification";
        $objBscSpecificationSet=$objBscSpecificationManeger->RetriveSet($sqlBscSpecification);
        $numRecordBsc=$objBscSpecificationSet->getCount();
      
      require_once($DOCUMENT_ROOT."/class/clsPostGraduationDegreeManager.php");
        $ObjPostGraduationDegree=new clsPostGraduationDegree();
        $ObjPostGraduationDegreeSet=new clsPostGraduationDegreeSet();
        $ObjPostGraduationDegreeManager=new clsPostGraduationDegreeManager();
        $sqlPGDegree="select pgdegreeid,pgdegreename from postgraduationdegree order by pgdegreename";
        $ObjPostGraduationDegreeSet=$ObjPostGraduationDegreeManager->RetrivePGDraduationSet($sqlPGDegree);
        $numPGGraduation=$ObjPostGraduationDegreeSet->getCount();
       $ObjPostGraduationDegree=$ObjPostGraduationDegreeSet->getitem(1);
       $PGgreduation=$ObjPostGraduationDegree->getPGDegreeName();


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
            <tr><td colspan="3" class="font-face" ><h1 align="center" class="heading" >Add Qualification Detail</h1></td></tr>
        </table>
    </div>
<form  method="POST" name="frmPersonal">
    <table width="100%"  border="0" class="centerTable">
    <tr><td width="18%" valign="top">
    <table bgcolor=#FFFFFF style="height: 500px;" border=0>
         
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Add Qualification Detail" class="SelectedButton"  onclick="location.href='frmQualificationDetail.php'" /></td><td style="width: 5px;"></td><td rowspan="6"class="centerLine"></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="View Detail" class="clsbtnLeft" onclick="location.href='ViewDetail.php'" onclick="changeback()"/></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Update Qualification Detail" class="clsbtnLeft" onclick="location.href='frmUpdateQualificationDetail.php'" onclick="changeback()"/></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Update Personal Detail" class="clsbtnLeft" onclick="location.href='UpdateDetail.php'" /></td></tr>
            <tr><td valign="top" style="height: 30px;"><input type="button" value="Delete" class="clsbtnLeft" onclick="location.href='Delete.php'" />
            <tr><td valign="top"><input type="button" value="Search" class="clsbtnLeft"onclick="location.href='frmSearch.php'"/></td></tr>
            </table></td>
     <td valign="top">
     <div class="DivFromStyle" style="background-color: #BBD4F2 ;">
        <table width="100%"  border="0" cellspacing="5" cellpadding="3">
         <tr><td> <label style="color: red;">*</label>Represent Mandatory field</td></tr>
         <tr><td>Note: If Is CGPA is No means Percentage</td></tr>
        <tr><td><fieldset style="width: 1000px;" ><legend  align="center">10TH Detail</legend>
      
        <table width="" cellspacing="8" cellpadding="7" border="0" >
       
          <tr>
            <td><b>Institute/Bord Name</b><label style="color: red;">*</label></td>
              
            
            
             <td><b>Joining Year</b><label style="color: red;">*</label></td> 
              
              
             <td><b>Leaving  Year</b><label style="color: red;">*</label></td> 
             
             
             
         
              <td class="box"><b>Is CGPA</b><label style="color: red;">*</label></td>
              <td><input type="radio"  name="TenthRadio" id="TenthRadioID" checked="selected" value="Yes"/><b>Yes</b></td>
              <td><input type="radio" name="TenthRadio" id="TenthRadioID" value="No"/><b>No</b></td>
              </tr>
              <tr>
              <td> <input class="b" type="text" name="TenthInstitute" id="TenthInstituteID"size="30"/></td>
              <td>  <input class="b" type="text" name="TenthJoiningDate" id="TenthJoiningDateID" size="10"/></td> 
              <td> <input class="b" id="TenthLeavingDateID" name="TenthLeavingDate" type="text"size="10"/></td>
              
               <td colspan="3">  <input class="b" type="text" name="TenthGrade" id="TenthGradeID" size="5"/></td> 
            
          
        </tr></table> </fieldset>
        
       </td>
       
       <tr>
       <td><fieldset style="width: 1000px;" ><legend  align="center">12th/Diploma</legend>
      
        <table width="" cellspacing="8" cellpadding="7" border="0" >
          <tr>
          <td><b>Degree</b></td>
            <td><b>Institute/Bord Name</b><label style="color: red;">*</label></td>
              
            
            
             <td><b>Joining Year</b><label style="color: red;">*</label></td> 
              
              
             <td><b>Leaving  Year</b><label style="color: red;">*</label></td> 
             
             
             
         
              <td class="box"><b>Is CGPA</b><label style="color: red;">*</label></td>
              <td><input type="radio" name="twelveCGPA" id="twelveCGPAID" value="Yes" /><b>Yes</b></td>
              <td><input type="radio" name="twelveCGPA" id="twelveCGPAID" checked="selected"value="No" /><b>No</b></td>
              </tr>
              <tr>
              <td><select class="b" id="TwelveSelID" name="TwelveSelName">
              <option value="NA" selected="">&lt;select&gt;</option>
              <option value="12TH">12TH</option>
                      <option value="Diploma">Diploma</option>
                  </select></td>
              <td> <input class="b" type="text" name="TwelveInstitute"  id="TwelveInstituteID"size="30"/></td>
              <td>  <input class="b" type="text" name="TwelveJoiningDate" id="TwelveJoiningDateID" size="10"/></td> 
              <td> <input class="b" id="TwelveLeavingDateID" name="TwelveLeavingDate" type="text"size="10"/></td>
              
               <td colspan="3"> <input class="b" type="text" name="TweleveGrade" id="TweleveGradeID" size="5"/></td> 
            
          
        </tr></table> </fieldset>
        
       </td>
       
       
       
       
        </tr>
       <tr>
       <td><fieldset style="width: 1000px;" ><legend  align="center">Graduation</legend>
      <table> <tr>
          <td><b>Graduation Degree</b><label style="color: red;">*</label></td>
          <td><select id="GraduationSelID" class="b"  name="GraduationSel" onchange="GraduationDetail()">
          <option value="NA">&lt;select&gt;</option>
          <option value="B.tech">B.tech</option>
          <option value="B.Sc">B.Sc</option>
          <option value="others">others</option>
          </select></td>
          </tr></table>
        <table width="" cellspacing="8" cellpadding="7" border="0" id="BtechTable"  style="display: none;" >
         
          <tr>
            <td><b>Institute/University</b><label style="color: red;">*</label></td>
              
             <td><b>Branch</b><label style="color: red;">*</label></td> 
            
             <td><b>Joining Year</b><label style="color: red;">*</label></td> 
              
              
             <td><b>Leaving  Year</b><label style="color: red;">*</label></td> 
             
             
             
         
              <td class="box"><b>Is CGPA</b><label style="color: red;">*</label></td>
              <td><input type="radio" id="RadioBtechID" name="RadioBtech" value="Yes" checked="selected" /><b>Yes</b></td>
              <td><input type="radio" id="RadioBtechID" name="RadioBtech" value="No"/><b>No</b></td>
              </tr>
              <tr>
              <td> <input class="b" type="text" name="BtechInstitute" id="BtechInstituteID"size="30"/></td>
              <td> <select class="b" name="BtechBranch" id="BtechBranchID"><option value="NA"  >&lt;select&gt;</option>
               <?php
                                                 
                               for($lcount=0;$lcount<$numrecordsBtechBranch;$lcount++)
                                {
                                    $objBtechBranch=new clsBtechBranch();
                                   $objBtechBranch= $objBtechBranchSet -> GetItem($lcount);
                                   $QDBranchId=$objBtechBranch -> getQDBranchId();
                                   $QDBranchName=$objBtechBranch -> getBranchName();
                                   
                                   echo "<option value=\"$QDBranchName\">$QDBranchName</option>";
                                }
                            ?></select></td>
              
              
              <td>  <input class="b" type="text" name="BtechJoiningDate" id="BtechJoiningDateID" size="10"/></td> 
              <td> <input class="b" id="BtechLeavingDateID" name="BtechLeavingDate" type="text"size="10"/></td>
              
               <td colspan="3">  <input class="b" type="text" name="BtechCgpa" id="BtechCgpaID" size="5"/></td> 
            
          
        </tr></table> 
        
         <table width="" cellspacing="8" cellpadding="7" border="0" id="BscTable" style="display: none;" >
          <tr>
          
          
            <td><b>Institute/University</b><label style="color: red;">*</label></td>
              
             <td><b>Specialization</b><label style="color: red;">*</label></td> 
            
             <td><b>Joining Year</b><label style="color: red;">*</label></td> 
              
              
             <td><b>Leaving  Year</b><label style="color: red;">*</label></td> 
             
             
             
         
              <td class="box"><b>Is CGPA</b><label style="color: red;">*</label></td>
              <td><input type="radio" id="BscRadioID" name="BscRadio" value="Yes" checked="selected" /><b>Yes</b></td>
              <td><input type="radio" id="BscRadioID" name="BscRadio" value="No"/><b>No</b></td>
              </tr>
              <tr>
              <td> <input class="b" type="text" name="BscInstitute" id="BscInstituteID"size="30"/></td>
              <td><select class="b" name="BscSpecialization" id="BscSpecializationID"> <option value="NA">&lt;select&gt;</option>
                                                          <?php
                                                 
                               for($lcount=0;$lcount<$numRecordBsc;$lcount++)
                                {
                                    $objBscSpecification=new clsBscSpecfication();
                                   $objBscSpecification= $objBscSpecificationSet-> GetItem($lcount);
                                   $QDBranchId=$objBscSpecification ->getBscId ();
                                   $QDBranchName=$objBscSpecification -> getBscSpecification();
                                   echo "<option value=\"$QDBranchName\">$QDBranchName</option>";
                                }
                            ?></select></td>
              <td>  <input class="b" type="text" name="BscJoiningDate" id="BscJoiningDateID" size="10"/></td> 
              <td> <input class="b" id="BscLeavingDateID" name="BscLeavingDate" type="text"size="10"/></td>
              
               <td colspan="3">  <input class="b" type="text" name="BscCgpa" id="BscCgpaID" size="5"/></td> 
            
          
        </tr></table>
        
        
         <table width="" cellspacing="8" cellpadding="7" border="0" id="OtherGraduationTable" style="display: none;">
          <tr>
          <td><b>Others Graduation Degree</b></td>
          <td> <input class="b" type="text" name="OthersGradutionDegree" id="OthersGradutionDegreeID"size="30"/></td>
          </tr>
          <tr>
          
            <td><b>Institute/University</b><label style="color: red;">*</label></td>
              
             <td><b>Specialization</b><label style="color: red;">*</label></td> 
            
             <td><b>Joining Year</b><label style="color: red;">*</label></td> 
              
              
             <td><b>Leaving  Year</b><label style="color: red;">*</label></td> 
             
             
             
         
              <td class="box"><b>Is CGPA</b><label style="color: red;">*</label></td>
              <td><input type="radio" name="OthersGradutionRadio" id="OthersGradutionRadioID" value="Yes" checked="selected" /><b>Yes</b></td>
              <td><input type="radio" value="No"name="OthersGradutionRadio" id="OthersGradutionRadioID" /><b>No</b></td>
              </tr>
              <tr>
              <td> <input class="b" type="text" name="OtherGraduationInstitute" id="OtherGraduationInstituteID"size="30"/></td>
              <td> <input class="b" type="text" name="OtherGraduationSpecialization" id="OtherGraduationSpecializationID"size="30"/></td>
              <td>  <input class="b" type="text" name="OtherGraduationJoiningDate" id="OtherGraduationJoiningDateID" size="10"/></td> 
              <td> <input class="b" id="OtherGraduationLeavingDateID" name="OtherGraduationLeavingDate" type="text"size="10"/></td>
              
               <td colspan="3">  <input class="b" type="text" name="OtherGraduationCgpa" id="OtherGraduationCgpaID" size="5"/></td> 
            
          
        </tr></table>
        
        
        
        
        </fieldset>
        
       </td>
       
       
       
       
        </tr>
         <tr>
       <td><fieldset style="width: 1000px;" ><legend  align="center">Post Gradution</legend>
      
        <table width="" cellspacing="8" cellpadding="7" border="0" >
          <tr>
          <td><b>Post Graduation</b></td>
          <td><select class="b" id="PostGraduationID" name="PostGraduation">
          <option value="NA">&lt;select&gt;</option>
           <?php  
                             
                               for($lcount=0;$lcount<$numPGGraduation;$lcount++)
                                {
                                    $ObjPostGraduationDegree=$ObjPostGraduationDegreeSet->getitem($lcount);
                                    $PGgreduation=$ObjPostGraduationDegree->getPGDegreeName();
                                   if($PostGraduation==$PGgreduation)
                                   {
                                    echo "<option value=\"$PGgreduation\" selected>$PGgreduation</option>";
                                   }
                                   echo "<option value=\"$PGgreduation\">$PGgreduation</option>";
                                }
                            ?>
          </select></td>
          </tr>
          <tr>
            <td><b>Institute/University</b></td>
              
             
            <td><b>Specialization</b></td> 
             <td><b>Joining Year</b></td> 
              
              
             
              <td><b>Leaving  Year</b></td> 
             
             
             
         
              <td class="box"><b>Is CGPA</b></td>
              <td><input type="radio" name="PostGradRadio" id="PostGradRadioID" value="Yes" checked="selected" /><b>Yes</b></td>
              <td><input type="radio" name="PostGradRadio" id="PostGradRadioID" value="No"/><b>No</b></td>
              </tr>
              <tr>
              <td> <input class="b" type="text" name="PostGradInstitute" id="PostGradInstituteID"size="30"/></td>
              <td> <input class="b" type="text" name="PostGradSpecial" id="PostGradSpecialID"size="30"/></td>
              <td>  <input class="b" type="text" name="PodtGradJoiningDate" id="PodtGradJoiningDateID" size="10"/></td> 
              <td> <input class="b" id="PostGradLeavingDateID" name="PostGradLeavingDate" type="text"size="10"/></td>
              
               <td colspan="3">  <input class="b" type="text" name="PostGradCgpa" id="PostGradCgpaID" size="5"/></td> 
            
          
        </tr></table> </fieldset>
        
       </td>
       
       
       
       
        </tr>
        <tr>
       <td><fieldset style="width: 1000px;" ><legend  align="center">Other Higher Qualification</legend>
      
        <table width="" cellspacing="8" cellpadding="7" border="0" >
          <tr>
          <td><b>Degree Name</b></td>
           <td> <input class="b" type="text" name="OtherHigherQualificationDegree" id="OtherHigherQualificationDegreeID"size="30"/></td>
          </tr>
          <tr>
            <td><b>Institute/University</b></td>
              
             <td><b>Specialization </b></td> 
            
             <td><b>Joining Year</b></td> 
              
              
             <td><b>Leaving  Year</b></td> 
             
             
             
         
              <td class="box"><b>Is CGPA</b></td>
              <td><input type="radio" name="OtherHigherQualificationDegreeRadio" id="OtherHigherQualificationDegreeRadioID" checked="selected" value="Yes"/><b>Yes</b></td>
              <td><input type="radio"name="OtherHigherQualificationDegreeRadio" id="OtherHigherQualificationDegreeRadioID" value="No" /><b>No</b></td>
              </tr>
              <tr>
              <td> <input class="b" type="text" name="OtherHigherQualificationInstitute" id="OtherHigherQualificationInstituteID"size="30" /></td>
              <td> <input class="b" type="text" name="OtherHigherQualificationSpecialization" id="OtherHigherQualificationSpecializationID"size="30"/></td>
              <td>  <input class="b" type="text" name="OtherHigherQualificationJoiningDate" id="OtherHigherQualificationJoiningDateID" size="10"/></td> 
              <td> <input class="b" id="OtherHigherQualificationLeavingDateID" name="OtherHigherQualificationLeavingDate" type="text"size="10"/></td>
              
               <td colspan="3">  <input class="b" type="text" name="OtherHigherQualificationCgpa" id="OtherHigherQualificationCgpaID" size="5"/></td> 
            
          
        </tr></table> </fieldset>
        
       </td>
       
       
       
       
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
<script type="text/javascript">


function GraduationDetail()
{
   var Graduation=document.getElementById('GraduationSelID').value;
   var objGraduation=document.getElementById('GraduationSelID');
   //alert (Graduation);
   if(Graduation=="B.tech")
   {
    //BtechTable
    document.getElementById('BtechTable').style.display="table";
    document.getElementById('BscTable').style.display="none";
    document.getElementById('OtherGraduationTable').style.display="none";
   }
    if(Graduation=="B.Sc")
   {
   
  document.getElementById('BtechTable').style.display="none";
    document.getElementById('BscTable').style.display="table";
    document.getElementById('OtherGraduationTable').style.display="none";
    }
     if(Graduation=="others")
   {
   document.getElementById('BtechTable').style.display="none";
    document.getElementById('BscTable').style.display="none";
    document.getElementById('OtherGraduationTable').style.display="table";
    }
}
  function check()
{

           var TenthRad=window.document.frmPersonal.TenthRadio.value;
        
        var TenthInstitute=document.getElementById('TenthInstituteID').value;
        var TenthInstituteObj=document.getElementById('TenthInstituteID');
                  
               
        if(TenthInstitute=='')
        {
            alert("please enter your 10th Institute Name");
            TenthInstituteObj.focus();
            TenthInstituteObj.selected();
         }
               
               var TenthInstituteLeng=TenthInstitute.length;
               var c1=0;
               var trimeTenthInstitute=TenthInstitute.trim();
               if(trimeTenthInstitute==0)
               {
                   alert("before 10th Institute Name space is not allow");
                   return false;
                        
               }
               if(trimeTenthInstitute.charCodeAt(0)==46)
               {
                   alert("10th Institute Name can not start with dot")
                   return false;
               }
                  var tring=1;
                  for(i=0;i<TenthInstituteLeng;i++)
                  { 
                    if(TenthInstitute.charCodeAt(i)==46&&TenthInstitute.charCodeAt(i+1)==46)
                    {
                        tring++;
                    }
                  }
                  if(tring>1)
                    {
                        alert("dot can not repeated for  10th Institute Name");
                        return false;
                    }
                  for(i=0;i<TenthInstituteLeng;i++)
                  {
                    if(!(TenthInstitute.charCodeAt(i)>='65' && TenthInstitute.charCodeAt(i)<='90') && !(TenthInstitute.charCodeAt(i)>='97' && TenthInstitute.charCodeAt(i)<='122')&& !(TenthInstitute.charCodeAt(i)==46)&& !(TenthInstitute.charCodeAt(i)==32))
                    {
                        c1=1;
                    }
                    if(c1==1)
                    {
                        alert("please enter only character and dot for 10th  Institute Name...");
                        return false;
                    }
                    
                  }
                
        var TenthJoiningDate=document.getElementById('TenthJoiningDateID').value;
        var TenthJoiningDateObj=document.getElementById('TenthJoiningDateID')
       
       if(TenthJoiningDate=='')
       {
           alert("please Enter Tenth Joining Year");
           TenthJoiningDateObj.focus();
           TenthJoiningDateObj.selected();
       }
            
       var trimTenthJoiningDate=TenthJoiningDate.trim();
       var TenthJoiningDatelen=TenthJoiningDate.length
       var mmm=0;
              
       if(TenthJoiningDatelen==0)
       {
           alert("before Tenth Joining Year space and 0 is not allow ")
           return false;
       } 
             for(i=0;i<TenthJoiningDatelen;i++)
             {
                if(!(TenthJoiningDate.charCodeAt(i)>=48&&TenthJoiningDate.charCodeAt(i)<=57))
                {
                    mmm=1;
                }
             }
             
             if(mmm==1)
             {
                alert("Tenth Joining Year must be number");
                return false;
                
             }
             if(TenthJoiningDatelen<4||TenthJoiningDatelen>4)
             {
                alert("Tenth Joining Year less than 4 and greater than 4 Digit is not allow");
                return false;
             }
             if(TenthJoiningDate>2017||TenthJoiningDate<1995)
             {
                alert("please Enter Tenth Joining Year should be in range of 1995 to 2017")
                return false;
             }
             
             
             // Tenth Leaving Year Validation
              var TenthLeavingDate=document.getElementById('TenthLeavingDateID').value;
              var TenthLeavingDateObj=document.getElementById('TenthLeavingDateID');
       
         if(TenthLeavingDate=='')
              {
                alert("please Enter Tenth  Leaving Year");
                TenthLeavingDateObj.focus();
                TenthLeavingDateObj.selected();
              }
            
               var trimTenthLeavingDate=TenthLeavingDate.trim();
               var TenthLeavingDatelen=TenthLeavingDate.length
               var a=0;
              
             if(TenthLeavingDatelen==0)
             {
                alert("before Tenth  Leaving Year space and 0 is not allow ")
                return false;
             } 
             for(i=0;i<TenthLeavingDatelen;i++)
             {
                if(!(TenthLeavingDate.charCodeAt(i)>=48&&TenthLeavingDate.charCodeAt(i)<=57))
                {
                    a=1;
                }
             }
             
             if(a==1)
             {
                alert("Tenth  Leaving Year must be number");
                return false;
                
             }
             if(TenthLeavingDatelen<4||TenthLeavingDatelen>4)
             {
                alert("Tenth Leaving Year less than 4 and greater than 4 Digit is not allow");
                return false;
             }
             if(TenthLeavingDate>2017||TenthLeavingDate<1995)
             {
                alert("please Enter Tenth  Leaving Year should be in range of 1995 to 2017")
                return false;
             }
             if(TenthLeavingDate<TenthJoiningDate)
             {
                alert("Joining year can not greater than Leaving year for 10th ");
                return false;
             }
             if(TenthLeavingDate-TenthJoiningDate<1)
             {
                alert("10th duration can not less than 1  year");
                return false;
             }
             //10th Grade validation
       
       var TenthGrade=document.getElementById('TenthGradeID').value;
       var TenthGradeobj=document.getElementById('TenthGradeID');
       if(TenthRad=='Yes')
       {
        
           if(TenthGrade=='')
           {
                alert("please Enter Your CGPA of tenth");
                TenthGradeobj.focus();
                TenthGradeobj.selected();
           }
            
            var trimTenthGrade=TenthGrade.trim();
            if(trimTenthGrade==0)
            {
                alert("space/zero  is not allow for tenth CGPA");
                return false;
            }
            var TenthGradelen=TenthGrade.length
            var m=0;
              
            
             for(i=0;i<TenthGradelen;i++)
             {
                if(!(TenthGrade.charCodeAt(i)>=48&&TenthGrade.charCodeAt(i)<=57)&&TenthGrade.charCodeAt(i)!=46)
                {
                    m=1;
                }
             }
             
             if(m==1)
             {
                alert("CGPA must be number for Tenth");
                return false;
                
             }
             if(TenthGradelen>5)
             {
                alert("CGPA greater than 5 Digit is not allow");
                return false;
             }
             if(TenthGrade>10)
             {
                alert("CGPA can't more than 10 for Tenth ");
                return false;
             }
             var tenth=0;
             for(i=0;i<TenthGradelen;i++)
                  { 
                    if(TenthGrade.charCodeAt(i)==46)
                    {
                        tenth++;
                    }
                  }
                  if(tenth>1)
                    {
                        alert("Invalid Tenth Cgpa more than dot is not allow");
                        return false;
                    }
       
       }
       else
       {
        if(TenthGrade=='')
           {
                alert("please Enter Marks in Percentage for Tenth");
                TenthGradeobj.focus();
                TenthGradeobj.selected();
           }
            
            var trimTenthGrade=TenthGrade.trim();
            if(trimTenthGrade==0)
            {
                alert("Zero/space is not allow for Tenth percentage");
                return false;
            }
            var TenthGradelen=TenthGrade.length
            var m=0;
              
             for(i=0;i<TenthGradelen;i++)
             {
                if(!(TenthGrade.charCodeAt(i)>=48&&TenthGrade.charCodeAt(i)<=57)&&TenthGrade.charCodeAt(i)!=46)
                {
                    m=1;
                }
             }
             
             if(m==1)
             {
                alert(" Percentage must be number for Tenth");
                return false;
                
             }
             if(TenthGradelen>5)
             {
                alert("percentage greater than 5 Digit is not allow for tenth");
                return false;
             }
             if(TenthGrade>100)
             {
                alert("marks can't more than 100 percentage for Tenth");
                return false;
             }
              var tenth2=0;
             for(i=0;i<TenthGradelen;i++)
                  { 
                    if(TenthGrade.charCodeAt(i)==46)
                    {
                        tenth2++;
                    }
                  }
                  if(tenth2>1)
                    {
                        alert("Invalid Tenth percentage....  more than 1 dot is not allow");
                        return false;
                    }
        
        
        
       }
       // Validation for 12TH 
      
     
        var TwelveSel=document.getElementById('TwelveSelID').value;
         
            if(TwelveSel=='NA')
            {
                alert("please select Diploma/12th degree");
                return false;
            }      
       
     if(TwelveSel=='12TH')
     {
        var TwelveInstitute=document.getElementById('TwelveInstituteID').value;
         var TwelveInstituteObj=document.getElementById('TwelveInstituteID');
                  
               
        if(TwelveInstitute=='')
        {
            alert("please enter your 12th Institute Name");
            TwelveInstituteObj.focus();
            TwelveInstituteObj.selected();
         }
               
               var TwelveInstituteLeng=TwelveInstitute.length;
               var c5=0;
               var trimeTwelveInstitute=TwelveInstitute.trim();
               if(trimeTwelveInstitute==0)
               {
                   alert("before 12TH Institute Name space is not allow");
                   return false;
                        
               }
               if(trimeTwelveInstitute.charCodeAt(0)==46)
               {
                   alert("12th Institute Name can not start with dot")
                   return false;
               }
                  var tring5=1;
                  for(i=0;i<TwelveInstituteLeng;i++)
                  { 
                    if(TwelveInstitute.charCodeAt(i)==46&&TwelveInstitute.charCodeAt(i+1)==46)
                    {
                        tring5++;
                    }
                  }
                  if(tring5>1)
                    {
                        alert("dot can not repeated for  12th Institute Name");
                        return false;
                    }
                  for(i=0;i<TwelveInstituteLeng;i++)
                  {
                    if(!(TwelveInstitute.charCodeAt(i)>='65' && TwelveInstitute.charCodeAt(i)<='90') && !(TwelveInstitute.charCodeAt(i)>='97' && TwelveInstitute.charCodeAt(i)<='122')&& !(TwelveInstitute.charCodeAt(i)==46)&& !(TwelveInstitute.charCodeAt(i)==32))
                    {
                        c5=1;
                    }
                    if(c5==1)
                    {
                        alert("please enter only character and dot for 12th  Institute Name...");
                        return false;
                    }
                    
                  }
                 
       var TwelveJoiningDate=document.getElementById('TwelveJoiningDateID').value;
       var TwelveJoiningDateobj=document.getElementById('TwelveJoiningDateID');
    
       if(TwelveJoiningDate=='')
       {
           alert("please Enter  12th Joining Year");
           TwelveJoiningDateobj.focus();
           TwelveJoiningDateobj.selected();
       }  
       var trimTwelveJoiningDate=TwelveJoiningDate.trim();
       var TwelveJoiningDatelen=TwelveJoiningDate.length
       var mmm=0;
              
       if(TwelveJoiningDatelen==0)
       {
           alert("before  12th Joining Year space and 0 is not allow ")
           return false;
       } 
             for(i=0;i<TwelveJoiningDatelen;i++)
             {
                if(!(TwelveJoiningDate.charCodeAt(i)>=48&&TwelveJoiningDate.charCodeAt(i)<=57))
                {
                    mmm=1;
                }
             }
             
             if(mmm==1)
             {
                alert(" 12th Joining Year must be number");
                return false;
                
             }
             if(TwelveJoiningDatelen<4||TwelveJoiningDatelen>4)
             {
                alert(" 12th Joining Year less than 4 and greater than 4 Digit is not allow");
                return false;
             }
             if(TwelveJoiningDate>2017||TwelveJoiningDate<1995)
             {
                alert("please Enter  12th Joining Year should be in range of 1995 to 2017")
                return false;
             }
       if(TenthLeavingDate>TwelveJoiningDate)
      {
        alert("12th joining Year Should not lass than 10th Leaving Year");
        return false;
      }
             
             // Tenth Leaving Year Validation
               var TwelveLeavingDate=document.getElementById('TwelveLeavingDateID').value;
                 var TwelveLeavingDateobj=document.getElementById('TwelveLeavingDateID');
       
         if(TwelveLeavingDate=='')
              {
                alert("please Enter 12th  Leaving Year");
                TwelveLeavingDateobj.focus();
                TwelveLeavingDateobj.selected();
              }
            
               var trimTwelveLeavingDate=TwelveLeavingDate.trim();
               var TwelveLeavingDatelen=TwelveLeavingDate.length
               var a=0;
              
             if(TenthLeavingDatelen==0)
             {
                alert("before  12th  Leaving Year space and 0 is not allow ")
                return false;
             } 
             for(i=0;i<TwelveLeavingDatelen;i++)
             {
                if(!(TwelveLeavingDate.charCodeAt(i)>=48&&TwelveLeavingDate.charCodeAt(i)<=57))
                {
                    a=1;
                }
             }
             
             if(a==1)
             {
                alert(" 12th  Leaving Year must be number");
                return false;
                
             }
             if(TwelveLeavingDatelen<4||TwelveLeavingDatelen>4)
             {
                alert(" 12th Leaving Year less than 4 and greater than 4 Digit is not allow");
                return false;
             }
             if(TwelveLeavingDate>2017||TwelveLeavingDate<1995)
             {
                alert("please Enter  12th Leaving Year should be in range of 1995 to 2017")
                return false;
             }
              if(TwelveLeavingDate<TwelveJoiningDate)
                 {
                    alert("leaving year should be greater than joining year");
                    return false;
                 }
                  if(TwelveLeavingDate-TwelveJoiningDate<2)
                  {
                    alert("12 duration less than 2 year is not allow ");
                    return false;
                  }
             //10th Grade validation
       
       var TweleveGrade=document.getElementById('TweleveGradeID').value;
         var TweleveGradeObj=document.getElementById('TweleveGradeID');
       
       var tweleveRad=window.document.frmPersonal.twelveCGPA.value;
       
       
       if(tweleveRad=='Yes')
       {
        
           if(TweleveGrade=='')
           {
                alert("please Enter Your CGPA of  12th");
                TweleveGradeObj.focus();
                TweleveGradeObj.selected();
           }
            
            var trimTweleveGrade=TweleveGrade.trim();
            if(trimTweleveGrade==0)
            {
                alert("space/Zero is not allow for twelve CGPA");
                return false;
            }
            var TweleveGradelen=TweleveGrade.length
            var m6=0;
              
            
             for(i=0;i<TweleveGradelen;i++)
             {
                if(!(TweleveGrade.charCodeAt(i)>=48&&TweleveGrade.charCodeAt(i)<=57)&&TweleveGrade.charCodeAt(i)!=46)
                {
                    m6=1;
                }
             }
             
             if(m6==1)
             {
                alert("CGPA must be number for  12th");
                return false;
                
             }
             if(TweleveGradelen>5)
             {
                alert("CGPA greater than 5 Digit is not allow for  12th");
                return false;
             }
             if(TweleveGrade>10)
             {
                alert("CGPA can't more than 10 for  12th ");
                return false;
             }
             var twelve=0;
             for(i=0;i<TweleveGradelen;i++)
                  { 
                    if(TweleveGrade.charCodeAt(i)==46)
                    {
                        twelve++;
                    }
                  }
                  if(twelve>1)
                    {
                        alert("Invalid Twelve Cgpa....  more than 1 dot is not allow");
                        return false;
                    }
        
       }
       else
       {
        if(TweleveGrade=='')
           {
                alert("please Enter Marks in Percentage for  12th");
                TweleveGradeObj.focus();
                TweleveGradeObj.selected();
           }
            
            var trimTenthGrade=TweleveGrade.trim();
            if(trimTenthGrade==0)
            {
                alert("space /zero is not allow for percentage for 12TH");
                return false;
            }
            var TweleveGradelen=TweleveGrade.length
            var m6=0;
              
            
             for(i=0;i<TweleveGradelen;i++)
             {
                if(!(TweleveGrade.charCodeAt(i)>=48&&TweleveGrade.charCodeAt(i)<=57)&&TweleveGrade.charCodeAt(i)!=46)
                {
                    m6=1;
                }
             }
             
             if(m6==1)
             {
                alert(" Percentage must be number for  12th");
                return false;
                
             }
             if(TweleveGradelen>5)
             {
                alert("percentage greater than 5 Digit is not allow for  12th");
                return false;
             }
             if(TweleveGrade>100)
             {
                alert("marks can't more than 100 percentage for  12th");
                return false;
             }
              var twelve2=0;
             for(i=0;i<TweleveGradelen;i++)
                  { 
                    if(TweleveGrade.charCodeAt(i)==46)
                    {
                        twelve2++;
                    }
                  }
                  if(twelve2>1)
                    {
                        alert("Invalid 12th Percentage....  more than 1 dot is not allow");
                        return false;
                    }
        
        
        }
       }
        if(TwelveSel=='Diploma')
     {
        var TwelveInstitute=document.getElementById('TwelveInstituteID').value;
         var TwelveInstituteObj=document.getElementById('TwelveInstituteID');
                  
               
        if(TwelveInstitute=='')
        {
            alert("please enter your  Diploma degree Institute Name");
            TwelveInstituteObj.focus();
            TwelveInstituteObj.selected();
         }
               
               var TwelveInstituteLeng=TwelveInstitute.length;
               var c5=0;
               var trimeTwelveInstitute=TwelveInstitute.trim();
               if(trimeTwelveInstitute==0)
               {
                   alert("before Diploma degree Institute Name space is not allow");
                   return false;
                        
               }
               if(trimeTwelveInstitute.charCodeAt(0)==46)
               {
                   alert(" Diploma degree Institute Name can not start with dot")
                   return false;
               }
                  var tring5=1;
                  for(i=0;i<TwelveInstituteLeng;i++)
                  { 
                    if(TwelveInstitute.charCodeAt(i)==46&&TwelveInstitute.charCodeAt(i+1)==46)
                    {
                        tring5++;
                    }
                  }
                  if(tring5>1)
                    {
                        alert("dot can not repeated for  Diploma degree Institute Name");
                        return false;
                    }
                  for(i=0;i<TwelveInstituteLeng;i++)
                  {
                    if(!(TwelveInstitute.charCodeAt(i)>='65' && TwelveInstitute.charCodeAt(i)<='90') && !(TwelveInstitute.charCodeAt(i)>='97' && TwelveInstitute.charCodeAt(i)<='122')&& !(TwelveInstitute.charCodeAt(i)==46)&& !(TwelveInstitute.charCodeAt(i)==32))
                    {
                        c5=1;
                    }
                    if(c5==1)
                    {
                        alert("please enter only character and dot for Diploma degree  Institute Name...");
                        return false;
                    }
                    
                  }
                 
       var TwelveJoiningDate=document.getElementById('TwelveJoiningDateID').value;
       var TwelveJoiningDateobj=document.getElementById('TwelveJoiningDateID');
    
       if(TwelveJoiningDate=='')
       {
           alert("please Enter   Diploma degree Joining Year");
           TwelveJoiningDateobj.focus();
           TwelveJoiningDateobj.selected();
       }  
       var trimTwelveJoiningDate=TwelveJoiningDate.trim();
       var TwelveJoiningDatelen=TwelveJoiningDate.length
       var mmm=0;
              
       if(TwelveJoiningDatelen==0)
       {
           alert("before   Diploma degree Joining Year space and 0 is not allow ")
           return false;
       } 
             for(i=0;i<TwelveJoiningDatelen;i++)
             {
                if(!(TwelveJoiningDate.charCodeAt(i)>=48&&TwelveJoiningDate.charCodeAt(i)<=57))
                {
                    mmm=1;
                }
             }
             
             if(mmm==1)
             {
                alert("  Diploma degree Joining Year must be number");
                return false;
                
             }
             if(TwelveJoiningDatelen<4||TwelveJoiningDatelen>4)
             {
                alert("  Diploma degree Joining Year less than 4 and greater than 4 Digit is not allow");
                return false;
             }
             if(TwelveJoiningDate>2017||TwelveJoiningDate<1995)
             {
                alert("please Enter  Diploma degree Joining Year should be in range of 1995 to 2017")
                return false;
             }
       if(TenthLeavingDate>TwelveJoiningDate)
      {
        alert(" Diploma degree joining Year Should not lass than 10th Leaving Year");
        return false;
      }
             
             // Tenth Leaving Year Validation
               var TwelveLeavingDate=document.getElementById('TwelveLeavingDateID').value;
                 var TwelveLeavingDateobj=document.getElementById('TwelveLeavingDateID');
       
         if(TwelveLeavingDate=='')
              {
                alert("please Enter 12th  Leaving Year");
                TwelveLeavingDateobj.focus();
                TwelveLeavingDateobj.selected();
              }
            
               var trimTwelveLeavingDate=TwelveLeavingDate.trim();
               var TwelveLeavingDatelen=TwelveLeavingDate.length
               var a=0;
              
             if(TenthLeavingDatelen==0)
             {
                alert("before   Diploma degree  Leaving Year space and 0 is not allow ")
                return false;
             } 
             for(i=0;i<TwelveLeavingDatelen;i++)
             {
                if(!(TwelveLeavingDate.charCodeAt(i)>=48&&TwelveLeavingDate.charCodeAt(i)<=57))
                {
                    a=1;
                }
             }
             
             if(a==1)
             {
                alert("  Diploma degree  Leaving Year must be number");
                return false;
                
             }
             if(TwelveLeavingDatelen<4||TwelveLeavingDatelen>4)
             {
                alert("  Diploma degree Leaving Year less than 4 and greater than 4 Digit is not allow");
                return false;
             }
             if(TwelveLeavingDate>2017||TwelveLeavingDate<1995)
             {
                alert("please Enter   Diploma degree Leaving Year should be in range of 1995 to 2017")
                return false;
             }
              if(TwelveLeavingDate<TwelveJoiningDate)
                 {
                    alert("leaving year should be greater than joining year for diploma degree");
                    return false;
                 }
                  if(TwelveLeavingDate-TwelveJoiningDate<3)
                  {
                    alert(" Diploma degree duration less than 3 year is not allow ");
                    return false;
                  }
             //12th Grade validation
       
       var TweleveGrade=document.getElementById('TweleveGradeID').value;
         var TweleveGradeObj=document.getElementById('TweleveGradeID');
       
       var tweleveRad=window.document.frmPersonal.twelveCGPA.value;
       
       
       if(tweleveRad=='Yes')
       {
        
           if(TweleveGrade=='')
           {
                alert("please Enter Your CGPA of   Diploma degree");
                TweleveGradeObj.focus();
                TweleveGradeObj.selected();
           }
            
            var trimTweleveGrade=TweleveGrade.trim();
            if(trimTweleveGrade==0)
            {
                alert("space/Zero is not allow for Diploma degree CGPA");
                return false;
            }
            var TweleveGradelen=TweleveGrade.length
            var m6=0;
              
            
             for(i=0;i<TweleveGradelen;i++)
             {
                if(!(TweleveGrade.charCodeAt(i)>=48&&TweleveGrade.charCodeAt(i)<=57)&&TweleveGrade.charCodeAt(i)!=46)
                {
                    m6=1;
                }
             }
             
             if(m6==1)
             {
                alert("CGPA must be number for   Diploma degree");
                return false;
                
             }
             if(TweleveGradelen>5)
             {
                alert("CGPA greater than 5 Digit is not allow for   Diploma degree");
                return false;
             }
             if(TweleveGrade>10)
             {
                alert("CGPA can't more than 10 for   Diploma degree ");
                return false;
             }
             var twelve=0;
             for(i=0;i<TweleveGradelen;i++)
                  { 
                    if(TweleveGrade.charCodeAt(i)==46)
                    {
                        twelve++;
                    }
                  }
                  if(twelve>1)
                    {
                        alert("Invalid  Diploma degree Cgpa....  more than 1 dot is not allow");
                        return false;
                    }
        
       }
       else
       {
        if(TweleveGrade=='')
           {
                alert("please Enter Marks in Percentage for  Diploma degree");
                TweleveGradeObj.focus();
                TweleveGradeObj.selected();
           }
            
            var trimTenthGrade=TweleveGrade.trim();
            if(trimTenthGrade==0)
            {
                alert("space /zero is not allow for percentage for  Diploma degree");
                return false;
            }
            var TweleveGradelen=TweleveGrade.length
            var m6=0;
              
            
             for(i=0;i<TweleveGradelen;i++)
             {
                if(!(TweleveGrade.charCodeAt(i)>=48&&TweleveGrade.charCodeAt(i)<=57)&&TweleveGrade.charCodeAt(i)!=46)
                {
                    m6=1;
                }
             }
             
             if(m6==1)
             {
                alert(" Percentage must be number for   Diploma degree");
                return false;
                
             }
             if(TweleveGradelen>5)
             {
                alert("percentage greater than 5 Digit is not allow for   Diploma degree");
                return false;
             }
             if(TweleveGrade>100)
             {
                alert("marks can't more than 100 percentage for  Diploma degree");
                return false;
             }
              var twelve2=0;
             for(i=0;i<TweleveGradelen;i++)
                  { 
                    if(TweleveGrade.charCodeAt(i)==46)
                    {
                        twelve2++;
                    }
                  }
                  if(twelve2>1)
                    {
                        alert("Invalid  Diploma degree Percentage....  more than 1 dot is not allow");
                        return false;
                    }
        
        
        }
       }
       
       
       //.........................Graduation validation.......................................
   
       
        // Validation for B.tech 
      
        var Graduation=document.getElementById('GraduationSelID').value;
         
            if(Graduation=='NA')
            {
                alert("please select Graduation degree");
                return false;
            }      
        
             
                //Graduation validation
                
                if(Graduation=='B.tech')
        {  
             var BtechInstitute=document.getElementById('BtechInstituteID').value;
             var BtechInstituteObj=document.getElementById('BtechInstituteID');
                  
            if(BtechInstitute=='')
            {
                alert("please enter your B.tech Institute Name");
                BtechInstituteObj.focus();
                BtechInstituteObj.selected();
             }
                   
                   var BtechInstituteLeng=BtechInstitute.length;
                   var cbtech=0;
                   var trimeBtechInstitute=BtechInstitute.trim();
                   if(trimeBtechInstitute==0)
                   {
                       alert("before B.tech Institute Name space is not allow");
                       return false;
                            
                   }
                   if(trimeBtechInstitute.charCodeAt(0)==46)
                   {
                       alert("B.tech Institute Name can not start with dot")
                       return false;
                   }
                      var Btechcount=1;
                      for(i=0;i<BtechInstituteLeng;i++)
                      { 
                        if(BtechInstitute.charCodeAt(i)==46&&BtechInstitute.charCodeAt(i+1)==46)
                        {
                            Btechcount++;
                        }
                      }
                      if(Btechcount>1)
                        {
                            alert("dot can not repeated for  B.tech Institute Name");
                            return false;
                        }
                      for(i=0;i<BtechInstituteLeng;i++)
                      {
                        if(!(BtechInstitute.charCodeAt(i)>='65' && BtechInstitute.charCodeAt(i)<='90') && !(BtechInstitute.charCodeAt(i)>='97' && BtechInstitute.charCodeAt(i)<='122')&& !(BtechInstitute.charCodeAt(i)==46)&& !(BtechInstitute.charCodeAt(i)==32))
                        {
                            alert("please enter only character and dot for B.tech  Institute Name...");
                            return false;
                        }
                        
                      }
                      
                    var BtechBranch=document.getElementById('BtechBranchID').value;
           var BtechBranchObj=document.getElementById('BtechBranchID');  
           if(BtechBranch=='NA')
           {
               alert("please Enter B.tech Branch");
               BtechBranchObj.focus();
               BtechBranchObj.selected();
            
           }
                     
           var BtechJoiningDateDate=document.getElementById('BtechJoiningDateID').value;
           var BtechJoiningDateobj=document.getElementById('BtechJoiningDateID');
           
           if(BtechJoiningDateDate=='')
           {
               alert("please Enter B.tech Joining Year");
               BtechJoiningDateobj.focus();
               BtechJoiningDateobj.selected();
           }
                
           var trimBtechJoiningDateDate=BtechJoiningDateDate.trim();
           var BtechJoiningDateDatelen=BtechJoiningDateDate.length
           var mmm=0;
                  
           if(BtechJoiningDateDatelen==0)
           {
               alert("before  B.tech Joining Year space and 0 is not allow ")
               return false;
           } 
                 for(i=0;i<BtechJoiningDateDatelen;i++)
                 {
                    if(!(BtechJoiningDateDate.charCodeAt(i)>=48&&BtechJoiningDateDate.charCodeAt(i)<=57))
                    {
                        mmm=1;
                    }
                 }
                 
                 if(mmm==1)
                 {
                    alert(" B.tech Joining Year must be number");
                    return false;
                    
                 }
                 if(BtechJoiningDateDatelen<4||BtechJoiningDateDatelen>4)
                 {
                    alert(" B.tech Joining Year less than 4 and greater than 4 Digit is not allow");
                    return false;
                 }
                 if(BtechJoiningDateDate>2017||BtechJoiningDateDate<1995)
                 {
                    alert("please Enter  B.tech Joining Year should be in range of 1995 to 2017")
                    return false;
                 }
                 //TwelveLeavingDate
           if(TwelveLeavingDate>BtechJoiningDateDate)
              {
                alert(" B.tech joining Year Should not lass than 12th Leaving Year");
                return false;
              }
                 // Tenth Leaving Year Validation
              
                   var BtechLeavingDate=document.getElementById('BtechLeavingDateID').value;
                   var BtechLeavingDateobj=document.getElementById('BtechLeavingDateID');
           
             if(BtechLeavingDate=='')
                  {
                    alert("please Enter B.tech  Leaving Year");
                    BtechLeavingDateobj.focus();
                    BtechLeavingDateobj.selected();
                  }
                
                   var trimBtechLeavingDate=BtechLeavingDate.trim();
                   var BtechLeavingDatelen=BtechLeavingDate.length
                   var a=0;
                  
                 if(BtechLeavingDatelen==0)
                 {
                    alert("before  B.tech  Leaving Year space and 0 is not allow ");
                    return false;
                 } 
                 for(i=0;i<BtechLeavingDatelen;i++)
                 {
                    if(!(BtechLeavingDate.charCodeAt(i)>=48&&BtechLeavingDate.charCodeAt(i)<=57))
                    {
                        a=1;
                    }
                 }
                 
                 if(a==1)
                 {
                    alert(" B.tech  Leaving Year must be number");
                    return false;
                    
                 }
                 if(BtechLeavingDatelen<4||BtechLeavingDatelen>4)
                 {
                    alert(" B.tech Leaving Year less than 4 and greater than 4 Digit is not allow");
                    return false;
                 }
                 if(BtechLeavingDate>2017||BtechLeavingDate<1995)
                 {
                    alert("please Enter  B.tech Leaving Year should be in range of 1995 to 2017")
                    return false;
                 }
                 if(BtechLeavingDate<BtechJoiningDateDate)
                 {
                    alert("leaving year should be greater than joining year for B.tech");
                    return false;
                 }
                  if(BtechLeavingDate-BtechJoiningDateDate<4)
                 {
                    alert("B.tech duration less than 4 year is not allow");
                    return false;
                 }
                 //B.tech Grade validationBtechCgpa
           var BtechRadio=window.document.frmPersonal.RadioBtech.value;
           //alert(BtechRadio);
          
           var BtechCgpa=document.getElementById('BtechCgpaID').value;
           var BtechCgpaObj=document.getElementById('BtechCgpaID');
           
           if(BtechRadio=='Yes')
           {
            
               if(BtechCgpa=='')
               {
                    alert("please Enter Your CGPA of  B.tech");
                    BtechCgpaObj.focus();
                    BtechCgpaObj.selected();
               }
                
                var trimBtechCgpa=BtechCgpa.trim();
                if(trimBtechCgpa==0)
                {
                    alert("space/zero is not allow for B.tech graduation");
                    return false;
                }
                var BtechCgpalen=BtechCgpa.length
                var m8=0;
                  
                
                 for(i=0;i<BtechCgpalen;i++)
                 {
                    if(!(BtechCgpa.charCodeAt(i)>=48&&BtechCgpa.charCodeAt(i)<=57)&&BtechCgpa.charCodeAt(i)!=46)
                    {
                        m8=1;
                    }
                 }
                 
                 if(m8==1)
                 {
                    alert("CGPA must be number for B.tech");
                    return false;
                    
                 }
                 if(BtechCgpalen>5)
                 {
                    alert("CGPA greater than 5 Digit is not allow for  B.tech");
                    return false;
                 }
                 if(BtechCgpa>10)
                 {
                    alert("CGPA can't more than 10 for  B.tech ");
                    return false;
                 }
                 var Btech=0;
             for(i=0;i<BtechCgpalen;i++)
                  { 
                    if(BtechCgpa.charCodeAt(i)==46)
                    {
                        Btech++;
                    }
                  }
                  if(Btech>1)
                    {
                        alert("Invalid B.tech CGPA....  more than 1 dot is not allow");
                        return false;
                    }
        
           }
           else
           {
            if(BtechCgpa=='')
               {
                    alert("please Enter Marks in Percentage for B.tech");
                    BtechCgpaObj.focus();
                    BtechCgpaObj.selected();
               }
                
                var trimBtechCgpa=BtechCgpa.trim();
                var BtechCgpalen=BtechCgpa.length
                var m9=0;
                  
                
                 for(i=0;i<BtechCgpalen;i++)
                 {
                    if(!(BtechCgpa.charCodeAt(i)>=48&&BtechCgpa.charCodeAt(i)<=57)&&BtechCgpa.charCodeAt(i)!=46)
                    {
                        m9=1;
                    }
                 }
                 
                 if(m9==1)
                 {
                    alert(" Percentage must be number for  B.tech");
                    return false;
                    
                 }
                 if(BtechCgpalen>5)
                 {
                    alert("percentage greater than 5 Digit is not allow for  B.tech");
                    return false;
                 }
                 if(BtechCgpa>100)
                 {
                    alert("marks can't more than 100 percentage for B.tech");
                    return false;
                 }
                  var Btech2=0;
             for(i=0;i<BtechCgpalen;i++)
                  { 
                    if(BtechCgpa.charCodeAt(i)==46)
                    {
                        Btech2++;
                    }
                  }
                  if(Btech2>1)
                    {
                        alert("Invalid B.tech Percentage....  more than 1 dot is not allow");
                        return false;
                    }
           
        }
        
       }
       if(Graduation=='B.Sc')
      { 
             var BscInstituteVar=document.getElementById('BscInstituteID').value;
             var BscInstituteObj=document.getElementById('BscInstituteID');
                      
                   
            if(BscInstituteVar=='')
            {
                alert("please enter your B.Sc Institute Name");
                BscInstituteObj.focus();
                BscInstituteObj.selected();
             }
                   
                   var BscInstituteLeng=BscInstituteVar.length;
                   
                   var trimeBscInstitute=BscInstituteVar.trim();
                   if(trimeBscInstitute==0)
                   {
                       alert("before B.Sc Institute Name space is not allow");
                       return false;
                            
                   }
                   if(trimeBscInstitute.charCodeAt(0)==46)
                   {
                       alert("B.Sc Institute Name can not start with dot")
                       return false;
                   }
                      var bsccount=1;
                      for(i=0;i<BscInstituteLeng;i++)
                      { 
                        if(BscInstituteVar.charCodeAt(i)==46&&BscInstituteVar.charCodeAt(i+1)==46)
                        {
                            bsccountv++;
                        }
                      }
                      if(bsccount>1)
                        {
                            alert("dot can not repeated for  B.Sc Institute Name");
                            return false;
                        }
                      for(i=0;i<BscInstituteLeng;i++)
                      {
                        if(!(BscInstituteVar.charCodeAt(i)>='65' && BscInstituteVar.charCodeAt(i)<='90') && !(BscInstituteVar.charCodeAt(i)>='97' && BscInstituteVar.charCodeAt(i)<='122')&& !(BscInstituteVar.charCodeAt(i)==46)&& !(BscInstituteVar.charCodeAt(i)==32))
                        {
                            alert("please enter only character and dot for B.Sc  Institute Name...");
                            return false;
                        }
                        
                        
                      }
                      
                    var BscSpecialization=document.getElementById('BscSpecializationID').value;
           var BscSpecializationObj=document.getElementById('BscSpecializationID');  
           if(BscSpecialization=='NA')
           {
               alert("please Enter B.Sc Specialization");
               BscSpecializationObj.focus();
               BscSpecializationObj.selected();
               return false;
            
           }
           
                   
           var BscJoiningDate=document.getElementById('BscJoiningDateID').value;
           var BscJoiningDateobj=document.getElementById('BscJoiningDateID');
           
           
           if(BscJoiningDate=='')
           {
               alert("please Enter B.Sc Joining Year");
               BscJoiningDateobj.focus();
               BscJoiningDateobj.selected();
           }
              
           var BscJoiningDatelen=BscJoiningDate.length
           var mmm=0;
                  
           if(BscJoiningDatelen==0)
           {
               alert("before  B.Sc Joining Year space and 0 is not allow ")
               return false;
           } 
                 for(i=0;i<BscJoiningDatelen;i++)
                 {
                    if(!(BscJoiningDate.charCodeAt(i)>=48&&BscJoiningDate.charCodeAt(i)<=57))
                    {
                       alert("B.Sc Joining Year must be number");
                    return false;
                    }
                 }
                 
                 if(BscJoiningDatelen<4||BscJoiningDatelen>4)
                 {
                    alert(" B.Sc Joining Year less than 4 and greater than 4 Digit is not allow");
                    return false;
                 }
                 if(BscJoiningDate>2017||BscJoiningDate<1995)
                 {
                    alert("please Enter  B.Sc Joining Year should be in range of 1995 to 2017")
                    return false;
                 }
           if(TwelveLeavingDate>BscJoiningDate)
              {
                alert(" B.Sc joining Year Should not lass than 12th Leaving Year");
                return false;
              }
              
                 // Tenth Leaving Year Validation
              
                   var BscLeavingDate=document.getElementById('BscLeavingDateID').value;
                   var BscLeavingDateobj=document.getElementById('BscLeavingDateID');
           
             if(BscLeavingDate=='')
                  {
                    alert("please Enter B.Sc  Leaving Year");
                    BscLeavingDateobj.focus();
                    BscLeavingDateobj.selected();
                  }
                
                   var BscLeavingDatelen=BscLeavingDate.length
                   var a=0;
                  
                 if(BscLeavingDatelen==0)
                 {
                    alert("before  B.Sc  Leaving Year space and 0 is not allow ")
                    return false;
                 } 
                 for(i=0;i<BscLeavingDatelen;i++)
                 {
                    if(!(BscLeavingDate.charCodeAt(i)>=48&&BscLeavingDate.charCodeAt(i)<=57))
                    {
                        alert(" B.Sc  Leaving Year must be number");
                    return false;
                    }
                 }
                 
                 if(BscLeavingDatelen<4||BscLeavingDatelen>4)
                 {
                    alert(" B.Sc Leaving Year less than 4 and greater than 4 Digit is not allow");
                    return false;
                 }
                 if(BscLeavingDate>2017||BscLeavingDate<1995)
                 {
                    alert("please Enter  B.Sc Leaving Year should be in range of 1995 to 2017")
                    return false;
                 }
                 if(BscLeavingDate<BscJoiningDate)
                 {
                    alert("leaving year should be greater than joining year for B.Sc");
                    return false;
                 }
                 if(BscLeavingDate-BscJoiningDate<3)
                 {
                    alert("B.sc duration can not less than 3");
                    return false;
                 }
                 
                 //B.tech Grade validationBtechCgpa
           var BscRadiobutt=window.document.frmPersonal.BscRadio.value;
          
          
           var BscCgpaVar=document.getElementById('BscCgpaID').value;
           var BscCgpaObj=document.getElementById('BscCgpaID');
            
           if(BscRadiobutt=='Yes')
           {
            
               if(BscCgpaVar=='')
               {
                    alert("please Enter Your CGPA of  B.Sc");
                    BscCgpaObj.focus();
                    BscCgpaObj.selected();
               }
                
                var trimBscCgpa=BscCgpaVar.trim();
                if(trimBscCgpa==0)
                {
                    alert("space/zero is not allow for CGPA  for B.sc");
                    return false;
                }
                var BscCgpalen=BscCgpaVar.length
               
                 for(i=0;i<BscCgpalen;i++)
                 {
                    if(!(BscCgpaVar.charCodeAt(i)>=48&&BscCgpaVar.charCodeAt(i)<=57)&&BscCgpaVar.charCodeAt(i)!=46)
                    {
                       alert("CGPA must be number for B.Sc");
                      return false;
                    }
                 }
                 
                
                 if(BscCgpalen>5)
                 {
                    alert("CGPA greater than 5 Digit is not allow for  B.Sc");
                    return false;
                 }
                 if(BscCgpaVar>10)
                 {
                    alert("CGPA can't more than 10 for  B.Sc ");
                    return false;
                 }
                 var Bsc=0;
             for(i=0;i<BscCgpalen;i++)
                  { 
                    if(BscCgpaVar.charCodeAt(i)==46)
                    {
                        Bsc++;
                    }
                  }
                  if(Bsc>1)
                    {
                        alert("Invalid Bsc CGPA....  more than 1 dot is not allow");
                        return false;
                    }
                
           }
           else
           {
            if(BscCgpaVar=='')
               {
                    alert("please Enter Marks in Percentage for B.Sc");
                    BscCgpaObj.focus();
                    BscCgpaObj.selected();
               }
                
                
                var BscCgpalen=BscCgpaVar.length
                var BSCpercentagetrim=BscCgpaVar.trim();
                if(BSCpercentagetrim==0)
                {
                    alert("space/zero is not allow for B.Sc Percentage");
                    return false;
                }

                 for(i=0;i<BscCgpalen;i++)
                 {
                    if(!(BscCgpaVar.charCodeAt(i)>=48&&BscCgpaVar.charCodeAt(i)<=57)&&BscCgpaVar.charCodeAt(i)!=46)
                    {
                        alert(" Percentage must be number for  B.Sc");
                    return false;
                    }
                 }
                 
                
                 if(BscCgpalen>5)
                 {
                    alert("percentage greater than 5 Digit is not allow for  B.Sc");
                    return false;
                 }
                 if(BscCgpaVar>100)
                 {
                    alert("marks can't more than 100 percentage for B.Sc");
                    return false;
                 }
             var Bsc=0;
             for(i=0;i<BscCgpalen;i++)
                  { 
                    if(BscCgpaVar.charCodeAt(i)==46)
                    {
                        Bsc++;
                    }
                  }
                  if(Bsc>1)
                    {
                        alert("Invalid Bsc Percentage....  more than 1 dot is not allow");
                        return false;
                    }
            
        }
        
       }
       
       
       
       if(Graduation=='others')
      { 
            var OthersGradutionDegreeVar=document.getElementById('OthersGradutionDegreeID').value;
             var OthersGradutionDegreeObj=document.getElementById('OthersGradutionDegreeID');
                      
                   
            if(OthersGradutionDegreeVar=='')
            {
                alert("please enter your Others Graduation Degree");
                OthersGradutionDegreeObj.focus();
                OthersGradutionDegreeObj.selected();
             }
                   
                   var OthersGradutionDegreeLeng=OthersGradutionDegreeVar.length;
                   
                   var trimeOthersGradutionDegree=OthersGradutionDegreeVar.trim();
                   if(trimeOthersGradutionDegree==0)
                   {
                       alert("before Others Graduation Degree space is not allow");
                       return false;
                            
                   }
                   if(trimeOthersGradutionDegree.charCodeAt(0)==46)
                   {
                       alert("Others Graduation Degree can not start with dot")
                       return false;
                   }
                      
                      for(i=0;i<OthersGradutionDegreeLeng;i++)
                      { 
                        if(OthersGradutionDegreeVar.charCodeAt(i)==46&&OthersGradutionDegreeVar.charCodeAt(i+1)==46)
                        {
                            alert("dot can not repeated for  Others Graduation Degree");
                            return false;
                        }
                      }
                      
                      for(i=0;i<OthersGradutionDegreeLeng;i++)
                      {
                        if(!(OthersGradutionDegreeVar.charCodeAt(i)>='65' && OthersGradutionDegreeVar.charCodeAt(i)<='90') && !(OthersGradutionDegreeVar.charCodeAt(i)>='97' && OthersGradutionDegreeVar.charCodeAt(i)<='122')&& !(OthersGradutionDegreeVar.charCodeAt(i)==46)&& !(OthersGradutionDegreeVar.charCodeAt(i)==32))
                        {
                            alert("please enter only character and dot for Others Graduation  Degree...");
                            return false;
                        }
                        
                        
                      }
                      
                      
             var OtherGraduationInstituteVar=document.getElementById('OtherGraduationInstituteID').value;
             var OtherGraduationInstituteObj=document.getElementById('OtherGraduationInstituteID');
                  
            if(OtherGraduationInstituteVar=='')
            {
                alert("please enter your Others Graduation Institute Name");
                OtherGraduationInstituteObj.focus();
                OtherGraduationInstituteObj.selected();
             }
                   
                   var OtherGraduationInstituteLeng=OtherGraduationInstituteVar.length;
                   
                   var trimeOtherGraduationInstitute=OtherGraduationInstituteVar.trim();
                   if(trimeOtherGraduationInstitute==0)
                   {
                       alert("before Others Graduation Institute Name space is not allow");
                       return false;
                            
                   }
                   if(trimeOtherGraduationInstitute.charCodeAt(0)==46)
                   {
                       alert("Others Graduation Institute Name can not start with dot")
                       return false;
                   }
                      var bsccount=1;
                      for(i=0;i<OtherGraduationInstituteLeng;i++)
                      { 
                        if(OtherGraduationInstituteVar.charCodeAt(i)==46&&OtherGraduationInstituteVar.charCodeAt(i+1)==46)
                        {
                            alert("dot can not repeated for  Others Graduation Institute Name");
                            return false;
                        }
                      }
                      
                      for(i=0;i<OtherGraduationInstituteLeng;i++)
                      {
                        if(!(OtherGraduationInstituteVar.charCodeAt(i)>='65' && OtherGraduationInstituteVar.charCodeAt(i)<='90') && !(OtherGraduationInstituteVar.charCodeAt(i)>='97' && OtherGraduationInstituteVar.charCodeAt(i)<='122')&& !(OtherGraduationInstituteVar.charCodeAt(i)==46)&& !(OtherGraduationInstituteVar.charCodeAt(i)==32))
                        {
                            alert("please enter only character and dot for Others Graduation  Institute Name...");
                            return false;
                        }
                        
                        
                      }
                      
                    var OtherGraduationSpecialization=document.getElementById('OtherGraduationSpecializationID').value;
           var OtherGraduationSpecializationObj=document.getElementById('OtherGraduationSpecializationID');  
           if(OtherGraduationSpecialization=='')
           {
               alert("please Enter Others Graduation Specialization");
               OtherGraduationSpecializationObj.focus();
               OtherGraduationSpecializationObj.selected();
               return false;
            
           }
                   
           var OtherGraduationJoiningDateVar=document.getElementById('OtherGraduationJoiningDateID').value;
           var OtherGraduationJoiningDateObj=document.getElementById('OtherGraduationJoiningDateID');
           
           if(OtherGraduationJoiningDateVar=='')
           {
               alert("please Enter Others Graduation Joining Year");
               OtherGraduationJoiningDateObj.focus();
               OtherGraduationJoiningDateObj.selected();
           }
               
           var OtherGraduationJoiningDatelen=OtherGraduationJoiningDateVar.length
             
           if(OtherGraduationJoiningDatelen==0)
           {
               alert("before  Others Graduation Joining Year space and 0 is not allow ")
               return false;
           } 
                 for(i=0;i<OtherGraduationJoiningDatelen;i++)
                 {
                    if(!(OtherGraduationJoiningDateVar.charCodeAt(i)>=48&&OtherGraduationJoiningDateVar.charCodeAt(i)<=57))
                    {
                       alert("Others Graduation Joining Year must be number");
                    return false;
                    }
                 }
                 
                 if(OtherGraduationJoiningDatelen<4||OtherGraduationJoiningDatelen>4)
                 {
                    alert(" Others Graduation Joining Year less than 4 and greater than 4 Digit is not allow");
                    return false;
                 }
                 if(OtherGraduationJoiningDateVar>2017||OtherGraduationJoiningDateVar<1995)
                 {
                    alert("please Enter Others Graduation Joining Year should be in range of 1995 to 2017")
                    return false;
                 }
           if(TwelveLeavingDate>BscJoiningDate)
              {
                alert(" Others Graduation joining Year Should not lass than 12th Leaving Year");
                return false;
              }
                 
                 // Tenth Leaving Year Validation
              
                   var OtherGraduationLeavingDate=document.getElementById('OtherGraduationLeavingDateID').value;
                   var OtherGraduationLeavingDateobj=document.getElementById('OtherGraduationLeavingDateID');
           
             if(OtherGraduationLeavingDate=='')
                  {
                    alert("please Enter Others Graduation  Leaving Year");
                    OtherGraduationLeavingDateobj.focus();
                    OtherGraduationLeavingDateobj.selected();
                  }
                
                   var OtherGraduationLeavingDatelen=OtherGraduationLeavingDate.length
                   var a=0;
                  
                 if(OtherGraduationLeavingDatelen==0)
                 {
                    alert("before  Others Graduation  Leaving Year space and 0 is not allow ")
                    return false;
                 } 
                 for(i=0;i<OtherGraduationLeavingDatelen;i++)
                 {
                    if(!(OtherGraduationLeavingDate.charCodeAt(i)>=48&&OtherGraduationLeavingDate.charCodeAt(i)<=57))
                    {
                        alert(" Others Graduation  Leaving Year must be number");
                    return false;
                    }
                 }
                 
                
                 if(OtherGraduationLeavingDatelen<4||OtherGraduationLeavingDatelen>4)
                 {
                    alert(" Others Graduation Leaving Year less than 4 and greater than 4 Digit is not allow");
                    return false;
                 }
                 if(OtherGraduationLeavingDate>2017||OtherGraduationLeavingDate<1995)
                 {
                    alert("please Enter  Others Graduation Leaving Year should be in range of 1995 to 2017")
                    return false;
                 }
                 if(OtherGraduationLeavingDate<OtherGraduationJoiningDateVar)
                 {
                    alert("leaving year should be greater than joining year for Others Graduation");
                    return false;
                 }
                 
                 //B.tech Grade validationBtechCgpa
           var OthersGradutionRad=window.document.frmPersonal.OthersGradutionRadio.value;
          
           var OtherGraduationCgpaVar=document.getElementById('OtherGraduationCgpaID').value;
           var BscCgpaObj=document.getElementById('OtherGraduationCgpaID');
            
          
           if(OthersGradutionRad=='Yes')
           {
            
               if(OtherGraduationCgpaVar=='')
               {
                    alert("please Enter Your CGPA of Others Graduation");
                    BscCgpaObj.focus();
                    BscCgpaObj.selected();
               }
                
                var trimBscCgpa=OtherGraduationCgpaVar.trim();
                if(trimBscCgpa==0)
                {
                    alert("space/zero is not allow for CGPA of other greduation degree");
                    return false;
                }
                
                var BscCgpalen=OtherGraduationCgpaVar.length
                var m8=0;
                  
                
                 for(i=0;i<BscCgpalen;i++)
                 {
                    if(!(OtherGraduationCgpaVar.charCodeAt(i)>=48&&OtherGraduationCgpaVar.charCodeAt(i)<=57)&&OtherGraduationCgpaVar.charCodeAt(i)!=46)
                    {
                        m8=1;
                    }
                 }
                 
                 if(m8==1)
                 {
                    alert("CGPA must be number for Others Graduation");
                    return false;
                    
                 }
                 if(BscCgpalen>5)
                 {
                    alert("CGPA greater than 5 Digit is not allow for  Others Graduation");
                    return false;
                 }
                 if(OtherGraduationCgpaVar>10)
                 {
                    alert("CGPA can't more than 10 for  Others Graduation ");
                    return false;
                 }
                  var ogc=0;
             for(i=0;i<BscCgpalen;i++)
                  { 
                    if(OtherGraduationCgpaVar.charCodeAt(i)==46)
                    {
                        ogc++;
                    }
                  }
                  if(ogc>1)
                    {
                        alert("Invalid  Others Graduation CGPA....  more than 1 dot is not allow");
                        return false;
                    }
                 
              
           }
           else
           {
            if(OtherGraduationCgpaVar=='')
               {
                    alert("please Enter Marks in Percentage for Others Graduation");
                    BscCgpaObj.focus();
                    BscCgpaObj.selected();
               }
                
                
               var BscCgpalen=OtherGraduationCgpaVar.length
               var BscGraduationTrim=OtherGraduationCgpaVar.trim();
               if(BscGraduationTrim==0)
               {
                alert("space/zero is not allow for Percentage of other greduation degree");
                return false;
               }
                  
                
                 for(i=0;i<BscCgpalen;i++)
                 {
                    if(!(OtherGraduationCgpaVar.charCodeAt(i)>=48&&OtherGraduationCgpaVar.charCodeAt(i)<=57)&&OtherGraduationCgpaVar.charCodeAt(i)!=46)
                    {
                        alert(" Percentage must be number for Others Graduation");
                    return false;
                    }
                 }
                 
                
                 if(BscCgpalen>5)
                 {
                    alert("percentage greater than 5 Digit is not allow for  Others Graduation");
                    return false;
                 }
                 if(OtherGraduationCgpaVar>100)
                 {
                    alert("marks can't more than 100 percentage for Others Graduation");
                    return false;
                 }
                 var ogc=0;
             for(i=0;i<BscCgpalen;i++)
                  { 
                    if(OtherGraduationCgpaVar.charCodeAt(i)==46)
                    {
                        ogc++;
                    }
                  }
                  if(ogc>1)
                    {
                        alert("Invalid  Others Graduation Percentage....  more than 1 dot is not allow");
                        return false;
                    }
              
        
        }
        
       }
                //End graduation validation
              
            var PostGraduationVar=document.getElementById('PostGraduationID').value;
             var PostGraduationObj=document.getElementById('PostGraduationID');
                 
        if(PostGraduationVar!='NA')
        {
                    
             var PostGradInstituteVar=document.getElementById('PostGradInstituteID').value;
             var PostGradInstituteObj=document.getElementById('PostGradInstituteID');
                      
                   
            if(PostGradInstituteVar=='')
            {
                alert("please enter your Post Graduation Institute");
                PostGradInstituteObj.focus();
                PostGradInstituteObj.selected();
             }
                   
                   var PostGradInstituteVarLeng=PostGradInstituteVar.length;
                   
                   var trimePostGradInstitute=PostGradInstituteVar.trim();
                   if(trimePostGradInstitute==0)
                   {
                       alert("before Post Graduation Institute Name space is not allow");
                       return false;
                            
                   }
                   if(trimePostGradInstitute.charCodeAt(0)==46)
                   {
                       alert("Post Graduation Institute Name can not start with dot")
                       return false;
                   }
                      
                      for(i=0;i<PostGradInstituteVarLeng;i++)
                      { 
                        if(PostGradInstituteVar.charCodeAt(i)==46&&PostGradInstituteVar.charCodeAt(i+1)==46)
                        {
                            alert("dot can not repeated for Post Graduation Institute Name");
                            return false;
                        }
                      }
                      
                      for(i=0;i<PostGradInstituteVarLeng;i++)
                      {
                        if(!(PostGradInstituteVar.charCodeAt(i)>='65' && PostGradInstituteVar.charCodeAt(i)<='90') && !(PostGradInstituteVar.charCodeAt(i)>='97' && PostGradInstituteVar.charCodeAt(i)<='122')&& !(PostGradInstituteVar.charCodeAt(i)==46)&& !(PostGradInstituteVar.charCodeAt(i)==32))
                        {
                            alert("please enter only character and dot for Post Graduation  Institute Name...");
                            return false;
                        }
                      
                      }
                      
           var PostGradSpecial=document.getElementById('PostGradSpecialID').value;
           var PostGradSpecialObj=document.getElementById('PostGradSpecialID');  
           if(PostGradSpecial=='')
           {
               alert("please Enter Post Graduation Specialization");
               PostGradSpecialObj.focus();
               PostGradSpecialObj.selected();
               return false;
            
           }
           
            var PostGradSpecialLeng=PostGradSpecial.length;
                   
                   var trimePostGradInstitute=PostGradInstituteVar.trim();
                   if(trimePostGradInstitute==0)
                   {
                       alert("before Post Graduation Institute Name space is not allow");
                       return false;
                            
                   }
                   if(PostGradSpecial.charCodeAt(0)==46)
                   {
                       alert("Post Graduation Institute Name can not start with dot")
                       return false;
                   }
                      
                      for(i=0;i<PostGradSpecialLeng;i++)
                      { 
                        if(PostGradSpecial.charCodeAt(i)==46&&PostGradSpecial.charCodeAt(i+1)==46)
                        {
                            alert("dot can not repeated for Post Graduation Institute Name");
                            return false;
                        }
                      }
                      
                      for(i=0;i<PostGradSpecialLeng;i++)
                      {
                        if(!(PostGradSpecial.charCodeAt(i)>='65' && PostGradSpecial.charCodeAt(i)<='90') && !(PostGradSpecial.charCodeAt(i)>='97' && PostGradSpecial.charCodeAt(i)<='122')&& !(PostGradSpecial.charCodeAt(i)==46)&& !(PostGradSpecial.charCodeAt(i)==32))
                        {
                            alert("please enter only character and dot for Post Graduation  Institute Name...");
                            return false;
                        }
                        
                        
                      }
                   
           var PodtGradJoiningDateVar=document.getElementById('PodtGradJoiningDateID').value;
           var PodtGradJoiningDateObj=document.getElementById('PodtGradJoiningDateID');
           
           
           if(PodtGradJoiningDateVar=='')
           {
               alert("please Enter Post Graduation Joining Year");
               PodtGradJoiningDateObj.focus();
               PodtGradJoiningDateObj.selected();
           }
              
           var PodtGradJoiningDatelen=PodtGradJoiningDateVar.length
           
                  
           if(PodtGradJoiningDatelen==0)
           {
               alert("before  Post Graduation Joining Year space and 0 is not allow ")
               return false;
           } 
                 for(i=0;i<PodtGradJoiningDatelen;i++)
                 {
                    if(!(PodtGradJoiningDateVar.charCodeAt(i)>=48&&PodtGradJoiningDateVar.charCodeAt(i)<=57))
                    {
                       alert("Post Graduation Joining Year must be number");
                    return false;
                    }
                 }
                 
                 if(PodtGradJoiningDatelen<4||PodtGradJoiningDatelen>4)
                 {
                    alert(" Post Graduation Joining Year less than 4 and greater than 4 Digit is not allow");
                    return false;
                 }
                 if(PodtGradJoiningDateVar>2017||PodtGradJoiningDateVar<1995)
                 {
                    alert("please Enter Post Graduation Joining Year should be in range of 1995 to 2017")
                    return false;
                 }
           if(OtherGraduationLeavingDate>PodtGradJoiningDateVar)
              {
                alert("  Post Graduation joining Year Should not lass than Greduation Leaving Year");
                return false;
              }
           if(BscLeavingDate>PodtGradJoiningDateVar)
              {
                alert("  Post Graduation joining Year Should not lass than Bsc Leaving Year");
                return false;
              }
               if(BtechLeavingDate>PodtGradJoiningDateVar)
              {
                alert("  Post Graduation joining Year Should not lass than B.tech Leaving Year");
                return false;
              }
                 // Tenth Leaving Year Validation
              
                   var PostGradLeavingDate=document.getElementById('PostGradLeavingDateID').value;
                   var PostGradLeavingDatebj=document.getElementById('PostGradLeavingDateID');
           
             if(PostGradLeavingDate=='')
                  {
                    alert("please Enter Post Graduation  Leaving Year");
                    PostGradLeavingDatebj.focus();
                    PostGradLeavingDatebj.selected();
                  }
                 
                   var PostGradLeavingDatelen=PostGradLeavingDate.length
                   
                  
                 if(PostGradLeavingDatelen==0)
                 {
                    alert("before  Post Graduation  Leaving Year space and 0 is not allow ")
                    return false;
                 } 
                 for(i=0;i<PostGradLeavingDatelen;i++)
                 {
                    if(!(PostGradLeavingDate.charCodeAt(i)>=48&&PostGradLeavingDate.charCodeAt(i)<=57))
                    {
                        alert(" Post Graduation  Leaving Year must be number");
                    return false;
                    }
                 }
                
                 if(PostGradLeavingDatelen<4||PostGradLeavingDatelen>4)
                 {
                    alert(" Post Graduation Leaving Year less than 4 and greater than 4 Digit is not allow");
                    return false;
                 }
                 if(PostGradLeavingDate>2017||PostGradLeavingDate<1995)
                 {
                    alert("please Enter Post Graduation Leaving Year should be in range of 1995 to 2017")
                    return false;
                 }
                 if(PostGradLeavingDate<PodtGradJoiningDateVar)
                 {
                    alert("leaving year should be greater than joining year for Post Graduation");
                    return false;
                 }
                   if(PostGradLeavingDate-PodtGradJoiningDateVar<1)
                 {
                    alert("Duration of Post graduation should not less than 1 ");
                    return false;
                 }
                 //B.tech Grade validationBtechCgpa
           var PostGradutionRad=window.document.frmPersonal.PostGradRadio.value;
          
          
           var PostGradCgpaVar=document.getElementById('PostGradCgpaID').value;
           var PostGradCgpaObj=document.getElementById('PostGradCgpaID');
          
           if(PostGradutionRad=='Yes')
           {
            
               if(PostGradCgpaVar=='')
               {
                    alert("please Enter Your CGPA of Post Graduation");
                    PostGradCgpaObj.focus();
                    PostGradCgpaObj.selected();
               }
                
                
                var PostGradCgpaVarlen=PostGradCgpaVar.length
                var PostGradCgpaVartrim=PostGradCgpaVar.trim();
                if(PostGradCgpaVartrim==0)
                {
                    alert("space/zero is not allow for CGPA of Post Graduation");
                    return false;
                }
                  
                
                 for(i=0;i<PostGradCgpaVarlen;i++)
                 {
                    if(!(PostGradCgpaVar.charCodeAt(i)>=48&&PostGradCgpaVar.charCodeAt(i)<=57)&&PostGradCgpaVar.charCodeAt(i)!=46)
                    {
                      alert("CGPA must be number for Post Graduation");
                    return false;
                    }
                 }
                 
                 
                 if(PostGradCgpaVarlen>5)
                 {
                    alert("CGPA greater than 5 Digit is not allow for Post Graduation");
                    return false;
                 }
                 if(PostGradCgpaVar>10)
                 {
                    alert("CGPA can't more than 10 for  Post Graduation ");
                    return false;
                 }
                  var Post=0;
             for(i=0;i<PostGradCgpaVarlen;i++)
                  { 
                    if(PostGradCgpaVar.charCodeAt(i)==46)
                    {
                        Post++;
                    }
                  }
                  if(Post>1)
                    {
                        alert("Invalid  Post Graduation CGPA....  more than 1 dot is not allow");
                        return false;
                    }
            
           }
           else
           {
            if(PostGradCgpaVar=='')
               {
                    alert("please Enter Marks in Percentage for Post Graduation");
                    PostGradCgpaObj.focus();
                    PostGradCgpaObj.selected();
               }
                
                
                var PostGradCgpaVarlen=PostGradCgpaVar.length
                var PostGradCgpaVartrim=PostGradCgpaVar.trim();
                if(PostGradCgpaVartrim==0)
                {
                    alert("space/zero is not allow for Percentage of Post Graduation");
                    return false;
                }
                  
                
                 for(i=0;i<PostGradCgpaVarlen;i++)
                 {
                    if(!(PostGradCgpaVar.charCodeAt(i)>=48&&PostGradCgpaVar.charCodeAt(i)<=57)&&PostGradCgpaVar.charCodeAt(i)!=46)
                    {
                        alert(" Percentage must be number for Post Graduation");
                    return false;
                    }
                 }
                 
                
                 if(PostGradCgpaVarlen>5)
                 {
                    alert("percentage greater than 5 Digit is not allow for  Post Graduation");
                    return false;
                 }
                 if(PostGradCgpaVar>100)
                 {
                    alert("marks can't more than 100 percentage for Post Graduation");
                    return false;
                 }
                 var Post=0;
             for(i=0;i<PostGradCgpaVarlen;i++)
                  { 
                    if(PostGradCgpaVar.charCodeAt(i)==46)
                    {
                        Post++;
                    }
                  }
                  if(Post>1)
                    {
                        alert("Invalid  Post Graduation Percentage....  more than 1 dot is not allow");
                        return false;
                    }
                 
                 
        }
        }
        
            var OtherHigherQualificationDegreeVar=document.getElementById('OtherHigherQualificationDegreeID').value;
             var OtherHigherQualificationDegreeObj=document.getElementById('OtherHigherQualificationDegreeID');
             
                      
                   
        if(OtherHigherQualificationDegreeVar!='')
        {
                   
              
            if(OtherHigherQualificationDegreeVar=='')
            {
                alert("please enter your Other Higher Qualification  Degree Name");
                OtherHigherQualificationInstituteObj.focus();
                OtherHigherQualificationInstituteObj.selected();
             }
                   
                   var OtherHigherQualificationDegreeVarLeng=OtherHigherQualificationDegreeVar.length;
                   
                   var trimeOtherHigherQualificationDegree=OtherHigherQualificationDegreeVar.trim();
                   if(trimeOtherHigherQualificationDegree==0)
                   {
                       alert("before Other Higher Qualification  Degree Name space is not allow");
                       return false;
                            
                   }
                   if(trimeOtherHigherQualificationDegree.charCodeAt(0)==46)
                   {
                       alert("Other Higher Qualification  Degree Name can not start with dot")
                       return false;
                   }
                      
                      for(i=0;i<OtherHigherQualificationDegreeVarLeng;i++)
                      { 
                        if(OtherHigherQualificationDegreeVar.charCodeAt(i)==46&&OtherHigherQualificationDegreeVar.charCodeAt(i+1)==46)
                        {
                            alert("dot can not repeated for Other Higher Qualification  Degree Name");
                            return false;
                        }
                      }
                      
                      for(i=0;i<OtherHigherQualificationDegreeVarLeng;i++)
                      {
                        if(!(OtherHigherQualificationDegreeVar.charCodeAt(i)>='65' && OtherHigherQualificationDegreeVar.charCodeAt(i)<='90') && !(OtherHigherQualificationDegreeVar.charCodeAt(i)>='97' && OtherHigherQualificationDegreeVar.charCodeAt(i)<='122')&& !(OtherHigherQualificationDegreeVar.charCodeAt(i)==46)&& !(OtherHigherQualificationDegreeVar.charCodeAt(i)==32))
                        {
                            alert("please enter only character and dot for Other Higher Qualification   Degree Name...");
                            return false;
                        }
                        
                        
                      }
                  
             var OtherHigherQualificationInstituteVar=document.getElementById('OtherHigherQualificationInstituteID').value;
             var OtherHigherQualificationInstituteObj=document.getElementById('OtherHigherQualificationInstituteID');
                      
                   
            if(OtherHigherQualificationInstituteVar=='')
            {
                alert("please enter your Other Higher Qualification  Institute");
                OtherHigherQualificationInstituteObj.focus();
                OtherHigherQualificationInstituteObj.selected();
             }
                   
                   var OtherHigherQualificationInstituteVarLeng=OtherHigherQualificationInstituteVar.length;
                   
                   var trimeOtherHigherQualificationInstitute=OtherHigherQualificationInstituteVar.trim();
                   if(trimeOtherHigherQualificationInstitute==0)
                   {
                       alert("before Other Higher Qualification Institute Name space is not allow");
                       return false;
                            
                   }
                   if(trimeOtherHigherQualificationInstitute.charCodeAt(0)==46)
                   {
                       alert("Other Higher Qualification Institute Name can not start with dot")
                       return false;
                   }
                      
                      for(i=0;i<OtherHigherQualificationInstituteVarLeng;i++)
                      { 
                        if(OtherHigherQualificationInstituteVar.charCodeAt(i)==46&&OtherHigherQualificationInstituteVar.charCodeAt(i+1)==46)
                        {
                            alert("dot can not repeated for Other Higher Qualification Institute Name");
                            return false;
                        }
                      }
                      
                      for(i=0;i<OtherHigherQualificationInstituteVarLeng;i++)
                      {
                        if(!(OtherHigherQualificationInstituteVar.charCodeAt(i)>='65' && OtherHigherQualificationInstituteVar.charCodeAt(i)<='90') && !(OtherHigherQualificationInstituteVar.charCodeAt(i)>='97' && OtherHigherQualificationInstituteVar.charCodeAt(i)<='122')&& !(OtherHigherQualificationInstituteVar.charCodeAt(i)==46)&& !(OtherHigherQualificationInstituteVar.charCodeAt(i)==32))
                        {
                            alert("please enter only character and dot for Other Higher Qualification  Institute Name...");
                            return false;
                        }
                        
                        
                      }
                      
           var OtherHigherQualificationSpecialization=document.getElementById('OtherHigherQualificationSpecializationID').value;
           var OtherHigherQualificationSpecializationObj=document.getElementById('OtherHigherQualificationSpecializationID');  
           if(OtherHigherQualificationSpecialization=='')
           {
               alert("please Enter Other Higher Qualification Specialization");
               OtherHigherQualificationSpecializationObj.focus();
               OtherHigherQualificationSpecializationObj.selected();
               return false;
            
           }
            var OtherHigherQualificationSpecializationLeng=OtherHigherQualificationSpecialization.length;
                   
                   var trimeOtherHigherQualificationSpecialization=OtherHigherQualificationSpecialization.trim();
                   if(trimeOtherHigherQualificationSpecialization==0)
                   {
                       alert("before Other Higher Qualification Institute Name space is not allow");
                       return false;
                            
                   }
                   if(OtherHigherQualificationSpecialization.charCodeAt(0)==46)
                   {
                       alert("Other Higher Qualification Institute Name can not start with dot")
                       return false;
                   }
                      
                      for(i=0;i<OtherHigherQualificationSpecializationLeng;i++)
                      { 
                        if(OtherHigherQualificationSpecialization.charCodeAt(i)==46&&OtherHigherQualificationSpecialization.charCodeAt(i+1)==46)
                        {
                            alert("dot can not repeated for Other Higher Qualification Institute Name");
                            return false;
                        }
                      }
                      
                      for(i=0;i<OtherHigherQualificationSpecializationLeng;i++)
                      {
                        if(!(OtherHigherQualificationSpecialization.charCodeAt(i)>='65' && OtherHigherQualificationSpecialization.charCodeAt(i)<='90') && !(OtherHigherQualificationSpecialization.charCodeAt(i)>='97' && OtherHigherQualificationSpecialization.charCodeAt(i)<='122')&& !(OtherHigherQualificationSpecialization.charCodeAt(i)==46)&& !(OtherHigherQualificationSpecialization.charCodeAt(i)==32))
                        {
                            alert("please enter only character and dot for Other Higher Qualification  Institute Name...");
                            return false;
                        }
                        
                        
                      }
                      
                   
           var OtherHigherQualificationJoiningDate=document.getElementById('OtherHigherQualificationJoiningDateID').value;
           var OtherHigherQualificationJoiningDateObj=document.getElementById('OtherHigherQualificationJoiningDateID');
           
           if(OtherHigherQualificationJoiningDate=='')
           {
               alert("please Enter Other Higher Qualification Joining Year");
               OtherHigherQualificationJoiningDateObj.focus();
               OtherHigherQualificationJoiningDateObj.selected();
           }
            
           var OtherHigherQualificationJoiningDatelen=OtherHigherQualificationJoiningDate.length
           
                  
           if(OtherHigherQualificationJoiningDatelen==0)
           {
               alert("before  Other Higher Qualification Joining Year space and 0 is not allow ")
               return false;
           } 
                 for(i=0;i<OtherHigherQualificationJoiningDatelen;i++)
                 {
                    if(!(OtherHigherQualificationJoiningDate.charCodeAt(i)>=48&&OtherHigherQualificationJoiningDate.charCodeAt(i)<=57))
                    {
                       alert("Other Higher Qualification Joining Year must be number");
                    return false;
                    }
                 }
                 
                 if(OtherHigherQualificationJoiningDatelen<4||OtherHigherQualificationJoiningDatelen>4)
                 {
                    alert(" Other Higher Qualification Joining Year less than 4 and greater than 4 Digit is not allow");
                    return false;
                 }
                 if(OtherHigherQualificationJoiningDate>2017||OtherHigherQualificationJoiningDate<1995)
                 {
                    alert("please Enter Other Higher Qualification Joining Year should be in range of 1995 to 2017")
                    return false;
                 }
                 
                 
                 if(PostGradLeavingDate>OtherHigherQualificationJoiningDate)
                  {
                    alert(" Other Higher Qualification Joining Year  Should not lass than Post Graduation Leaving Year");
                    return false;
                  }
                 // Tenth Leaving Year Validation
              
                   var OtherHigherQualificationLeavingDate=document.getElementById('OtherHigherQualificationLeavingDateID').value;
                   var OtherHigherQualificationLeavingDateObj=document.getElementById('OtherHigherQualificationLeavingDateID');
           
             if(OtherHigherQualificationLeavingDate=='')
                  {
                    alert("please Enter Other Higher Qualification  Leaving Year");
                    OtherHigherQualificationLeavingDateObj.focus();
                    OtherHigherQualificationLeavingDateObj.selected();
                  }
                
                   var OtherHigherQualificationLeavingDatelen=OtherHigherQualificationLeavingDate.length
                   
                  
                 if(OtherHigherQualificationLeavingDatelen==0)
                 {
                    alert("before  Other Higher Qualification  Leaving Year space and 0 is not allow ")
                    return false;
                 } 
                 for(i=0;i<OtherHigherQualificationLeavingDatelen;i++)
                 {
                    if(!(OtherHigherQualificationLeavingDate.charCodeAt(i)>=48&&OtherHigherQualificationLeavingDate.charCodeAt(i)<=57))
                    {
                        alert(" Other Higher Qualification  Leaving Year must be number");
                    return false;
                    }
                 }
                 
                 if(OtherHigherQualificationLeavingDatelen<4||OtherHigherQualificationLeavingDatelen>4)
                 {
                    alert("Other Higher Qualification Leaving Year less than 4 and greater than 4 Digit is not allow");
                    return false;
                 }
                 if(OtherHigherQualificationLeavingDate>2017||OtherHigherQualificationLeavingDate<1995)
                 {
                    alert("please EnterOther Higher Qualification Leaving Year should be in range of 1995 to 2017")
                    return false;
                 }
                 if(OtherHigherQualificationLeavingDate<PodtGradJoiningDateVar)
                 {
                    alert("leaving year should be greater than joining year for Other Higher Qualification");
                    return false;
                 }
                 if(OtherHigherQualificationLeavingDate-PodtGradJoiningDateVar<1)
                 {
                    alert("Duration can not less than 1 year for your Qualification");
                    return false;
                 }
                 //B.tech Grade validationBtechCgpa
           var OtherHigherQualificationDegreeRad=window.document.frmPersonal.OtherHigherQualificationDegreeRadio.value;
          
           var OtherHigherQualificationCgpaVar=document.getElementById('OtherHigherQualificationCgpaID').value;
           var OtherHigherQualificationCgpaIDObj=document.getElementById('OtherHigherQualificationCgpaID');
            
           if(OtherHigherQualificationDegreeRad=='Yes')
           {
            
               if(OtherHigherQualificationCgpaVar=='')
               {
                    alert("please Enter Your CGPA of Other Higher Qualification");
                    OtherHigherQualificationCgpaIDObj.focus();
                    OtherHigherQualificationCgpaIDObj.selected();
               }
             
                var OtherHigherQualificationCgpalen=OtherHigherQualificationCgpaVar.length
                var OtherHigherQualificationCgpatrim=OtherHigherQualificationCgpaVar.trim();
                if(OtherHigherQualificationCgpatrim==0)
                {
                    alert("space/zero is not allow for CGPA of Your Other Higher Qualification");
                    return false;
                }
                 for(i=0;i<OtherHigherQualificationCgpalen;i++)
                 {
                    if(!(OtherHigherQualificationCgpaVar.charCodeAt(i)>=48&&OtherHigherQualificationCgpaVar.charCodeAt(i)<=57)&&OtherHigherQualificationCgpaVar.charCodeAt(i)!=46)
                    {
                      alert("CGPA must be number for Other Higher Qualification");
                    return false;
                    }
                 }
                 
                 
                 if(OtherHigherQualificationCgpalen>5)
                 {
                    alert("CGPA greater than 5 Digit is not allow for Other Higher Qualification");
                    return false;
                 }
                 if(OtherHigherQualificationCgpaVar>10)
                 {
                    alert("CGPA can't more than 10 for  Other Higher Qualification ");
                    return false;
                 }
                  var Ogredu=0;
             for(i=0;i<OtherHigherQualificationCgpalen;i++)
                  { 
                    if(OtherHigherQualificationCgpaVar.charCodeAt(i)==46)
                    {
                        Ogredu++;
                    }
                  }
                  if(Ogredu>1)
                    {
                        alert("Invalid  Others Higher Qualification CGPA....  more than 1 dot is not allow");
                        return false;
                    }
         
           }
           else
           {
            if(PostGradCgpaVar=='')
               {
                    alert("please Enter Marks in Percentage for Other Higher Qualification");
                    OtherHigherQualificationCgpaIDObj.focus();
                    OtherHigherQualificationCgpaIDObj.selected();
               }
                
                
                var OtherHigherQualificationCgpalen=OtherHigherQualificationCgpaVar.length
                var OtherHigherQualificationCgpatrim=OtherHigherQualificationCgpaVar.trim();
               if(OtherHigherQualificationCgpatrim==0)
                {
                    alert("space/zero is not allow of Percentage for Your Other Higher Qualification");
                    return false;
                }
                  
                
                 for(i=0;i<OtherHigherQualificationCgpalen;i++)
                 {
                    if(!(OtherHigherQualificationCgpaVar.charCodeAt(i)>=48&&OtherHigherQualificationCgpaVar.charCodeAt(i)<=57)&&OtherHigherQualificationCgpaVar.charCodeAt(i)!=46)
                    {
                        alert(" Percentage must be number for Other Higher Qualification");
                    return false;
                    }
                 }
                 
                
                 if(OtherHigherQualificationCgpalen>5)
                 {
                    alert("percentage greater than 5 Digit is not allow for  Other Higher Qualification");
                    return false;
                 }
                 if(OtherHigherQualificationCgpaVar>100)
                 {
                    alert("marks can't more than 100 percentage for Other Higher Qualification");
                    return false;
                 }
                 var Ogredu=0;
             for(i=0;i<OtherHigherQualificationCgpalen;i++)
                  { 
                    if(OtherHigherQualificationCgpaVar.charCodeAt(i)==46)
                    {
                        Ogredu++;
                    }
                  }
                  if(Ogredu>1)
                    {
                        alert("Invalid  Others Higher Qualification Percentage....  more than 1 dot is not allow");
                        return false;
                    } 
        }
        }
        
      
       
        window.document.frmPersonal.submit(); 
                
                
       }
    

 function clr()
        {
            document.frmPersonal.reset();
        }




</script>


</html>