<?php



/*



*Form Name               : index.php



*Difficulty level        : 



*Description             : Index Page 



*Author                  : ASHUTOSH KUMAR CHOUBEY



*Date                    : 17/12/2017



*Modified By             :



*Date of Modification    :



*Purpose of Modification :



*/



$Author="Ashutosh Kumar Choubey";



$Description="This is the List of different category for Diffenent Subject.where You can Download Offline Mareials";



$Keywords="Download Offline Material,Download project,Download";



$Title="Download Offline Material";







$sesCategory1=$_REQUEST['sesCategory'];



	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////



			require_once ($_SERVER['DOCUMENT_ROOT']."/Science/CProgramming/classes/AllClasses.php");



             $sesCategory=$_REQUEST['sesCategory'];



             $objWGSubject=new clsWGSubject();



             $objWGSubjectSet=new clsWGSubjectSet();    



             $objWGSubjectManager=new clsWGSubjectManeger();



             $SQuery="select distinct wgsubcategory from wgsubject where wgcategory='$sesCategory1'" ;



             $objWGSubjectSet=$objWGSubjectManager->RetrieveWGSubjectSet($SQuery);



             $numrecordSub=$objWGSubjectSet->GetCount();



	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////



?>



<?php



    require "IndexRelated/indexUpper.php";



?>



<div style="width: 100%;">



                                       <!-- Start from Here -->



                    <div class="table-responsive"><h3><?php echo $sesCategory ?> &gt;Category</h3> </div>

                    <div class="table-responsive">

        			 <table align="center"  width="80%" cellpadding="5" cellspacing="0" border="0" class="PageTextBox table table-hover table-bordered">



                                       <?php



                                         for($i=0;$i<$numrecordSub;$i++)



                                        	{



                                        		 $objWGSubject=new clsWGSubject();



                                                 $objWGSubject=$objWGSubjectSet->GetItem($i);                            



                                                 $WGSubCategory=$objWGSubject->getWGSubCategory();



                                           echo " <tr>";



                                             echo" <td><a href=\"javascript:void subject('$WGSubCategory','$sesCategory1')\">$WGSubCategory</a></td>";



                                           echo " </tr>";



                                         }



                                        ?>                                 



                     </table>

                     </div>



</div>



                               <!--------------------------------------->                    



                                        <!--Work section End -->



                                <!--------------------------------------->



<?php



    require "IndexRelated/indexLower.php";



?>



        		



<script language="javascript" type="text/javascript">



	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////



	function subject(SubCategory,Category)



    {



        var url="frmScienceSubject.php";



        url=url+"?sesSubCategory="+SubCategory;



        url=url+"&sesCategory="+Category;



        location.href=url;



    }



    	function Category(Category)



        {



            var url="/Science/Science.php";



            url=url+"?sesCategory="+Category;



            location.href=url;



        }			



	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////



    



</script>



</html>