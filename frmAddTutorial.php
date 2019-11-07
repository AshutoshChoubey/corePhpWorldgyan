<?php


/*


*Form Name               : 


*Difficulty level        : 


*Description             : 


*Author                  : 


*Date                    : 


*Modified By             :


*Date of Modification    :


*Purpose of Modification :


*/





	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////


	require_once ($_SERVER['DOCUMENT_ROOT']."/Science/CProgramming/classes/AllClasses.php");


             $currentDate=date('d-m-Y H:i:s');


             


             if($_SERVER['REQUEST_METHOD']=="POST")


             {


                $uploadOk = 1;


                if(($_POST['RadFileType']=='text' && $_FILES['fileUpload']['name']!='') or $_POST['RadFileType']=='File')


                {


                    $sltSubject=$_POST['sltSubject'];


                    $Subject=str_replace(" ","","$sltSubject");


                    $target_dir = "Science/$Subject/$Subject";


                    $target_file = $target_dir ."/". $_FILES["fileUpload"]["name"];


                    $FileType = pathinfo($target_file,PATHINFO_EXTENSION);


                     if($_FILES['fileUpload']['tmp_name']=='none')


                     {


                    


                        echo "<script language=\"javascript\" type=\"text/javascript\">alert(\"File does not exist or could not be uploaded\")</script>";


                        


                        $uploadOk=0;


                     }


                     // Allow certain file formats


                        if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg"


                        && $FileType != "gif"  && $FileType != "docx" && $FileType != "doc" && $FileType != "xl" && $FileType != "ppt" && $FileType != "pdf")


                        {


                            


                            echo "<script language=\"javascript\">alert(\"Sorry, only JPG, JPEG,docx,doc,xl,pdf,ppt, PNG & GIF files are allowed.\")</script>";                    


                            $uploadOk = 0;


                        }


                    // Check if file already exists


                    if (file_exists($target_file)) 


                    {


                        echo "<script language=\"javascript\" type=\"text/javascript\">alert(\"Sorry, file already exists.\")</script>";


                        $uploadOk = 0;


                    }


                    // Check file size


                    if ($_FILES["fileUpload"]["size"] > 500000)


                    {


                        echo "<script language=\"javascript\" type=\"text/javascript\">alert(\"Sorry, your file is too large.\")</script>";


                        $uploadOk = 0;


                    }


                    // Check if $uploadOk is set to 0 by an error


                    if ($uploadOk == 0) 


                    {


                        echo "<script language=\"javascript\" type=\"text/javascript\">alert(\"Sorry, your file was not uploaded.\")</script>";


                    // if everything is ok, try to upload file


                    }


                    else 


                     {


                        $Moved=@move_uploaded_file($_FILES['fileUpload']['tmp_name'], "$target_file");


                        if ($Moved==true)                    


                         {


                            $Confirmation=$_FILES["fileUpload"]["name"];


                            echo "<script language=\"javascript\" type=\"text/javascript\">alert(\"Your File  $Confirmation is successfully uploaded\")</script>";


                        


                         }


                         else


                        {


                            echo "<script language=\"javascript\" type=\"text/javascript\">alert(\"Sorry, there was an error uploading your file.\")</script>";


                        }


                     }


                 }


                 if (($_POST['RadFileType']=='File' && $uploadOk != 0) or( $_POST['RadFileType']=='text' && $uploadOk != 0)) 


                 {


                    $objADDTutorialManager=new clsAddTutorialManager();


                    $objADDTutorial=new clsWGAddTutorial();    


                    $objADDTutorialSet= new clsWGAddTutorialSet();


                    


                     $objADDTutorial->setWGUserId(124);                


                    $objADDTutorial->setWGUserType('admin');


                    $objADDTutorial->setWGCategory($_POST['sltCategory']);


                    $objADDTutorial->setWGSubCategory($_POST['sltSubCategoryName']);                             


                    $objADDTutorial->setWGSubject($_POST['sltSubject']);


                    $objADDTutorial->setWGTitle($_POST['txtTitle']);   


                    $objADDTutorial->setWGFileName($_FILES['fileUpload']['name']);


                    $objADDTutorial->setWGFileType($_POST['RadFileType']);


                    $objADDTutorial->setWGDiscription($_POST['textAreaBody']);


                    $objADDTutorial->setWGSubTitle($_POST['txtSubTitle']);


                    //$objADDTutorial->setWGtime($currentDate);


                    $AddTutResult=$objADDTutorialManager->SaveTutorial($objADDTutorial);


                    print_r($objADDTutorial);


                    echo $AddTutResult;


                    if($AddTutResult==1)


                    {


                        echo "<script language=\"javascript\">alert(\"Tutorial Saved Successully\");</script>";


                    }


                    if($AddTutResult==2)


                    {


                        echo "<script language=\"javascript\">alert(\"Aiyo........ Tutorial Not Saved\");</script>";


                    }


               }


               else


               {


                echo "<script language=\"javascript\">alert(\"Aiyo........ Tutorial Not Saved\");</script>";


               }


                                  


          }	


	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////


