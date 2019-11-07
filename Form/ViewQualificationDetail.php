<?php 
@session_start();
require_once ($DOCUMENT_ROOT."/class/clsQualificationDetailManager.php");
require_once($DOCUMENT_ROOT."/class/clspersonalInformationManager.php");
//echo $sesEmployeeUserName;

         $objQualificationDetailManager=new clsQualificationDetailManager;
         $squery="select * from qualificationdetail where qdemployeeid=$sesEmployeeID";
         
         $objQualificationDetailSet=new clsQualificationDetailSet();
         $objQualificationDetailSet=$objQualificationDetailManager->retrieveQualificationDetailSet($squery);
    
    if($objQualificationDetailSet==null)
           {
              echo "<script language=\"javascript\">alert(\"plz enter correct Employee ID\")</script>";
            
            }
            
        
   else
 {    
        
        $count=$objQualificationDetailSet->getcount();
        
        for($i=0;$i<$count;$i++)
        {
         
          $objQualificationDetailTenth=new clsQualificationDetail();
        $objQualificationDetailTenth=$objQualificationDetailSet->getitem($i);
        
        
        $Qualification=$objQualificationDetailTenth->getQDQualification();
        $orderNumber=$objQualificationDetailTenth->getQDOrderNumber();
        if($Qualification=="10th")
        { 
            $TenthQualificationId=$objQualificationDetailTenth->getQDId();
            $TenthInstitute=$objQualificationDetailTenth->getQDInstituteName();
            $TenthJoiningDate=$objQualificationDetailTenth->getQDJoiningYear();
            $TenthLeavingDate=$objQualificationDetailTenth->getQDLeavingYear();
            $TenthRadioRE=$objQualificationDetailTenth->getQDIsCgpa($TenthRadio);
            $TenthGrade=$objQualificationDetailTenth->getQDPercentageOrCgpa($TenthGrade);
        }
       
       if($Qualification=="12TH"||$Qualification=="Diploma")
       {
            $objQualificationDetailtweleve=new clsQualificationDetail();
            $objQualificationDetailtweleve=$objQualificationDetailSet->getitem($i);
            
           $TwelveQualificationId=$objQualificationDetailtweleve->getQDId();
           $TwelveSelName= $objQualificationDetailtweleve->getQDQualification();
           $TwelveInstitute= $objQualificationDetailtweleve->getQDInstituteName();
           $TwelveJoiningDate= $objQualificationDetailtweleve->getQDJoiningYear();
           $TwelveLeavingDate=$objQualificationDetailtweleve->getQDLeavingYear();
           $twelveCGPARE=$objQualificationDetailtweleve->getQDIsCgpa();
           $TweleveGrade= $objQualificationDetailtweleve->getQDPercentageOrCgpa();
       }
        if($orderNumber==3)
       {
                  if($Qualification=="B.tech"||$Qualification=="B.Sc")
                  {
                      
                        $objQualificationDetailGraduationBtech=new clsQualificationDetail();
                        $objQualificationDetailGraduationBtech=$objQualificationDetailSet->getitem($i);
                        
                       
                        $GraduationSel= $objQualificationDetailGraduationBtech->getQDQualification();
                        
                       if($GraduationSel=='B.tech')
                       {      
                               $BtechQualificationId=$objQualificationDetailGraduationBtech->getQDId();
                               $BtechBranch=$objQualificationDetailGraduationBtech->getQDSpecializationOrBranch();
                               $BtechInstitute=$objQualificationDetailGraduationBtech->getQDInstituteName();
                               $BtechJoiningDate=$objQualificationDetailGraduationBtech->getQDJoiningYear();
                               $BtechLeavingDate=$objQualificationDetailGraduationBtech->getQDLeavingYear();
                               $RadioBtechRE= $objQualificationDetailGraduationBtech->getQDIsCgpa();
                               $BtechCgpa= $objQualificationDetailGraduationBtech->getQDPercentageOrCgpa();
                               
                       }
                       else if($GraduationSel=='B.Sc')
                       { 
                        
                            $objQualificationDetailGraduationBsc=new clsQualificationDetail();
                             $objQualificationDetailGraduationBsc=$objQualificationDetailSet->getitem($i);
                             
                            
                            $BscQualificationId=$objQualificationDetailGraduationBsc->getQDId();
                            $BscSpecialization=$objQualificationDetailGraduationBsc->getQDSpecializationOrBranch();
                            $BscInstitute=$objQualificationDetailGraduationBsc->getQDInstituteName();
                            $BscJoiningDate=$objQualificationDetailGraduationBsc->getQDJoiningYear();
                            $BscLeavingDate=$objQualificationDetailGraduationBsc->getQDLeavingYear();
                            $BscRadioRE=$objQualificationDetailGraduationBsc->getQDIsCgpa();
                            $BscCgpa=$objQualificationDetailGraduationBsc->getQDPercentageOrCgpa();
                        
                        }
                        
                       
                   }
                   else  
                       { 
                              $GraduationSel='others';
                            $objQualificationDetailGraduationOthers=new clsQualificationDetail();
                             
                             
                          
                          
                           
                            $objQualificationDetailGraduationOthers=$objQualificationDetailSet->getitem($i);
                             $objOthersDetailQualificationId=$objQualificationDetailGraduationOthers->getQDId();
                            $OthersGradutionDegree=$objQualificationDetailGraduationOthers->getQDQualification();
                            $OtherGraduationSpecialization=$objQualificationDetailGraduationOthers->getQDSpecializationOrBranch();
                            $OtherGraduationInstitute=$objQualificationDetailGraduationOthers->getQDInstituteName();
                            $OtherGraduationJoiningDate=$objQualificationDetailGraduationOthers->getQDJoiningYear();
                            $OtherGraduationLeavingDate=$objQualificationDetailGraduationOthers->getQDLeavingYear();
                            $OthersGradutionRadioRE=$objQualificationDetailGraduationOthers->getQDIsCgpa();
                            $OtherGraduationCgpa=$objQualificationDetailGraduationOthers->getQDPercentageOrCgpa();
                         
                         }
             }
         if($orderNumber==4)
         {
              $objQualificationDetailPostGraduation=new clsQualificationDetail();
              $objQualificationDetailPostGraduation=$objQualificationDetailSet->getitem($i);
              
            $PostGraduationQualificationID=$objQualificationDetailPostGraduation->getQDId();
            $PostGraduation=$objQualificationDetailPostGraduation->getQDQualification();
            $PostGradSpecial=$objQualificationDetailPostGraduation->getQDSpecializationOrBranch();
            $PostGradInstitute=$objQualificationDetailPostGraduation->getQDInstituteName();
            $PodtGradJoiningDate=$objQualificationDetailPostGraduation->getQDJoiningYear();
            $PodtGradLeavingDate=$objQualificationDetailPostGraduation->getQDLeavingYear();
            $PostGradRadioRE=$objQualificationDetailPostGraduation->getQDIsCgpa();
            $PostGradCgpa=$objQualificationDetailPostGraduation->getQDPercentageOrCgpa();
       }
        if($orderNumber==5)
         {
             $objQualificationDetailOtherHigherQualification=new clsQualificationDetail();
             $objQualificationDetailOtherHigherQualification=$objQualificationDetailSet->getitem($i);
             
            $OtherHigherQualificationDegreeQualificationID=$objQualificationDetailOtherHigherQualification->getQDId();
            $OtherHigherQualificationDegree=$objQualificationDetailOtherHigherQualification->getQDQualification();
            $OtherHigherQualificationSpecialization=$objQualificationDetailOtherHigherQualification->getQDSpecializationOrBranch();
            $OtherHigherQualificationInstitute=$objQualificationDetailOtherHigherQualification->getQDInstituteName();
            $OtherHigherQualificationJoiningDate=$objQualificationDetailOtherHigherQualification->getQDJoiningYear();
            $OtherHigherQualificationLeavingDate=$objQualificationDetailOtherHigherQualification->getQDLeavingYear();
            $OtherHigherQualificationDegreeRadioRE=$objQualificationDetailOtherHigherQualification->getQDIsCgpa();
            $OtherHigherQualificationCgpa=$objQualificationDetailOtherHigherQualification->getQDPercentageOrCgpa();
       }
         
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
        $numRecordBsc=$objBscSpecificationSet->getCount()
      
     


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
            <tr><td colspan="3" class="font-face" ><h1 align="center" class="heading" >View Qualification Detail</h1></td></tr>
        </table>
    </div>
<form  method="POST" name="frmPersonal">
    <table width="100%"  border="0" class="centerTable">
    <tr><td width="18%" valign="top">
    <table bgcolor=#FFFFFF style="height: 500px;" border=0>
           <tr><td valign="top" style="height: 30px;"><input type="button" value="View Detail" class="clsbtnLeft" onclick="location.href='ViewDetail.php'" onclick="changeback()"/></td><td style="width: 5px;"></td><td rowspan="6"class="centerLine"></td></tr>
            <tr><td valign="top"><input type="button" value="View Qualification Detail" class="SelectedButton" onclick="location.href='ViewQualificationDetail.php'"/></td></tr>
             </table></td>
     <td valign="top">
     <div class="DivFromStyle" style="background-color: #BBD4F2 ;">
        <table width="100%"  border="0" cellspacing="5" cellpadding="3">
        <tr><td><fieldset style="width: 1000px;" ><legend  align="center">10TH Detail</legend>
      
        <table width="" cellspacing="8" cellpadding="7" border="0" >
          <tr>
            <td><b>Institute/Bord Name</b><label style="color: red;">*</label></td>
              
            
            
             <td><b>Joining Year</b><label style="color: red;">*</label></td> 
              
              
             <td><b>Leaving  Year</b><label style="color: red;">*</label></td> 
             
             
             
         
              <td class="box"><b>Is CGPA</b><label style="color: red;">*</label></td>
              <td>  <?php if($TenthRadioRE=="Yes") echo "Yes"   ?> </td>
              <td> <?php if($TenthRadioRE=="No") echo "NO"   ?></td>
              </tr>
              <tr>
              <td> <?php echo $TenthInstitute;   ?></td>
              <td> <?php echo $TenthJoiningDate;   ?></td> 
              <td><?php echo $TenthLeavingDate;   ?></td>
              
               <td colspan="3"> <?php echo $TenthGrade;   ?></td> 
            
          
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
              <td><?php if($twelveCGPARE=="Yes") echo "Yes"   ?></td>
              <td><?php if($twelveCGPARE=="No") echo "No"   ?></td>
              </tr>
              <tr>
              <td><?php if($TwelveSelName=="12TH") echo "12TH";    
                     if($TwelveSelName=="Diploma") echo "Diploma";  ?>
                  </td>
              <td><?php echo $TwelveInstitute;  ?></td>
              <td><?php echo $TwelveJoiningDate;  ?></td> 
              <td><?php echo $TwelveLeavingDate;  ?></td>
              
               <td colspan="3"><?php echo $TweleveGrade;   ?></td> 
            
          
        </tr></table> </fieldset>
        
       </td>
       
       
       
       
        </tr>
       <tr>
       <td><fieldset style="width: 1000px;" ><legend  align="center">Graduation</legend>
      <table> <tr>
          <td><b>Graduation Degree</b></td>
          <td><select id="GraduationSelID" class="b"  name="GraduationSelUp" hidden="true" onchange="GraduationDetail()">
          <option value="NA">&lt;select&gt;</option>
          <option value="B.tech" <?php if($GraduationSel=="B.tech") echo "selected"   ?>>B.tech</option>
          <option value="B.Sc"  <?php if($GraduationSel=="B.Sc") echo "selected"   ?> >B.Sc</option>
          <option value="others"  <?php if($GraduationSel=="others") echo "selected"   ?> >others</option>
          </select> </td><td><?php echo $GraduationSel ?></td>
          </tr></table>
        <table width="" cellspacing="8" cellpadding="7" border="0" id="BtechTable"  style="display: none;" >
         
          <tr>
            <td><b>Institute/University</b><label style="color: red;">*</label></td>
              
             <td><b>Branch</b><label style="color: red;">*</label></td> 
            
             <td><b>Joining Year</b><label style="color: red;">*</label></td> 
              
              
             <td><b>Leaving  Year</b><label style="color: red;">*</label></td> 
             
             
             
         
              <td class="box"><b>Is CGPA</b><label style="color: red;">*</label></td>
              <td><?php if($RadioBtechRE=="Yes") echo "Yes"   ?></td>
              <td><?php if($RadioBtechRE=="No") echo "No"   ?></td>
              </tr>
              <tr>
              <td> <?php echo $BtechInstitute; ?></td>
              <td> <select hidden="" class="b" name="BtechBranchUp" id="BtechBranchID"><option value="NA"  >&lt;select&gt;</option>
               
                                                
               
                            </select><?php echo $BtechBranch;   ?></td>
              
              
              <td> <?php echo $BtechJoiningDate;   ?></td> 
              <td><?php echo $BtechLeavingDate;   ?></td>
              
               <td colspan="3"> <?php echo $BtechCgpa;   ?></td> 
            
          
        </tr></table> 
        
         <table width="" cellspacing="8" cellpadding="7" border="0" id="BscTable" style="display: none;" >
          <tr>
          
          
            <td><b>Institute/University</b><label style="color: red;">*</label></td>
              
             <td><b>Specialization</b><label style="color: red;">*</label></td> 
            
             <td><b>Joining Year</b><label style="color: red;">*</label></td> 
              
              
             <td><b>Leaving  Year</b><label style="color: red;">*</label></td> 
             
             
             
         
              <td class="box"><b>Is CGPA</b><label style="color: red;">*</label></td>
            <td> <?php if($BscRadioRE=="Yes") echo "Yes"   ?> 
              <?php if($BscRadioRE=="No") echo "No"   ?> </td>
              </tr>
              <tr>
              <td><?php echo $BscInstitute;   ?></td>
              <td>    <?php
                             echo $BscSpecialization;                    
                               
                            ?></td>
              <td> <?php echo $BscJoiningDate;   ?></td> 
              <td> <?php echo $BscLeavingDate;   ?></td>
              
               <td colspan="3"> <?php echo $BscCgpa;   ?></td> 
            
          
        </tr></table>
        
        
         <table width="" cellspacing="8" cellpadding="7" border="0" id="OtherGraduationTable" style="display: none;">
          <tr>
          <td><b>Others Graduation Degree</b></td>
          <td> <input class="b" type="text" name="OthersGradutionDegree" value="<?php echo $OthersGradutionDegree;   ?>" id="OthersGradutionDegreeID"size="30"/></td>
          </tr>
          <tr>
          
            <td><b>Institute/University</b><label style="color: red;">*</label></td>
              
             <td><b>Specialization</b><label style="color: red;">*</label></td> 
            
             <td><b>Joining Year</b><label style="color: red;">*</label></td> 
              
              
             <td><b>Leaving  Year</b><label style="color: red;">*</label></td> 
             
             
             
         
              <td class="box"><b>Is CGPA</b><label style="color: red;">*</label></td>
              <td> <?php if($OthersGradutionRadioRE=="Yes") echo "Yes"   ?> </td>
              <td> <?php if($OthersGradutionRadioRE=="No") echo "No"   ?></td>
              </tr>
              <tr>
              <td><?php echo $OtherGraduationInstitute;  ?></td>
              <td><?php echo $OtherGraduationSpecialization;  ?></td>
              <td> <?php echo $OtherGraduationJoiningDate;  ?></td> 
              <td> <?php echo $OtherGraduationLeavingDate;  ?></td>
              
               <td colspan="3">  <?php echo $OtherGraduationCgpa;   ?></td> 
            
          
        </tr></table>
        
        
        
        
        </fieldset>
        
       </td>
       
       
       
       
        </tr>
         <tr>
       <td><fieldset style="width: 1000px;" ><legend  align="center">Post Gradution</legend>
      
        <table width="" cellspacing="8" cellpadding="7" border="0" >
          <tr>
          <td><b>Post Graduation</b></td>
          <td><?php if($PostGraduation=="M.BA") echo "M.BA" ; 
          if($PostGraduation=="M.C.A") echo "M.C.A" ; 
          if($PostGraduation=="M.A.") echo "M.A."; ?>  </td>
        
          </tr>
          <tr>
            <td><b>Institute/University</b><label style="color: red;">*</label></td>
              
             
            <td><b>Specialization</b><label style="color: red;">*</label></td> 
             <td><b>Joining Year</b><label style="color: red;">*</label></td> 
              
              
             
              <td><b>Leaving  Year</b><label style="color: red;">*</label></td> 
             
             
             
         
              <td class="box"><b>Is CGPA</b><label style="color: red;">*</label></td>
              <td><?php if($PostGradRadioRE=="Yes") echo "Yes"   ?></td>
              <td><?php if($PostGradRadioRE=="No") echo "No"   ?></td>
              </tr>
              <tr>
              <td> <?php echo $PostGradInstitute;   ?></td>
              <td><?php echo $PostGradSpecial;   ?></td>
              <td> <?php echo $PodtGradJoiningDate;   ?></td> 
              <td> <?php echo $PodtGradLeavingDate;   ?></td>
              
               <td colspan="3"> <?php echo $PostGradCgpa;   ?></td> 
            
          
        </tr></table> </fieldset>
        
       </td>
       
       
       
       
        </tr>
        <tr>
       <td><fieldset style="width: 1000px;" ><legend  align="center">Other Higher Qualification</legend>
      
        <table width="" cellspacing="8" cellpadding="7" border="0" >
          <tr>
          <td><b>Degree Name</b></td>
           <td> <?php echo $OtherHigherQualificationDegree;   ?></td>
          </tr>
          <tr>
            <td><b>Institute/University</b><label style="color: red;">*</label></td>
              
             <td><b>Specialization </b><label style="color: red;">*</label></td> 
            
             <td><b>Joining Year</b><label style="color: red;">*</label></td> 
              
              
             <td><b>Leaving  Year</b><label style="color: red;">*</label></td> 
             
             
             
         
              <td class="box"><b>Is CGPA</b><label style="color: red;">*</label></td>
              <td> <?php if($OtherHigherQualificationDegreeRadioRE=="Yes") echo "Yes"   ?></td>
              <td><?php if($OtherHigherQualificationDegreeRadioRE=="No") echo "No"   ?></td>
              </tr>
              <tr>
              <td> <?php echo $OtherHigherQualificationInstitute;   ?></td>
              <td> <?php echo $OtherHigherQualificationSpecialization;   ?></td>
              <td>  <?php echo $OtherHigherQualificationJoiningDate;   ?></td> 
              <td><?php echo $OtherHigherQualificationLeavingDate;   ?></td>
              
               <td colspan="3">  <?php echo $OtherHigherQualificationCgpa;   ?></td> 
            
          
        </tr></table> </fieldset>
        
       </td>
       
       
       
       
        </tr>
       
       <tr>
         <td colspan="6" align="center"bgcolor=""> <input type="button" class="stdBtn"  value="Print" /> </td>
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

/*function check()
{
var TenthRad=window.document.frmPersonal.TenthRadio.value;
alert(TenthRad);
alert("please enter your "+TenthRad+" Institute Name");
}*/
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
                if(!(TenthJoiningDate.charCodeAt(i)>=48&&TenthJoiningDate.charCodeAt(i)<=57))
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
                alert("Joining year can not greater Leaving year for 10th ");
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
                   alert("10th Institute Name can not start with dot")
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
                    alert("before  B.tech  Leaving Year space and 0 is not allow ")
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