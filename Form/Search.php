<?php

require_once($DOCUMENT_ROOT."/class/clspersonalinformationmanager.php");
if($REQUEST_METHOD=='POST')
{
    
            
       $objpersonalinformationSet=new clspersonalinformationSet();
       $objpersonalinformationManager=new clspersonalinformationManager();
    
    
       $sQuery="select piemployeeid,piemployeename,pifathersname,pinickname,pimaritialstatus,pimriagedate,piemail,piwebsite,pibloodgroup,pidateofbirth,
             pisex,pipannumber,pipassportnumber,pipermanentaddress,piresidentialaddress,pimobilenumber,pialternatemobilenumber 
            from personalinformation ";
            $trimnick=trim($nickName);
            $trimEmployeeName=trim($txtEmpName);            
            
        $flag=false;
        if($chkEmpName=="on" and $txtEmpName!='')
        {
            if($flag==false)
            $sQuery.= "where piemployeename like '$trimEmployeeName%'";
            else
            $sQuery.="and piemployeename='$trimEmployeeName'";
                $flag=true;
            
            
        }
        if($chkempID=='on' and $txtEmpID!='')
        {
             if($flag==false)
             $sQuery.="where piemployeeid=$txtEmpID";
             else
             $sQuery.="and piemployeeid=$txtEmpID";
                $flag=true;
             
            
        }
        if($chkNick=='on' and $nickName!='')
        {
             if($flag==false)
             $sQuery.="where pinickname like '$trimnick%'";
             else
             $sQuery.="and pinickname like'$trimnick%'";
                $flag=true;
           
        }
       
    $objpersonalinformationSet=$objpersonalinformationManager->retrievepersonalinformationSet($sQuery);
    $numrecordsPersonalInformationRetrieve = $objpersonalinformationSet->GetCount();
    }
 ?>
<html>
<head>
    <link rel='stylesheet' href='../css/formStyle.css'/>
</head>

<body>
    <div class="header">
        <table width=100% border=0>
            <tr  style="height: 30px;">
                <td bgcolor=#032D5D>&nbsp;</td>
                <td align="center" ><div class="BHL"><a href="" class="tbar" style="text-decoration: none;"><b></b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="location.href='Home.php'" class="tbar" style="text-decoration: none;"><b>Login Page</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="tbar" style="text-decoration: none;"><b></b></a></div></td>
                <td bgcolor=#032D5D>&nbsp;</td>
            </tr>
            <tr><td colspan="3" class="font-face" ><h1 align="center" class="heading" >Search</h1></td></tr>
        </table>

    </div>