?>


<?php


    require "IndexRelated/indexUpper.php";


?>	


                                       <!-- Start from Here -->


                                       <!--------------------------------------->


        			<div class="post">


                    <form name="frmAddTutorial" method="POST" enctype="multipart/form-data">


                    <input type="hidden" name="hidCat" id="hidCatId" value="<?php echo $_POST['hidCat'] ?>" />


                    <input type="hidden" name="hidSubCat" id="hidSubCatId" value="<?php echo $_POST['hidSubCat'] ?>"  />


                    <input type="hidden" name="hidSubject" id="hidSubjectId" value="<?php echo $_POST['hidSubject'] ?>"  />


                        <h2 class="title" align="center">Add Tutorial</h2>


                        <table  align="center"  width="90%" cellpadding="5" cellspacing="0" border="0" class="PageTextBox">


                        	<tr>


                                    <td width="30%">&nbsp;</td>


                                    <td width="30%"></td>


                                    <td width="5%">&nbsp;</td>


                                    <td width="25%">&nbsp;</td>                                        


                            </tr>


                            <tr>


                            <td colspan="0">


                            Category :


                               </td>


                               <td>


                               <select class="sltBox" name="sltCategory" id="sltCategoryId" onchange="SelectSubcat(this.value,'NA')">


                                    <option value="NA" >&lt;Category&gt;</option>


                                    <option <?php if($_REQUEST['sltCategory']=="Science and Technology") echo "selected" ?> >Science and Technology</option>


                                    <option <?php if($_REQUEST['sltCategory']=="Sprituality") echo "selected" ?> >Sprituality</option>


                                    <option <?php if($_REQUEST['ltCategory']=="History") echo "selected" ?> >History</option>


                                    <option <?php if($_REQUEST['sltCategory']=="Helth") echo "selected" ?> >Helth</option>


                                    <option <?php if($_REQUEST['sltCategory']=="Geology") echo "selected" ?> >Geology</option>


                                    <option <?php if($_REQUEST['sltCategory']=="Others") echo "selected" ?> >Others</option>


                                    


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


                                    <?php                                    


                                    //for($i=0;$i<$numrecord;$i++)


//                                    {


//                                         $objWGSubCategory=new clsWGSubCategory();


//                                         $objWGSubCategory=$objWGSubCategorySet->GetItem($i);                            


//                                         $SubCategoryName=$objWGSubCategory->getWGSubCategoryName();


//                                         $SubCategoryID=$objWGSubCategory->getWGSubCategoryID();


//                                         //if($SubCategoryName==$sltSubCategoryName) 


//                                          //echo "<option value=\"$SubCategoryID\" selected>$i ,$SubCategoryName</option>";                                                       


//                                         //else


//                                          echo "<option value=\"$SubCategoryName\">$SubCategoryName</option>";                                 }


                                    ?>


                                    


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


                                    <?php                                    


                                    //for($i=0;$i<$numrecordSub;$i++)


//                                    {


//                                         $objWGSubject=new clsWGSubject();


