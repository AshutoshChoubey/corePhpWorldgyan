<?php
    echo $DOCUMENT_ROOT;
    require "IndexRelated/indexUpper.php";
  //echo  "ok".$HidAddPlusCountimg;
  
  require_once($_SERVER['DOCUMENT_ROOT']."/classes/clswgtutorialManager.php");  
  require_once ($_SERVER['DOCUMENT_ROOT']."/Science/CProgramming/classes/clsWGSubjectManeger.php");
  require_once($_SERVER['DOCUMENT_ROOT']."/classes/clswgtutorialdiscimgManager.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $objSubjectManager=new clsWGSubjectManeger();
  $objWGSubjectSet=new clsWGSubjectSet();
  $objWGSubject=new clsWGSubject();
  $sqlCount="SELECT Auto_increment as wgsubjectname FROM information_schema.tables WHERE table_name='wgtutorial'";
  $objWGSubjectSet=$objSubjectManager->RetrieveWGSubjectSet($sqlCount);
  $numrecordSub=$objWGSubjectSet->GetCount();
    for($i=0;$i<$numrecordSub;$i++)
    {
        $objWGSubject=new clsWGSubject();
        $objWGSubject=$objWGSubjectSet->GetItem($i);                  
        $objNextgenereted=$objWGSubject->getWGSubjectName();
    }
      $objTutorialManager= new clswgtutorialManager();
      $objTutorial= new clswgtutorial();
      $objTutorialSet= new clswgtutorialSet();
      $objTutorial->setdiscription($textAreaDic);
	$objTutorial->setsubtitle($txtDisc);
	$objTutorial->setsubtitleid($objNextgenereted);
	$objTutorial-> setsubtitleone($txtDisc2);
	$objTutorial-> setsubtitleoneid($objNextgenereted);
	$objTutorial-> setsubtitlethree($txtDisc4);
	$objTutorial-> setsubtitlethreeid($objNextgenereted);
	$objTutorial-> setsubtitletwo($txtDisc3);
	$objTutorial-> setsubtitletwoid($objNextgenereted);
	$objTutorial-> settextone($textAreaDic2);
	$objTutorial-> settextthree($textAreaDic4);
	$objTutorial-> settexttwo($textAreaDic3);
	$objTutorial-> settitle($txtTitle5);
	$objTutorial-> settitleid($objNextgenereted);
	$objTutorial-> setwgcategory($sltCategory);
	$objTutorial-> setwgsubcategory($sltSubCategoryName);
	$objTutorial-> setwgsubject($sltSubject);
	$objTutorial-> setwgtime();
	$objTutorial-> setwguserid('0');
	$objTutorial-> setwgusertype('admin');
   
    $AddTutResult=$objTutorialManager->Savewgtutorial($objTutorial);
    $objwgtutorialdiscimg = new clswgtutorialdiscimg();
    $objwgtutorialdiscimgSet = new clswgtutorialdiscimgSet();
    $objwgtutorialdiscimgManager = new clswgtutorialdiscimgManager();
    if($HidAddPlusCountimg=='')
    {
      $HidAddPlusCountimg=1;  
    }
    $i=1;    
    $var=$fileUpload.$i;
        $var1=$$var;
        echo $var1;        
    for($i=1;$i<=$HidAddPlusCountimg;$i++)
    {
        $var="fileUpload".$i;        
        $var1=$$var;
        $var2="txtImg".$i;
        $var3=$$var2;
       echo "file=".$var;
        echo  "name=".$var2;                
        $objwgtutorialdiscimg = new clswgtutorialdiscimg();
        $objwgtutorialdiscimg->setimagename($var1);
		$objwgtutorialdiscimg->setimgtitle($var3);
		$objwgtutorialdiscimg->setsubtitleid($objNextgenereted);
		$objwgtutorialdiscimg->settitleid($objNextgenereted);
		$objwgtutorialdiscimg->setwgsubject($sltSubject);
         $objwgtutorialdiscimgSet->add($objwgtutorialdiscimg);
     }
     $result=$objwgtutorialdiscimgManager->SavewgtutorialdiscimgSet($objwgtutorialdiscimgSet);
     if($result==1)
                    {
                        echo "<script language=\"javascript\">swal(\"\",\"Tutorial Saved Successully\");</script>";
                    }
 
                    if($AddTutResult==1)
                    {
                        echo "<script language=\"javascript\">swal(\"\",\"Tutorial Saved Successully\");</script>";
                    }
                    if($AddTutResult==2)
                    {
                        echo "<script language=\"javascript\">swal(\"\",\"Aiyo........ Tutorial Not Saved\");</script>";
                    }
 }