<form name="FORMSTYLE" class="FORMSTYLE" method="POST">
    <table width="100%"  border=0 style="height: 300px;">
    
    <tr><td width="18%" valign="top">
    <table bgcolor=#FFFFFF style="height: 500px;" border=0>
        <tr><td valign="top" style="height: 30px;"><input type="button" value="Resistration" class="clsbtnLeft" onclick="location.href='AddPersonalDetail.php'" /></td><td style="width: 5px;"></td><td rowspan="6"class="centerLine"></td></tr>
        <tr><td valign="top"><input type="button" value="Search" class="SelectedButton"onclick="location.href='Search.php'"/></td></tr>
        
    </table></td>
    
    <td valign="top">
    <div style="background-color: #FAF9F9; width: 1000px;" style="float: top;">
        <table width="100%"  border="0" style="background-color: #BBD4F2;" align="center" >
            <tr><td></td></tr>
            
            <tr>
                <td>&nbsp;</td>
                <td align="right" width="20%"><input type="checkbox" name="chkEmpName" id="chkEmpName" <?php if($chkEmpName=='on') echo "checked"; ?> /></td>
                <td width="20%"><label><i><b>By Employee Name</b></i></label></td>
                <td> <input class="TextBoxStyle" type="text" name="txtEmpName" id="txtEmpNameID" size="30" value="<?php echo $txtEmpName;?>"/></td>
                </td>
                <td rowspan="4" align="center"></td>
                <td>&nbsp;</td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>&nbsp;</td>
                <td align="right" width="20%"><input type="checkbox" name="chkempID" id="chkempID" <?php if($chkempID=='on') echo "checked"; ?>  /></td>
                <td width="20%"><label><i><b>By Employee id</b></i></label></td>
                 <td> <input class="TextBoxStyle" type="text" name="txtEmpID" id="txtEmpIDID"size="30" value="<?php  echo $txtEmpID ; ?> " /></td>
                <td>&nbsp;</td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>&nbsp;</td>
                <td align="right" width="20%"><input type="checkbox" name="chkNick" id="chkNick" <?php if($chkNick=='on') echo "checked"; ?>  /></td>
                <td width="20%"><label><i><b>By Nick Name</b></i></label></td>
               
                    <td> <input class="TextBoxStyle" type="text" name="nickName" value="<?php  echo $nickName ; ?> " id="nickName"size="30"/></td>
                
                <td>&nbsp;</td>
            </tr>
            
            
        
        </table>
        
        <table width="100%"  border="0" id="tabSearch" style="background-color: #BBD4F2;">
            <tr><td style="height: 10px;"></td></tr>
            
          <tr><td align="center" ><input type="button" value="Search" class="stdBtn" onclick="funsearch();" /></td></tr>  
            
                        
        </table>
      
        <table border="1" width=80%>
        <?php
   if($REQUEST_METHOD=='POST')
   {
          echo  "<tr>";
            
              echo  "<th style=\"background-color: #4A7AB8; color: white;\">Employee Id</th>";
              echo  "<th style=\"background-color: #4A7AB8; color: white;\">Employee Name</th>";
             // echo "<th style=\"background-color: #4A7AB8; color: white;\">Father Name</th>";
              echo  "<th style=\"background-color: #4A7AB8; color: white;\">Nick Name</th>";
             // echo "<th style=\"background-color: #4A7AB8; color: white;\">Marital Status</th>";
              //echo  "<th style=\"background-color: #4A7AB8; color: white;\">Mariage Date</th>";
              echo "<th style=\"background-color: #4A7AB8; color: white;\">Email</th>";
              echo "<th style=\"background-color: #4A7AB8; color: white;\">Website</th>";
              //echo"<th style=\"background-color: #4A7AB8; color: white;\">Blood Group</th>";
              //echo "<th style=\"background-color: #4A7AB8; color: white;\">Date of Birth</th>";
              echo "<th style=\"background-color: #4A7AB8; color: white;\">Sex</th>";
             // echo "<th style=\"background-color: #4A7AB8; color: white;\">Pan</th>";
              //echo "<th style=\"background-color: #4A7AB8; color: white;\">Passport Number</th>";
              echo "<th style=\"background-color: #4A7AB8; color: white;\">Permanent Address</th>";
              echo "<th style=\"background-color: #4A7AB8; color: white;\">Residential Address</th>";
              echo"<th style=\"background-color: #4A7AB8; color: white;\">Mobile Number</th>";
              echo "<th style=\"background-color: #4A7AB8; color: white;\">Alternate Mobile Number</th>";
          echo  "</tr>";

        if($numrecordsPersonalInformationRetrieve==0)
        {
          echo "No record found...";
        }
   else
   {
    for($i=0;$i<$numrecordsPersonalInformationRetrieve;$i++)
    {
          $objPersonalInformation=new clspersonalinformation();
          $objPersonalInformation=$objpersonalinformationSet -> getitem($i);
          
          
    $lPIEmployeeId=$objPersonalInformation->getPIEmployeeId();
    $sPIEmployeeName=$objPersonalInformation->getPIEmployeeName();
    $sPIFathersName=$objPersonalInformation->getPIFathersName();
    $sPINickName=$objPersonalInformation->getPINickName();
    $sPIMaritialStatus=$objPersonalInformation->getPIMaritialStatus();
    $dtPIMriageDate=$objPersonalInformation->getPIMriageDate();
    $sPIEmail=$objPersonalInformation->getPIEmail();
    $sPIWebsite=$objPersonalInformation->getPIWebsite();
    $sPIBloodGroup=$objPersonalInformation->getPIBloodGroup();
    $dtPIDateOfBirth=$objPersonalInformation->getPIDateOfBirth();
    $sPISex=$objPersonalInformation->getPISex();
    $sPIPanNumber=$objPersonalInformation->getPIPanNumber();
    $sPIPassportNumber=$objPersonalInformation->getPIPassportNumber();
    $sPIPermanentAddress=$objPersonalInformation->getPIPermanentAddress();
    $sPIResidentialAddress=$objPersonalInformation->getPIResidentialAddress();
    $lPIMobileNumber=$objPersonalInformation->getPIMobileNumber();
    $lPIAlternateMobileNumber=$objPersonalInformation->getPIAlternateMobileNumber();
       
         
         if($txtEmpName==$name || $txtEmpID==$txtEmpID ||$nickName==$nickName ||$sex==$spisex)
         {
            echo "<tr>";
                
                echo "<td style=\"width: 50px; height: 20px;\">$lPIEmployeeId</td>";
                echo "<td style=\"width: 50px; height: 20px;\">$sPIEmployeeName</td>";
                //echo "<td style=\"width: 50px; height: 20px;\">$sPIFathersName</td>";
                echo "<td style=\"width: 50px; height: 20px;\">$sPINickName</td>";
                //echo "<td style=\"width: 50px; height: 20px;\">$sPIMaritialStatus</td>";
                //echo "<td style=\"width: 50px; height: 20px;\">$dtPIMriageDate</td>";
                echo "<td style=\"width: 50px; height: 20px;\">$sPIEmail</td>";
                echo "<td style=\"width: 50px; height: 20px;\">$sPIWebsite</td>";
                //echo "<td style=\"width: 50px; height: 20px;\">$sPIBloodGroup</td>";
                //echo "<td style=\"width: 50px; height: 20px;\">$dtPIDateOfBirth</td>";
                echo "<td style=\"width: 50px; height: 20px;\">$sPISex</td>";
                //echo "<td style=\"width: 50px; height: 20px;\">$sPIPanNumber</td>";
                //echo "<td style=\"width: 50px; height: 20px;\">$sPIPassportNumber</td>";
                echo "<td style=\"width: 50px; height: 20px;\">$sPIPermanentAddress</td>";
                echo "<td style=\"width: 50px; height: 20px;\">$sPIResidentialAddress</td>";
                echo "<td style=\"width: 50px; height: 20px;\">$lPIMobileNumber</td>";
                echo "<td style=\"width: 50px; height: 20px;\">$lPIAlternateMobileNumber</td>";
               
                
            echo "</tr>";

         }
   }
  }
}
         
         
        
        ?>
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
<script type="text/javascript">
   
    function funsearch()
    {
        
        var name=document.FORMSTYLE.txtEmpNameID.value;
        var trimname=name.trim();
        var id=document.FORMSTYLE.txtEmpIDID.value;
        var trimid=id.trim();
        var nick=document.FORMSTYLE.nickName.value;
        var trimnick=nick.trim()
        var namechk=document.getElementById('chkEmpName');
        var idchk=document.getElementById('chkempID');
        var nickchk=document.getElementById('chkNick');
        
        if(namechk.checked==false && idchk.checked==false && nickchk.checked==false )
        {
            alert("Please select atleast one checkbox");
            return false;
        }
         if(namechk.checked==true)
        {
             if(name=='')
             {
               alert("Please Enter Employee name for search");
               return false; 
             }
             if(trimname==0)
             {
                alert("Please Enter Employee name for search ")
                return false;
             }
             
             for(i=0;i<name.length;i++)
          {
                if(!(name.charCodeAt(i)>=65 && name.charCodeAt(i)<='90') && !(name.charCodeAt(i)>='97' && name.charCodeAt(i)<='122')&& !(name.charCodeAt(i)==46)&& !(name.charCodeAt(i)==32))
                {
                    alert("please enter only character/dot for name where first dot and Repeated Dot is not allow...");
                    return false;
                }
           
            
          }
          
           if(name.charCodeAt(0)==46)
            {
                alert("Employee Name can not start with Dot");
                return false;
            }
          var tringName=1;
          for(i=0;i<name.length;i++)
          { 
            if(name.charCodeAt(i)==46&&name.charCodeAt(i+1)==46)
            {
                tringName++;
            }
          }
          if(tringName>1)
            {
                alert("dot can not repeated for Employee Name");
                return false;
            }
             
        }
          if(idchk.checked==true)
        {
             if(id=='')
             {
               alert("Please Enter Employee Id for search");
               return false; 
             }
             if(trimid==0)
             {
                alert("Please Enter Employee ID for search ")
                return false;
             }
             var tring=0;
             for(i=0;i<trimid.length;i++)
             { 
           
             if(!(trimid.charCodeAt(i)>=48 && trimid.charCodeAt(i)<=57))
             {
                tring=1;
             }
             }
             if(tring==1)
             {
              alert("Only Number is allow for Employee Id");
              return false;  
             }
           
        }
     
         if(chkNick.checked==true)
        {
             if(nick=='')
             {
               alert("Please Enter Nick name for search");
               return false; 
             }
             if(trimnick==0)
             { 
                alert("Please Enter nick Name for search ");
                return false;
             }
         
        }
        
    
        window.document.FORMSTYLE.submit();
        
    }
</script>
</html>