//                                         $objWGSubject=$objWGSubjectSet->GetItem($i);                            


//                                         $WGSubId=$objWGSubject->getWGSubjectId();


//                                         $WGSubName=$objWGSubject->getWGSubjectName();


//                                         //if($SubCategoryName==$sltSubCategoryName) 


//                                          //echo "<option value=\"$SubCategoryID\" selected>$i ,$SubCategoryName</option>";                                                       


//                                         //else


//                                          echo "<option value=\"$WGSubName\">$WGSubName</option>";                                 }


//                                    ?>


                                    


                                </select>


                               </td>


                           </tr>


                           <tr>


                               <td colspan="0">


                                 Title:


                               </td>


                               <td>


                                <input type="text" class="PageTextBox" name="txtTitle" id="txtTitleId"  value="<?php echo $_POST['txtTitle'];  ?>"  />


                               </td>


                           </tr>


                            <tr>


                               <td colspan="0">


                                 Type:


                               </td>


                               <td>


                                <input type="radio" value="File" name="RadFileType" id="RadFileTypeID1" onclick="ShowTable()" <?php if($_POST['RadFileType']=="File") echo "checked"?> />File


                                <input type="radio" value="text" name="RadFileType" id="RadFileTypeID2" onclick="ShowTable()" <?php if($_POST['RadFileType']=="text") echo "checked" ?> />text


                               </td>


                           </tr>


                           


                           <tr>


                               <td colspan="0">


                                 Upload File:


                               </td>


                               <td>


                                <input  class="Txt" type="file" name="fileUpload" id="fileUploadId" /><p>Only <font color="Blue">pdf,doc,docx,xl,jpeg</font> is allow</p>


                               </td>


                           </tr>


                         </table>


                           <table style="display: none;" id="tblShowTableId" align="center" border="0" width="90%" cellpadding="5" cellspacing="0" class="PageTextBox" >


                           <tr>


                                    <td width="30%">&nbsp;</td>


                                    <td width="30%"></td>


                                    <td width="5%">&nbsp;</td>


                                    <td width="25%">&nbsp;</td>                                        


                            </tr>


                          <tr>


                               <td colspan="0">


                                 Sub Tilte:


                               </td>


                               <td>


                                <input   class="PageTextBox" id="txtSubTitleId" name="txtSubTitle" type="text" value="<?php echo $_POST['txtSubTitle'];  ?>" />


                               </td>


                           </tr>


                           <tr>


                               <td colspan="0">


                                 Theory :


                               </td>


                               <td>


                                <textarea class="txtTextBox" style="resize: vertical; max-height: 300px;" name="textAreaBody" id="textAreaBodyId" ><?php echo $_POST['textAreaBody']; ?></textarea>


                                


                               </td>


                           </tr>


                           


                           </table>


                           <table align="center"  border="0" width="90%" cellpadding="5" cellspacing="0" class="PageTextBox" >


                           <tr>


                               <td colspan="2" align="center">


                                <input type="button" name="BtnAdd" id="BtnAddId" onclick="save()" class="addButton" value="Add" />


                                            


                               </td>


                           </tr>


                           


                            


                        </table>


                       <!-- <div class="PDF">10Storage Class


                        Note:-[when browser will not Support then File automatically download


                                  for next chapter/lession click on next]


                           <object data="ShomPrasadDas/BE2105_2084.pdf#page=2" type="application/pdf" width="600" height="650">


                           


                               C Programming : <a href="ShomPrasadDas/BE2105_2084.pdf">ShomPrasadDas/BE2105_2084.pdf</a>





                           </object>


                        </div>-->


                        </form>


        			</div>


        		 <div style="clear: both;">&nbsp;</div>                     


                                <!--Work section End -->


                                <!--------------------------------------->


<?php


    require "IndexRelated/indexLower.php";


    /**


 * echo "<script>


 *      SelectSubcat(document.getElementById(\"hidCatId\").value,document.getElementById(\"hidSubCatId\").value);


 *     SelectSubject(document.getElementById(\"hidSubCatId\").value,document.getElementById(\"hidSubjectId\").value)


 *     </script>"


 */