?>
<script src="JavaScript/AddOnlineTutorialJS.js"></script>
                                       <!-- Start from Here -->
                           <!--------------------------------------->
                         
                    <form name="AddOnlineTutorial" class="form-group" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="HidAddPlusCountimgId" name="HidAddPlusCountimg" value="<? echo $HidAddPlusCountimg ?>" />
                    <input type="hidden" id="HidPointCountId" name="HidPointCount" value="<? echo $HidPointCount ?>" />
                    <input type="hidden" name="hidCat" id="hidCatId" value="<? echo $hidCat ?>" />
                    <input type="hidden" name="hidSubCat" id="hidSubCatId" value="<? echo $hidSubCat ?>"  />
                    <input type="hidden" name="hidSubject" id="hidSubjectId" value="<? echo $hidSubject ?>"  />
                        <h2 class="text-primary" align="center">Add Tutorial</h2>
                        <table  align="center"  width="90%" cellpadding="0" cellspacing="0" border="0"  class="table table-hover table-condensed table-bordered">
                        	
                            <tr>
                            <td colspan="0">
                            Category :
                               </td>
                               <td>
                               <select class="sltBox" name="sltCategory" id="sltCategoryId" onchange="SelectSubcat(this.value,'NA')">
                                    <option value="NA" >&lt;Category&gt;</option>
                                    <option <?php if($sltCategory=="Science and Technology") echo "selected" ?> >Science and Technology</option>
                                    <option <?php if($sltCategory=="Sprituality") echo "selected" ?> >Sprituality</option>
                                    <option <?php if($sltCategory=="History") echo "selected" ?> >History</option>
                                    <option <?php if($sltCategory=="Helth") echo "selected" ?> >Helth</option>
                                    <option <?php if($sltCategory=="Geology") echo "selected" ?> >Geology</option>
                                    <option <?php if($sltCategory=="Others") echo "selected" ?> >Others</option>
                                    
                                </select>
                                </td>
                            </tr>
                            <tr>
                               <td colspan="0">
                                 Sub Category:
                               </td>
                               <td>
                                <select  class="sltBox" name="sltSubCategoryName" id="sltSubCategoryNameId" onchange="SelectSubject(this.value,'NA')" >
                                   <option value="NA" >&lt;Sub Category&gt;</option>
                                    
                                </select>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="0">
                                 Subject:
                               </td>
                               <td>
                                <select  class="sltBox" name="sltSubject" id="sltSubjectID">
                                    <option value="NA" >&lt;Subject&gt;</option>
                                    
                                </select>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="0">
                                 Title:
                               </td>
                               <td>
                                <input type="text" class="PageTextBox" name="txtTitle5" id="txtTitle5Id"  value="<?php echo $txtTitle5;  ?>"  />
                               </td>
                           </tr>
                            </table> 
                        
                                   <div class="table-responsive " style="border:solid #032d5d 1px;">
                          <table  id="tabApplicationID" align="center"  width="" cellpadding="" cellspacing="0" border="0" class="table table-hover table-condensed table-bordered " >
                                  	<thead style="background-color: #FF9767;">
    									<tr>
    										<th width="2%" >Sl#</th>
    										<th >Sub Title</th>
										    <th>Discription</th>
                                            <th >Point</th>
                                            <th >Code</th>
    										<th  >Image</th>    										
    										<th >+/-</th>
                                            
    									</tr>
    								</thead>
    								<?php $hidUploadDocument=1;
                                        for($i=1;$i<=$hidUploadDocument;++$i)
                                        {
                                            
                                            $sltCategoryID="sltCategoryID".$i;
                                            $sltCategory="sltCategory".$i;
                                            $$sltCategoryVal=$$sltCategory;
                                            
                                            //$divID="divID".$i;
                                            $sltPaticipantsID="sltPaticipantsID".$i;
                                            $sltPaticipants="sltPaticipants".$i;
                                            $$sltPaticipantsVal=$$sltPaticipants;
                                            
                                            
                                            
                                            $txtBillHeaderID="txtBillHeaderID".$i;
                                            $txtBillHeader = "txtBillHeader".$i;
                                            $txtBillHeaderVal=$$txtBillHeader;
                                            
                                            $txtAmountID="txtAmountID".$i;
                                            $txtAmount = "txtAmount".$i;
                                            $txtAmountVal=$$txtAmount;
                                            
                                            $fileDataID="fileDataID".$i;
                                            $fileData="fileData".$i;
                                            $fileDataVal=$$fileData;
                                            
                                            $txtDescriptionID="txtDescriptionID".$i;
                                            $txtDescription="txtDescription".$i;
                                            $txtDescriptionVal=$$txtDescription;
                                    ?>
    								<tbody id="tabAttachment">
                                        <tr>
                                        <?php
                                                            
                                                echo "<td width=\"05%\">1</td>";
                                                
                                                echo "<td ><input type=\"text\" name=\"$sltCategory\" id=\"$sltCategoryID\" class=\"form-control\" onChange=\"change(this,'tabApplicationID',this.id)\"></td >";
                                                   
                                                  echo"<td><textarea   name=\"$sltPaticipants\" id=\"$sltPaticipantsID\" class=\"form-control\"  style=\"max-width: 500px; max-height: 500px;\"  onChange=\"changeHidval()\"></textarea></td >";
                    								
                                                   
                                               
                                                echo "<td width=\"35%\">
                                                <table class=\"table table-bordered table-striped\" id=\"tblInerID1\">
                                                    <tr>
                                                        <td width=\"3%\" align=\"left\">1.1</td>
                                                        <td><input type=\"text\" class=\"form-control\" name=\"$txtPoint\" id=\"$txtPointID\" onChange=\"AutoSum(this)\"/></td>
                                                        <td><textarea   name=\"$txtPointDisc\" id=\"$txtPointDiscID\" class=\"form-control\"  style=\"max-width: 500px; max-height: 500px;\"  onChange=\"changeHidval()\"></textarea></td>
                                                        <td><input type=\"button\" value=\"+\" class=\"ListTutorialBtn\" onclick=\"addOperationPoint('tblInerID1',1)\"/></td>
                                                    </tr>
                                                </table>
                                                </td>";
                                                echo "<td width=\"35%\">
                                                <table class=\"table table-bordered table-striped\" id=\"tblInerID2\">
                                                    <tr>
                                                        <td width=\"3%\" align=\"left\">1.1</td>
                                                        <td><textarea   name=\"$sltPaticipants\" id=\"$sltPaticipantsID\" class=\"form-control\"  style=\"max-width: 500px; max-height: 500px;\"  onChange=\"changeHidval()\"></textarea></td>
                                                        <td><input type=\"button\" value=\"+\" class=\"ListTutorialBtn\" onclick=\"addOperationCode('tblInerID2',1)\"/></td>
                                                    </tr>
                                                </table>
                                                </td>";
                                                 echo "<td width=\"14%\" ><table class=\"table table-bordered table-striped\" id=\"tblInerID3\">
                                                        <tr>
                                                           <td width=\"3%\" align=\"left\">1.1</td>
                                                           <td><input type=\"text\" class=\"form-control\" name=\"$txtAmount\" id=\"$txtAmountID\" onChange=\"AutoSum(this)\"/></td>
                                                           <td><input type=\"file\" name=\"$fileData\" id=\"$fileDataID\"></td>                                                      
                                                           <td width=\"3%\" align=\"center\"><input value=\"+\" class=\"ListTutorialBtn\" onclick=\"addOperations_innerFun('tblInerID3',1)\" /></td>
                                                        </tr>
                                                        </table></td>";
                                                      
                                                echo "<td  width=\"06%\" align=\"center\">";
                                                        if($hidUploadDocument==1)
                                                        {
                            
                                                            echo  "<input type=\"button\" value=\"+\" class=\"ListTutorialBtn\" onclick=\"addOperations('tabApplicationID')\"/>";                                
                                          
                                                        }
                                                        else
                                                        {
                                                            echo  "<input type=\"button\" value=\"+\" class=\"ListTutorialBtn\" onclick=\"deleteOperations(this.id,'tabApplicationID');\"/>";
                                                        }
                                                   echo "</td>"; 
                                                   $emp=$_POST['$sltPaticipants'] ; 
                                                   echo $emp;            
                                                    ?> 
                                        </tr>
                                    <?php
                                    $rowCount+=1;
                                        }
                                        if($hidUploadDocument!=1)
                                        {
                                            echo "<tr id=\"$i\"><td colspan=\"5\">&nbsp;</td>";
                                            echo "<td align=\"center\" valign=\"top\">";
                                            echo  "<input type=\"button\" value=\"+\" class=\"ListTutorialBtn\" onclick=\"addOperations()\"/>";                                
                                          
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                    ?>	
    								</tbody>
    							</table>
                                
    						</div><!-- /.box-body -->
                        <div align="center">
                       <input type="button"  style="border-color: Black; " class="btn bg-primary " align="center" onclick="save()" value="Add Tutorial"/></button>
				</div>
                        
                        
                                       
        		
        		 <div style="clear: both;">&nbsp;</div>                     
                                        <!--Work section End -->
                                <!--------------------------------------->
        		<?php
    require "IndexRelated/indexLower.php";
?>
<script language="javascript" type="text/javascript">
	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////

    SelectSubcat(document.getElementById("hidCatId").value,document.getElementById("hidSubCatId").value);
    SelectSubject(document.getElementById("hidSubCatId").value,document.getElementById("hidSubjectId").value);
    function addOperationPoint(tablename,slno) 
    {
        //alert("Asilare Bhai");         
        var table = document.getElementById(tablename);        
    	var rowCount = table.rows.length;
       // alert("aa="+rowCount);
        if(rowCount>2)
        rowCount = rowCount-1;
        eleID = rowCount;
        var row = table.insertRow(rowCount);
              
         var eleID = slno+"-"+(rowCount+1);
         var txtID = slno+"."+(rowCount+1);

        //alert(eleID);
        var row = table.insertRow(rowCount);  
       // alert(row);          
        row.id=rowCount;
        alert("TT="+rowCount)
         var cellcount=0;
         var cellBlank = row.insertCell(cellcount);
        cellBlank.Align="left";  
        cellBlank.setAttribute("width","3%");
        cellBlank.innerHTML=txtID;
        
         cellcount=cellcount+1;
        var cellt1 = row.insertCell(cellcount);
        var elet1 = document.createElement("input");
        elet1.type="text";
        elet1.id ="txtPointID"+eleID;
        elet1.name ="txtPoint"+eleID;
        elet1.onchange=function(){ AlertBrowser(); } 
        cellt1.setAttribute("align", "center");
        cellt1.setAttribute("width","10%");
        cellt1.appendChild(elet1);
        
        
        
        cellcount=cellcount+1;        
        var cellPoint = row.insertCell(cellcount);
        var elePoint1 = document.createElement("textarea");
        elePoint1.id ="txtPointDiscID"+eleID;
        elePoint1.name ="txtPointDisc"+eleID;  
        cellPoint.setAttribute("align", "center");
        cellPoint.setAttribute("width","10%");
        cellPoint.appendChild(elePoint1);
              
        /*eleDeleteImg.onclick=function(){ deleteOperations_innerFunPoint(this.id,tablename,slno); } 
        cellDeleteImg.align="center";
        cellDeleteImg.appendChild(eleDeleteImg);*/
        
        cellcount=cellcount+1;    
        var cellbtnDelete = row.insertCell(cellcount);
        var elebtnDelete = document.createElement("input");
        elebtnDelete.type ="button";
        elebtnDelete.id = eleID;
        elebtnDelete.setAttribute("class","ListTutorialBtn");
        elebtnDelete.value = "-";
        elebtnDelete.onclick=function(){ deleteOperations_innerFunPoint(this.id,tablename); } 
        cellbtnDelete.setAttribute("align", "left");
        cellbtnDelete.appendChild(elebtnDelete);
        //alert("galare bhai");
        alert(rowCount);
        if(rowCount==2)
        {
            var row = table.rows[1];
            var elebtnDelete = row.cells[2].childNodes[0]; 
            elebtnDelete.setAttribute("id",1);
            elebtnDelete.id=1;
            elebtnDelete.value = "-";      
            elebtnDelete.onclick=function(){ deleteOperations_innerFunPoint(this.id,tablename); } 
            var row = table.insertRow(rowCount+1);  
            row.id=rowCount+1;   
                             
            var cellAnswerBlank = row.insertCell(0);
            cellAnswerBlank.colSpan="2";
            cellAnswerBlank.innerHTML="&nbsp;"

            var cellBtnAdd = row.insertCell(1);
            var eleBtnAdd = document.createElement("input");
            eleBtnAdd.type ="button";
            eleBtnAdd.setAttribute("className","ListTutorialBtn");
            eleBtnAdd.setAttribute("class","ListTutorialBtn");
            eleBtnAdd.value = "+";      
            eleBtnAdd.onclick=function(){ addOperationPoint(tablename); } 
            cellBtnAdd.align="left";
            cellBtnAdd.appendChild(eleBtnAdd);
            
            
            //alert("2 end");
        }
    }
    
    function deleteOperations_innerFunPoint(val,tablename,slno) 
    {
        try
        {
            var table = document.getElementById(tablename);
            var rowCount = table.rows.length;
            table.deleteRow(val);
            var rowCount = table.rows.length;
            for(var i=1;i<rowCount-1;++i)
            {
                
                var row = table.rows[i];                    
                row.id=i;      
                cellcount=0;
                var eleID=i;
                
                //SubTitle   
                var elet1 = row.cells[cellcount].childNodes[0];
                elet1.id ="txtPointID"+eleID;
                elet1.name ="txtPoint"+eleID;
                
                //Description
                cellcount=cellcount+1;
                var elePoint1 = row.cells[cellcount].childNodes[0];
                elePoint1.id ="txtPointDiscID"+eleID;
                elePoint1.name ="txtPointDisc"+eleID; 
                
                cellcount=cellcount+1;        
                var elebtnDelete = row.cells[cellcount].childNodes[0];
                elebtnDelete.setAttribute("id",eleID);
                elebtnDelete.id=eleID;
                elebtnDelete.value = "-";        
            }
            rowCount = table.rows.length;
            if(rowCount==3)
            {
                table.deleteRow(rowCount-1); 
                cellCount=rowCount-2;   
                var row = table.rows[cellCount];
                var eleBtnAdd = row.cells[2].childNodes[0];  
                eleBtnAdd.setAttribute("className","ListTutorialBtn");
                eleBtnAdd.setAttribute("class","ListTutorialBtn");
                eleBtnAdd.value = "+";       
                eleBtnAdd.onclick=function(){ addOperationPoint(tablename); }
            }
        }
        catch(e)
        {
            alert(e.message);
        }
    }
    function addOperations(tablename) 
    {
        
        var table = document.getElementById(tablename);        
    	var rowCount = table.rows.length;
        
       // alert("1==="+rowCount);
        if(rowCount>2)
        {
            rowCount=rowCount-1;
        }
        else
            rowCount=rowCount;   
        
        eleID = rowCount;
        
        var row = table.insertRow(rowCount);            
        row.id=rowCount;
         //alert("2==="+rowCount);
         var cellcount=0;
        var cellBlank = row.insertCell(cellcount);
        cellBlank.Align="left";  
        cellBlank.innerHTML=eleID;
        
        cellcount=cellcount+1;
        var cellsltCategory = row.insertCell(cellcount);
        
        var elesltCategory = document.createElement("select");
        elesltCategory.id ="sltCategoryID"+eleID;
        elesltCategory.name ="sltCategory"+eleID;
        elesltCategory.setAttribute("className","form-control");
        elesltCategory.setAttribute("class","form-control");  
        elesltCategory.setAttribute("maxlength", "200");
        
        var DataMode = document.getElementById('hidJsonDataForIdentityID').value
        var jsonObj = JSON.parse(DataMode);
        var arrAllData = jsonObj['AllData'];
        var lenAllData = arrAllData.length;
        elesltCategory.options[0]= new Option("Select Reimbursment","NA",true,true);
        for(var i=0;i<lenAllData;i++)
        {
            var valName = arrAllData[i]["Name"];                    
            var valID = arrAllData[i]["Value"];
            elesltCategory.options[i+1]= new Option(valName,valID,false,false);
        }
        elesltCategory.onchange=function(){ change(this,"tabApplicationID",this.id); }
        cellsltCategory.setAttribute("align", "center");
        cellsltCategory.appendChild(elesltCategory);
        

        var elesltPaticipants = document.createElement("select"); 
        //elediv.id="divID" +eleID;
        elesltPaticipants.id ="sltPaticipantsID"+eleID;
        elesltPaticipants.name ="sltPaticipants"+eleID;
        elesltPaticipants.setAttribute("style","display:none");
        elesltPaticipants.setAttribute("className","form-control");
        elesltPaticipants.setAttribute("class","form-control");
        elesltPaticipants.setAttribute("multiple",true)  
        elesltPaticipants.setAttribute("maxlength", "200");
        var DataMode = document.getElementById('hidJsonDataForIdentityID1').value
        var jsonObj = JSON.parse(DataMode);
        var arrAllData = jsonObj['AllData'];
        var lenAllData = arrAllData.length;
        
        //elesltPaticipants.options[0]= new Option("select","NA",true,false);
        for(var i=0;i<lenAllData;++i)
        {
            var valName1 = arrAllData[i]["Name1"];                    
            var valID1 = arrAllData[i]["Value1"];
            elesltPaticipants.options[i]= new Option(valName1,valID1,false,false);
        }
        //elesltPaticipants.onchange=function(){ changeHidval(this); }
        cellsltCategory.setAttribute("align", "center");
       // cellsltCategory.appendChild(elediv);
        cellsltCategory.appendChild(elesltPaticipants);

        
        
        cellcount=cellcount+1;
        var celltxtAmount = row.insertCell(cellcount);
    	var eletxtAmount = document.createElement("input");
    	eletxtAmount.type = "text";
        eletxtAmount.id ="txtAmountID"+eleID;
        eletxtAmount.name ="txtAmount"+eleID; 
        //eletxtAmount.value ="txtAmountID"+eleID; 
        eletxtAmount.setAttribute("maxlength", "50");
        eletxtAmount.setAttribute("width", "200px");
        eletxtAmount.setAttribute("className","form-control");
        eletxtAmount.setAttribute("class","form-control");
        eletxtAmount.onchange=function(){ AutoSum(this); }
        celltxtAmount.setAttribute("align", "center");
        celltxtAmount.appendChild(eletxtAmount);
        
        cellcount=cellcount+1;
        var celltxtDescription = row.insertCell(cellcount);
        var eletxtDescription = document.createElement("textarea");
        eletxtDescription.id ="txtDescriptionID"+eleID;
        eletxtDescription.name ="txtDescription"+eleID;
        eletxtDescription.setAttribute("className","form-control");
        eletxtDescription.setAttribute("class","form-control");
        eletxtDescription.setAttribute("height","100px");
        eletxtDescription.setAttribute("width","200px"); 
        eletxtDescription.setAttribute("maxlength", "200");
        celltxtDescription.setAttribute("align", "center");
        celltxtDescription.appendChild(eletxtDescription);
        
        
        /*cellcount=cellcount+1;
        var cellfileData = row.insertCell(cellcount);
    	var elefileData = document.createElement("input");
    	elefileData.type = "file";
        elefileData.id ="fileDataID"+eleID;
        elefileData.name ="fileData"+eleID;
        elefileData.onchange=function(){ AlertBrowser(); } 
        cellfileData.setAttribute("align", "center");
        cellfileData.appendChild(elefileData); */
        
        cellcount=cellcount+1;
        var celltblInerID = row.insertCell(cellcount);
        var eletblInerID = document.createElement("table");
        eletblInerID.id ="tblInerID"+eleID;
        eletblInerID.name ="tblIner"+eleID;
        eletblInerID.setAttribute("class","table table-bordered table-striped");
        celltblInerID.appendChild(eletblInerID);
        addAnotherInnerRow(eletblInerID.id,eleID); 
        
        
        cellcount=cellcount+1;        
        var cellDeleteImg = row.insertCell(cellcount);
        var eleDeleteImg = document.createElement("img");
        eleDeleteImg.setAttribute("id",eleID);
        eleDeleteImg.id=eleID;
        eleDeleteImg.setAttribute("src","../../img/minus_1.jpg");        
        eleDeleteImg.onclick=function(){ deleteOperations(this.id,tablename); } 
        cellDeleteImg.align="center";
        cellDeleteImg.appendChild(eleDeleteImg);
       // alert(rowCount);
        
        if(rowCount==2)
        {
            var row = table.rows[1];
            var eleDeleteImg = row.cells[5].childNodes[0]; 
            
            eleDeleteImg.setAttribute("id",1);
            eleDeleteImg.id=1;
            eleDeleteImg.setAttribute("src","../../img/minus_1.jpg");            
            eleDeleteImg.onclick=function(){ deleteOperations(this.id,tablename); }  
            var row = table.insertRow(rowCount+1);  
            
            row.id=rowCount+1;
            row.setAttribute("class",""); 
            row.setAttribute("className","");   
                             
            var cellAnswerBlank = row.insertCell(0);
            cellAnswerBlank.colSpan="5";
            cellAnswerBlank.innerHTML="&nbsp;"

            var cellAddImg = row.insertCell(1);
            var eleAddImg = document.createElement("img");
            eleAddImg.setAttribute("src","../../img/plus.jpg");        
            eleAddImg.onclick=function(){ addOperations(tablename); } 
            cellAddImg.align="center";
            cellAddImg.appendChild(eleAddImg);
        }
    }
    
  
    function deleteOperations(val,tablename) 
    {
        try 
        {
           // alert(tablename);
            var table = document.getElementById(tablename);
            //alert(val);
           // alert(table);
            var rowCount = table.rows.length;
            
            table.deleteRow(val);
            var rowCount = table.rows.length;
            var inDate = "";
            //alert(rowCount);
            for(var i=1;i<rowCount-1;++i)
            {
                var row = table.rows[i];                    
                row.id=i;      
                var cellcount=0;
                var eleID=i;
          
                var cellBlank = row.cells[cellcount];
                cellBlank.innerHTML=eleID;
                    
                cellcount=cellcount+1;
                var eletxtDate = row.cells[cellcount].childNodes[0];
                //alert(eletxtDate);
                eletxtDate.id ="sltCategoryID"+eleID;
                eletxtDate.name ="sltCategory"+eleID;
                
                var eletxtDate = row.cells[cellcount].childNodes[1];
                //alert(eletxtDate);
                eletxtDate.id ="sltPaticipantsID"+eleID;
                eletxtDate.name ="sltPaticipants"+eleID;
                
          
                cellcount=cellcount+1;
                var eletxtReason = row.cells[cellcount].childNodes[0];
                ///alert(eletxtReason);
                eletxtReason.id ="txtAmountID"+eleID;
                eletxtReason.name ="txtAmount"+eleID;
                
                cellcount=cellcount+1;
                var eletxtDescription = row.cells[cellcount].childNodes[0];
                //alert(eletxtDescription);
                eletxtDescription.id ="txtDescriptionID"+eleID;
                eletxtDescription.name ="txtDescription"+eleID;
                eletxtDescription.value =eleID;
                
                /*cellcount=cellcount+1;
                var elefileData = row.cells[cellcount].childNodes[0];
                elefileData.id ="fileDataID"+eleID;
                elefileData.name ="fileData"+eleID;*/
                
                cellcount=cellcount+1;
                var eletblInerID = row.cells[cellcount].childNodes[0];
                //alert(eletblInerID);
                eletblInerID.id ="tblInerID"+eleID;
                eletblInerID.name ="tblIner"+eleID;
                DeleteExtraInnerRow("tblInerID"+eleID,eleID);
                
            
  
                cellcount=cellcount+1;        
                var eleDeleteImg = row.cells[cellcount].childNodes[0];
                //alert(eleDeleteImg);
                eleDeleteImg.setAttribute("id",eleID);
                eleDeleteImg.id=eleID;
                eleDeleteImg.setAttribute("src","../../img/minus_1.jpg");        
            }
            
            var rowCount = table.rows.length;
           
            if(rowCount==3)
            {
                table.deleteRow(rowCount-1); 
            
                cellCount=rowCount-2;
                var row = table.rows[cellCount];
                var eleAddImg = row.cells[5].childNodes[0];  
                eleAddImg.setAttribute("src","../../img/plus.jpg");        
                eleAddImg.onclick=function(){addOperations(tablename);}
            }
        }
        catch(e) 
        {
            alert(e.message);
        }
    }
    
    
     function addOperations_innerFun(tablename,slno) 
    {
        //alert("Asilare Bhai");         
        var table = document.getElementById(tablename);        
    	var rowCount = table.rows.length;
       // alert(rowCount);
        if(rowCount>1)
        {
            rowCount=rowCount-1;
        }
        else
            rowCount=rowCount; 
              
         var eleID = slno+"-"+(rowCount+1);
         var txtID = slno+"."+(rowCount+1);

        //alert(eleID);
        var row = table.insertRow(rowCount);  
       // alert(row);          
        row.id=rowCount;
         var cellcount=0;
         var cellBlank = row.insertCell(cellcount);
        cellBlank.Align="left";  
        cellBlank.setAttribute("width","3%");
        cellBlank.innerHTML=txtID;
        
         cellcount=cellcount+1;
        var cellt1 = row.insertCell(cellcount);
        var elet1 = document.createElement("input");
        elet1.type="file";
        elet1.id ="fileDataID"+eleID;
        elet1.name ="fileData"+eleID;
        elet1.onchange=function(){ AlertBrowser(); } 
        cellt1.setAttribute("align", "center");
        cellt1.setAttribute("width","10%");
        cellt1.appendChild(elet1);
        
        
        
        cellcount=cellcount+1;        
        var cellDeleteImg = row.insertCell(cellcount);
        var eleDeleteImg = document.createElement("img");
        eleDeleteImg.setAttribute("id",eleID);
        eleDeleteImg.id=eleID;
        eleDeleteImg.setAttribute("src","../../img/minus_1.jpg");        
        eleDeleteImg.onclick=function(){ deleteOperations_innerFun(this.id,tablename,slno); } 
        cellDeleteImg.align="center";
        cellDeleteImg.appendChild(eleDeleteImg);
        //alert("galare bhai");
        if(rowCount==1)
        {
            
            var row = table.rows[0];
//            alert(row.cells[7].childNodes[0]);
            var eleDeleteImg = row.cells[2].childNodes[0]; 
              //alert(eleDeleteImg);
            eleDeleteImg.setAttribute("id",1.1);
            eleDeleteImg.id=1.1;
            eleDeleteImg.setAttribute("src","../../img/minus_1.jpg");            
            eleDeleteImg.onclick=function(){ deleteOperations_innerFun(this.id,tablename,slno); }  
            //alert("2 re ");
            var row = table.insertRow(rowCount+1);  
            
            row.id=rowCount+1;
            row.setAttribute("class",""); 
            row.setAttribute("className","");   
                             
            var cellAnswerBlank = row.insertCell(0);
            cellAnswerBlank.colSpan="2";
            cellAnswerBlank.innerHTML="&nbsp;"

            var cellAddImg = row.insertCell(1);
            var eleAddImg = document.createElement("img");
            eleAddImg.setAttribute("src","../../img/plus.jpg");        
            eleAddImg.onclick=function(){ addOperations_innerFun(tablename,slno); } 
            cellAddImg.align="center";
            cellAddImg.appendChild(eleAddImg);
            //alert("2 end");
        }
    }
    
     function deleteOperations_innerFun(val,tablename,slno) 
    {
        //val = val+"";
        //alert(val.includes("."));
        var temparrval = val.split("-");          
       var tempval = parseInt((temparrval[1]))-1;
        try 
        {
            var table = document.getElementById(tablename);
            var rowCount = table.rows.length;
                
                table.deleteRow(tempval);
            var rowCount = table.rows.length;
           
         for(var i=0;i<rowCount-1;++i)
            {
                
                var row = table.rows[i];                    
                row.id=i; 
                     
                cellcount=0;
                j=i+1;
                var eleID=slno+"-"+j;
                var txtID=slno+"."+j;
                
                var cellBlank = row.cells[cellcount];
                cellBlank.innerHTML=txtID;
                               
                cellcount=cellcount+1;
                var elet1 = row.cells[cellcount].childNodes[0];
                elet1.id ="fileDataID"+eleID;
                elet1.name ="fileData"+eleID;
                elet1.onchange=function(){ AlertBrowser(); }
                
               
                cellcount=cellcount+1;        
                var eleDeleteImg = row.cells[cellcount].childNodes[0];
                eleDeleteImg.setAttribute("id",eleID);
                eleDeleteImg.id=eleID;
                eleDeleteImg.setAttribute("src","../../img/minus_1.jpg");        
                eleDeleteImg.onclick=function(){ deleteOperations_innerFun(this.id,tablename,slno); } 
            }
            
            var rowCount = table.rows.length;
            //alert(rowCount);
            if(rowCount==2)
            {
                //alert(rowCount);
                table.deleteRow(rowCount-1); 
            
                cellCount=rowCount-2;
                                //alert(cellCount);
                var row = table.rows[cellCount];
                var eleAddImg = row.cells[2].childNodes[0];  
                eleAddImg.setAttribute("src","../../img/plus.jpg");        
                eleAddImg.onclick=function(){addOperations_innerFun(tablename,slno);}
            }
        }
        catch(e) 
        {
            alert(e.message);
        }
    }
    
    
     function addAnotherInnerRow(tablename,slno)
   {
        var table = document.getElementById(tablename);        
    	var rowCount = table.rows.length;
        
         var eleID = slno+"-"+(rowCount+1);//+" "+tablename+"***";
         var txtID = slno+"."+(rowCount+1);
         //alert("eleID="+eleID);
        
        var row = table.insertRow(rowCount);  
       // alert(row);          
        row.id=rowCount;
         var cellcount=0;
         var cellBlank = row.insertCell(cellcount);
        cellBlank.Align="left";  
        cellBlank.innerHTML=txtID;
        
          cellcount=cellcount+1;
   
        var cellt1 = row.insertCell(cellcount);
        var elet1 = document.createElement("input");
        elet1.type="file";
        elet1.id ="fileDataID"+eleID;
        elet1.name ="fileData"+eleID;
        elet1.onchange=function(){ AlertBrowser(); } 
        cellt1.setAttribute("align", "center");
        cellt1.setAttribute("width","10%");
        cellt1.appendChild(elet1);
        
        
       

        
        
        cellcount=cellcount+1;        
        var cellAddImg = row.insertCell(cellcount);
        var eleAddImg = document.createElement("img");
        eleAddImg.setAttribute("id",eleID);
        eleAddImg.id=eleID;
        eleAddImg.setAttribute("src","../../img/plus.jpg");        
        eleAddImg.onclick=function(){ addOperations_innerFun(tablename,slno); } 
        cellAddImg.align="center";
        cellAddImg.appendChild(eleAddImg);
        
        //alert("galare bhai");
   }
   
   function DeleteExtraInnerRow(tablenamee,slno)
   {
    //alert("Inside Delete Fun="+tablenamee);
   
    
    try 
        {
            var table = document.getElementById(tablenamee);
            var rowCount = table.rows.length;
           
            if(rowCount>1)
            {
                rowCount=rowCount-1;
            }
            var k = 0;
         for(var i=0;i<rowCount;++i)
            {
                
                var row = table.rows[i];                    
                row.id=i; 
                     
                cellcount=0;
                //j=i+1;
                k=i+1;
                 var eleID=slno+"-"+k;//+" "+tablenamee+"###";
                 var txtID=slno+"."+k;
                 var cellBlank = row.cells[cellcount];
                 cellBlank.innerHTML=txtID;
                    
                cellcount=cellcount+1;
                var elet1 = row.cells[cellcount].childNodes[0];
                elet1.id ="fileDataID"+eleID;
                elet1.name ="fileData"+eleID;
                //elet1.value=tablenamee;
                //elet1.onkeyup=function(){ resizeTextarea(this.id); }
                
                
               
                
                if(rowCount==1)
                {
                    cellcount=cellcount+1;        
                    var eleDeleteImg = row.cells[cellcount].childNodes[0];
                    eleDeleteImg.setAttribute("id",eleID);
                    eleDeleteImg.id=eleID;
                    eleDeleteImg.setAttribute("src","../../img/plus.jpg");        
                    eleDeleteImg.onclick=function(){ addOperations_innerFun(tablenamee,slno); } 
                }
                else
                {
                    cellcount=cellcount+1;        
                    var eleDeleteImg = row.cells[cellcount].childNodes[0];
                    eleDeleteImg.setAttribute("id",eleID);
                    eleDeleteImg.id=eleID;
                    eleDeleteImg.setAttribute("src","../../img/minus_1.jpg");        
                    eleDeleteImg.onclick=function(){ deleteOperations_innerFun(this.id,tablenamee,slno); } 
                }
                    
            }
            
            var rowCount = table.rows.length;
            //alert("2tablename  "+ tablenamee+"RowCount = "+rowCount);
            if(rowCount>=1)
            {
                cellCount=rowCount-1;
                                //alert("cellCount="+cellCount);
                var row = table.rows[cellCount];
                //alert(row.cells.length);
                var eleAddImg = row.cells[1].childNodes[0]; 
                 
                eleAddImg.setAttribute("src","../../img/plus.jpg");        
                eleAddImg.onclick=function(){addOperations_innerFun(tablenamee,slno);}
            }
        }
        catch(e) 
        {
            alert(e.message);
        }
   
            
            
   }
   
    	
	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////
    
</script>
</html>