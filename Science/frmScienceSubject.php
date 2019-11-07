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

$Description="This is the List of Subject for different category.where You can Download Offline Mareials";

$Keywords="Download Offline Material,Download project,Download";

$Title="Download Offline Material";



$sesSubCategory1=$_REQUEST['sesSubCategory'];

$sesCategory1=$_REQUEST['sesCategory'];

	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////

			require_once ($_SERVER['DOCUMENT_ROOT']."/Science/CProgramming/classes/AllClasses.php");

             $objADDTutorialManager=new clsAddTutorialManager();

             $objADDTutorial=new clsWGAddTutorial();    

             $objADDTutorialSet= new clsWGAddTutorialSet();

             $SQuery="select distinct wgsubject from wgaddtutorial where wgsubcategory='$sesSubCategory1'";

             $objADDTutorialSet=$objADDTutorialManager->RetrieveWGAddTutorialSet($SQuery);

             $numrecord=$objADDTutorialSet->GetCount();

	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////

?>

<?php

    require "IndexRelated/indexUpper.php";

?>



                                       <!-- Start from Here -->

                     <div class="table-responsive"><h3>Science And Technology &gt;<?php echo $sesSubCategory1; ?>&gt;Subject</h3> </div>
                     <div class="table-responsive">
        			 <table align="center"  width="80%" cellpadding="5" cellspacing="0" border="0" class="PageTextBox table table-hover table-bordered">

                                       <?php

                                         for($i=0;$i<$numrecord;$i++)

                                            {

                                             $objADDTutorial=new clsWGAddTutorial(); 

                                             $objADDTutorial=$objADDTutorialSet->GetItem($i);                            

                                             $sWGSubject=$objADDTutorial->getWGSubject();  

                                               echo " <tr>";

                                                 echo" <td><a href=\"javascript:void subject('$sWGSubject','$sesSubCategory1','$sesCategory1')\">$sWGSubject</a></td>";

                                               echo " </tr>";

                                             }

                                        ?>                                 

                     </table>
                     </div>

       			                    <!--------------------------------------->

                    

                    

                    

                    

                    

                                        <!--Work section End -->

                                <!--------------------------------------->

<?php

    require "IndexRelated/indexLower.php";

?>

   

<script language="javascript" type="text/javascript">

	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////

	function subject(wgSubject,SubCategory,Category)

    {

        if(wgSubject=="C++")

        {

            wgSubject="CAA";

        }

        var url="frmSubjectFile.php?";

        url=url+"sesSubject="+wgSubject; 

        url=url+"&sesSubCategory="+SubCategory;

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