?>       		


	


<script language="javascript" type="text/javascript">


	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////





    SelectSubcat(document.getElementById("hidCatId").value,document.getElementById("hidSubCatId").value);


    SelectSubject(document.getElementById("hidSubCatId").value,document.getElementById("hidSubjectId").value)


    


    var Radio=window.document.frmAddTutorial.RadFileType.value;


    var TableShow=document.getElementById('tblShowTableId');


    if(Radio=='text')


    {


        TableShow.style.display="table"; 


    } 


    else


    {


        document.getElementById('textAreaBodyId').value='';


        document.getElementById('txtSubTitleId').value='';


        TableShow.style.display="none";


    }


    function Trim(numeric)


 {


	var count=0;


	var count1=0;


	for(var j=0; j<numeric.length; j++)


	{


	  var alphaa = numeric.charAt(j);


	  var hh = alphaa.charCodeAt(0);


	  if(hh == 32)


	  {


	  	count++;


		continue;  


	  }


	  else


	  	break; 


	} 


	for(var j=numeric.length-1; j>=0; j--)


	{


	 


	  var alphaa = numeric.charAt(j);


	  var hh = alphaa.charCodeAt(0);


	  


	  if(hh == 32)


	  {


	  	count1++;


		continue;


	  }


	  else


	  	break; 


	} 


	


	if(count>0 || count1>0)


	{


		count1 = numeric.length - (count1+count);


		return numeric.substr(count,count1);


	}	


	else


		return numeric;


 }





		function getXmlHttpRequestObject() 


		{


			if (window.XMLHttpRequest) 


			{


				return new XMLHttpRequest();


			} 


			else if(window.ActiveXObject) 


			{


				return new ActiveXObject("Microsoft.XMLHTTP");


			} 


			else 


			{


				alert("Could not create XmlHttpRequest Object.  Consider upgrading your browser.");


			}


		}


        function SelectSubcat(val,sel)


        {  


            if(val=="NA")


            {


                return;


            }


            else


            {


                objXMLHttpRequest=getXmlHttpRequestObject();


    			var url = "GetSelect.php";


    			url = url+"?hidValue=" + val;


                url = url+"&type=1";


    			url = url+"&sid="+Math.random();


    			objXMLHttpRequest.open("GET", url, true);


    			objXMLHttpRequest.onreadystatechange = function()


    			{


    				if (objXMLHttpRequest.readyState==4)


            		{


                		var response = objXMLHttpRequest.responseText;


        				var arrayValue=response.split("#");


                        var arrayValue1=arrayValue[1].split("%");


                        var SubCategoryName=document.getElementById('sltSubCategoryNameId');


                        SubCategoryName.options.length = 0;


                        SubCategoryName.options[0] = new Option("< Select Sub Category >", "NA", false, false);


                        var j=1;


        				for(var i=0;i<(arrayValue1.length);++i)


                        {


							var textAndVal=Trim(arrayValue1[i])


                            if(textAndVal!='')


                            {


                                if(sel==textAndVal)


                                {


                                    SubCategoryName.options[j++] = new Option(textAndVal, textAndVal , true, true);


                                }


                                else


                                {


                                    SubCategoryName.options[j++] = new Option(textAndVal, textAndVal , false, false);


                                }


                            }


                            


                        }


                    }


    			} 


    			objXMLHttpRequest.send(null);


            }


        }


        function SelectSubject(val,sel)


        {


            if(val=="NA")


            {


                return;


            }


            else


            {


                objXMLHttpRequest1=getXmlHttpRequestObject();


    			var url = "getSelect.php";


    			url = url+"?hidValue=" + val;


                url = url+"&type=2";


    			url = url+"&sid="+Math.random();


    			objXMLHttpRequest1.open("GET", url, true);


    			objXMLHttpRequest1.onreadystatechange = function()


    			{


    				if (objXMLHttpRequest1.readyState==4)


            		{


                		var response = objXMLHttpRequest1.responseText;


                        var arrayValue=response.split("#");


                        var arrValue=arrayValue[1].split("%")


                        var objSubject=document.getElementById('sltSubjectID');


                        objSubject.options.length = 0;


                        objSubject.options[0] = new Option("< Select Subject >", "NA", false, false);


                        var j=1;


        				for(var i=0;i<(arrValue.length);++i)


                        {


    							var textAndVal=Trim(arrValue[i])


                            if(textAndVal!='')


                            {


                                if(sel==textAndVal)


                                {


                                    objSubject.options[j++] = new Option(textAndVal, textAndVal , true, true);


                                }


                                else


                                {


                                    objSubject.options[j++] = new Option(textAndVal, textAndVal , false, false);


                                }


                            }


                        }


                        document.getElementById("hidSubject").value=numOfSubject;


                    }


    			} 


    			objXMLHttpRequest1.send(null);


            }


        }


        


    function save()


    {


        var Category=document.getElementById('sltCategoryId').value;


        var objCategory=document.getElementById('sltCategoryId');


        if(Category=='NA')


        {


            


            swal("","Please Select Category");


            objCategory.focus();


            objCategory.select();


            return false;


        }





        var SubCategoryName=document.getElementById('sltSubCategoryNameId').value;


        var objSubCategoryName=document.getElementById('sltSubCategoryNameId');


        if(SubCategoryName=='NA')


        {


            swal("","Please Select Sub Category");


            objSubCategoryName.focus();


            objSubCategoryName.selected();


            return false;


        }


        


        var Subject=document.getElementById('sltSubjectID').value;


        var objSubject=document.getElementById('sltSubjectID');


        if(Subject=='NA')


        {


            swal("","Please Select Subject");


            objSubject.focus();


            objSubject.selected();


            return false;


        }


        var Title=document.getElementById('txtTitleId').value;


        var objTitleId=document.getElementById('txtTitleId');


        if(Title=='')


        {


            swal("","Please Enter Title");


            return false;


        }


        


        var Radio=window.document.frmAddTutorial.RadFileType.value;       


        if(Radio=='')


          {


              swal("","Please check Radio Button");


             return false;


             


         }


         var AreaBody=document.getElementById('textAreaBodyId').value;


         var SubTitel=document.getElementById('txtSubTitleId').value;


         var file=document.getElementById('fileUploadId').value;


         if(Radio=='File')


         {


             document.getElementById('textAreaBodyId').value='';


             document.getElementById('txtSubTitleId').value='';


             if(file=='')


             {


                 swal("","Please Upload File");


                 return false;


             }


         


            var Splitfile=file.split('.');            


            if((Splitfile[1]!='jpg') && (Splitfile[1]!='jpeg') && (Splitfile[1]!='docx') && (Splitfile[1]!='doc') && (Splitfile[1]!='pdf') &&(Splitfile[1]!='xl')&& (Splitfile[1]!='ppt'))


            {


                swal("","only jpg,jpeg,docx,doc,xl,ppt and pdf is allow");


                return false;


            }


         }


            if(Radio=='text')


            {                


                if(AreaBody=='')


                {


                  swal("","Please Enter Theory");


                  return false;  


                }                


                if(SubTitel=='')


                {


                  swal("","Please Enter Theory");


                  return false; 


                }


            }


            window.document.frmAddTutorial.hidValue=1;


            window.document.frmAddTutorial.hidCat.value=Category;


            window.document.frmAddTutorial.hidSubCat.value=SubCategoryName;


            window.document.frmAddTutorial.hidSubject.value=Subject;   


            window.document.frmAddTutorial.submit();        


   }


	   


  function ShowTable()


  {


    var Radio=window.document.frmAddTutorial.RadFileType.value;


    var TableShow=document.getElementById('tblShowTableId');


    if(Radio=='text')


    {


        TableShow.style.display="table"; 


    } 


    else


    {


        TableShow.style.display="none";


    }


  }


 	function Category(Category)


        {


            var url="/Science/Science.php";


            url=url+"?sesCategory="+Category;


            location.href=url;


        }


	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////


    


</script>