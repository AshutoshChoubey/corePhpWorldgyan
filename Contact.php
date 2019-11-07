<?php


    require "IndexRelated/indexUpper.php";


    require_once($_SERVER['DOCUMENT_ROOT']."/classes/clswgcontactManager.php");


    


    $objwgcontactSet = new clswgcontactSet();


    $objwgcontact = new clswgcontact();


    $objwgcontactManager = new clswgcontactManager();


    $txtName=$_POST['txtName'];


    $txtEmail=$_POST['txtEmail'];


    $txtMobNum=$_POST['txtMobNum'];


    $txtWebsite=$_POST['txtWebsite'];


    $txtSubject=$_POST['txtSubject'];


    $textDic=$_POST['textDic'];


   


 if($_SERVER['REQUEST_METHOD']=="POST")


             { 


        $objwgcontact->setdiscription($textDic);


        $objwgcontact->setemail($txtEmail);


        $objwgcontact->setmobnum($txtMobNum);


        $objwgcontact->setname($txtName);


        $objwgcontact->setsubject($txtSubject);


        $objwgcontact->setwebsite($txtWebsite);


      $Result=$objwgcontactManager->Savewgcontact($objwgcontact);


      echo $Result;


      if($Result==1)


        {


            echo "<script language=\"javascript\">alert(\"Success....We will contact you soon\");</script>";


        }


        if($Result==2)


        {


            echo "<script language=\"javascript\">alert(\"Aiyo........ It was error.....Try again\");</script>";


        }





  }    


    


    


    


?> 


		<!------------------------------------------------------ Center Column Start ------------------------------------------------------------>


                           <!--------------------------------------->


        			 <h2 class="title" align="center">Contact</h2>


                                   <div class="table-responsive " >


                                 


                    <form name="frmContact" method="POST" >


                    <input type="hidden" name="hidCat" id="hidCatId" value="<?php echo $_POST['hidCat']?>" />


                    <input type="hidden" name="hidSubCat" id="hidSubCatId" value="<?php echo $_POST['hidSubCat'] ?>"  />


                    <input type="hidden" name="hidSubject" id="hidSubjectId" value="<?php echo $_POST['hidSubject'] ?>"  />


                       


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


                                 Discription :


                               </td>


                               <td>


                                <textarea class="form-control" style="resize: vertical; max-height: 300px;" name="textDic" id="textDicID" ><?php echo $_POST['textDic']; ?></textarea>


                                


                               </td>


                           </tr>                           


                        </table>


                        <div align="center">


                       <input type="button"  style="border-color: Black; " class="btn bg-primary " align="center" onclick="Contact()" value="Contact"/></button>


				</div><br />


                


                <div  style="color: #020821;">


                <h2 class="h2" > Address</h2>


                Ashutosh Kumar Choubey<br />


                GNP-2,Gajapatinager<br />


                Berhampur,Odisha<br />


                Pin -760010<br />


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


        


        


		<!------------------------------------------------------ /Center Column Start ------------------------------------------------------------>


<?php


    require "IndexRelated/indexLower.php";


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


        var Discription=document.getElementById('textDicID').value;


        var objDiscription=document.getElementById('textDicID');


        if(Discription=='')


        {


            objDiscription.focus();


            objDiscription.select();


            swal("","Please Enter Your Message");


            return false;


        }





        


         //window.document.Contact.HidPost=1;


             


            window.document.frmContact.submit(); 


            //window.document.frmAddTutorial.hidValue=1;


             


           // window.document.frmAddTutorial.submit();        


   }


	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////


    


</script>