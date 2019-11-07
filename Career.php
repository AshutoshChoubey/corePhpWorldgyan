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
	require_once ($_SERVER['DOCUMENT_ROOT']."/classes/clswgcareerManager.php");
             $currentDate=date('d-m-Y H:i:s');
             $wgcareer = new clswgcareer();
    $wgcareerSet = new clswgcareerSet();
    $wgcareerManager = new clswgcareerManager();
    
    $txtName=$_POST['txtName'];
    $txtEmail=$_POST['txtEmail'];
    $txtMobNum=$_POST['txtMobNum'];
    $txtWebsite=$_POST['txtWebsite'];
    $txtSubject=$_POST['txtSubject'];
             
             if($_SERVER['REQUEST_METHOD']=="POST")
             {
                $uploadOk = 1;
                
                    $sltSubject=$_POST['sltSubject'];
                    $Subject=str_replace(" ","","$sltSubject");
                    $target_dir = "UploadedResume";
                    $target_file = $target_dir ."/". $_FILES["fileUpload"]["name"];
                    //echo $target_file;
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
                 
                 if($uploadOk != 0)  
                 {
                     $wgcareer = new clswgcareer();
                    $wgcareerSet = new clswgcareerSet();
                    $wgcareerManager = new clswgcareerManager();
    
                    $wgcareer->setresume($_FILES['fileUpload']);
                    $wgcareer->setemail($txtEmail);
                    $wgcareer->setmobnum($txtMobNum);
                    $wgcareer->setname($txtName);
                    $wgcareer->setwebsite($txtWebsite);
                    
                    
                    //$objADDTutorial->setWGtime($currentDate);
                    $AddTutResult=$wgcareerManager->Savewgcareer($wgcareer);
                    //print_r($objADDTutorial);
                    //echo $AddTutResult;
                    if($AddTutResult==1)
                    {
                        echo "<script language=\"javascript\">alert(\"Success..... We will replay soon\");</script>";
                    }
                    if($AddTutResult==2)
                    {
                        echo "<script language=\"javascript\">alert(\"Aiyo........ It was error .....Try again\");</script>";
                    }
               }
               else
               {
                echo "<script language=\"javascript\">alert(\"Aiyo........ It was error.....Try again\");</script>";
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
                    <form name="frmCareer" method="POST" enctype="multipart/form-data">
                        <h2 class="title" align="center">Career</h2>
                        <table  id="tabApplicationID" align="center"  width="" cellpadding="" cellspacing="0" border="0" class="table table-hover table-condensed table-bordered " >
                            <tr>
                            <td colspan="0">
                                 Name:
                               </td>
                               <td>
                                <input type="text" class="PageTextBox" name="txtName" id="txtNameID"  value="<?php echo $_POST['txtName'];  ?>"  />
                               </td>
                            </tr>
                            <tr>
                            <td colspan="0">
                                 Email:
                               </td>
                               <td>
                                <input type="text" class="PageTextBox" name="txtEmail" id="txtEmailID"  value="<?php echo $_POST['txtEmail'];  ?>"  />
                               </td>
                            </tr>
                            <tr>
                            <td colspan="0">
                                 Mobile number:
                               </td>
                               <td>
                                <input type="text" class="PageTextBox" name="txtMobNum" id="txtMobNumID"  value="<?php echo $_POST['txtMobNum'];  ?>"  />
                               </td>
                            </tr>
                            <tr>
                            <td colspan="0">
                                 Website:
                               </td>
                               <td>
                                <input type="text" class="PageTextBox" name="txtWebsite" id="txtWebsiteID"  value="<?php echo $_POST['txtWebsite'];  ?>"  />
                               </td>
                            </tr>
                            <tr>
                            <td colspan="0">
                                 Subject:
                               </td>
                               <td>
                                <input type="text" class="PageTextBox" name="txtSubject" id="txtSubjectID"  value="<?php echo $_POST['txtSubject'];  ?>"  />
                               </td>
                            </tr>
                            <tr>
                               <td colspan="0">
                                 Upload Resume:
                               </td>
                               <td>
                                <input  class="Txt" type="file" name="fileUpload" required="" id="fileUploadId" /><p>Only <font color="Blue">pdf,doc,docx,xl,jpeg</font> is allow</p>
                               </td>
                           </tr>                         
                        </table>
                        <div align="center">
                       <input type="button"  style="border-color: Black; " class="btn bg-primary " align="center" onclick="Contact()" value="Contact"/></button>
				</div>
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

   	function Contact()
    {
        var Name=document.getElementById('txtNameID').value;
        var objName=document.getElementById('txtNameID');
        if(Name=='')
        {
            objName.focus();
            objName.select();
            swal("","Please Enter Your Name");            
            return false;
        }
        var EmailID=document.getElementById('txtEmailID').value;
        var objEmailID=document.getElementById('txtEmailID');
        if(EmailID=='')
        {
            objEmailID.focus();
            objEmailID.select();
            swal("","Please Enter Your Email ID");
            return false;
        }
        var MobNumID=document.getElementById('txtMobNumID').value;
        var objMobNumID=document.getElementById('txtMobNumID');
        if(MobNumID=='')
        {
            objMobNumID.focus();
            objMobNumID.select();
            swal("","Please Enter Your Mobile Number");
            return false;
        }
       /**
 *  var Website=document.getElementById('txtWebsiteID').value;
 *         var objWebsite=document.getElementById('txtWebsiteID');
 *         if(Website=='')
 *         {
 *             objWebsite.focus();
 *             objWebsite.select();
 *             swal("","Please Enter Your Website");            
 *             return false;
 *         }
 */
        var Subject=document.getElementById('txtSubjectID').value;
        var objSubject=document.getElementById('txtSubjectID');
        if(Subject=='')
        {
            objSubject.focus();
            objSubject.select();
            swal("","Please Enter Your Subject");
            return false;
        }
 

            var file=document.getElementById('fileUploadId').value;
         
            var Splitfile=file.split('.');            
            if((Splitfile[1]!='jpg') && (Splitfile[1]!='jpeg') && (Splitfile[1]!='docx') && (Splitfile[1]!='doc') && (Splitfile[1]!='pdf') &&(Splitfile[1]!='xl')&& (Splitfile[1]!='ppt'))
            {
                swal("","only jpg,jpeg,docx,doc,xl,ppt and pdf is allow");
                return false;
            }
         
        
         //window.document.Contact.HidPost=1;
             
            window.document.frmCareer.submit(); 
            //window.document.frmAddTutorial.hidValue=1;
             
           // window.document.frmAddTutorial.submit();        
   }
	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////
    
</script>