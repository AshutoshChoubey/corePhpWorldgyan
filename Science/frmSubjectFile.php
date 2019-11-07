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

$Description="This is the List of Chapter/Title/Topics for different Subject.where You can Download Offline Mareials";

$Keywords="Download Offline Material,Download project,Download,Category wise download,Subject wise download";

$Title="Download Offline Material";



$sesSubject1=$_REQUEST['sesSubject'];

$sesSubCategory1=$_REQUEST['sesSubCategory'];

$sesCategory1=$_REQUEST['sesCategory'];

if($sesSubject1=='CAA')

$sesSubject1='C++';

	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////

		require_once ($_SERVER['DOCUMENT_ROOT']."/Science/CProgramming/classes/AllClasses.php");

             $objADDTutorialManager=new clsAddTutorialManager();

             $objADDTutorial=new clsWGAddTutorial();    

             $objADDTutorialSet= new clsWGAddTutorialSet();

             $SQuery="select wgfilename,wgtitle from wgaddtutorial where wgsubject='$sesSubject1' and wgsubcategory='$sesSubCategory1' order by wgtitle";    

             $objADDTutorialSet=$objADDTutorialManager->RetrieveWGAddTutorialSet($SQuery);

             $numrecord=$objADDTutorialSet->GetCount();

             $Subject=str_replace(" ","","$sesSubject1");

             $Category=str_replace(" ","","$sesSubCategory1");

	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////

?>

<?php

    require "IndexRelated/indexUpper.php";

?>

                                       <!-- Start from Here -->

                     <div class="table-responsive"><h3><?php echo $sesCategory1?> &gt;<?php echo "<a href=\"/Science/frmScienceSubject.php?sesSubCategory=$sesSubCategory1&sesCategory=$sesCategory1\">  $sesSubCategory1 </a>" ?>&gt;<?php echo $sesSubject1 ?>&gt;Title of file</h3> </div>                                       
                     <div class="table-responsive">
        			 <table align="center"  width="80%" cellpadding="5" cellspacing="0" border="0" class="PageTextBox table table-hover table-bordered">

                                       <?php

                                         for($i=0;$i<$numrecord;$i++)

                                         {

                                         $objADDTutorial=new clsWGAddTutorial(); 

                                         $objADDTutorial=new clsWGAddTutorial();

                                               $objADDTutorial=$objADDTutorialSet->GetItem($i);                                                 

                                                $sWGTitle=$objADDTutorial->getWGTitle();            

                                                $sWGDiscription=$objADDTutorial->getWGDiscription();         

                                                $sWGFileName=$objADDTutorial->getWGFileName();      

                                                $sWGFileType=$objADDTutorial->getWGFileType(); 

                                              $j=$i+1;

                                           echo " <tr>";

                                           echo "<td>$j</td>";

                                             echo" <td style=\"color:red\">Under Maintainance we will back son.......";

                                              //echo "<object data=\"$sWGTitle.pdf\" type=\"application/pdf\" width=\"300\" height=\"200\">";
                                             // if(file_exists("$Subject/$Subject/$sWGFileName"))
                                               //echo  "$sesSubject1 : <a href=/Science/$Subject/$Subject/$sWGFileName>$sWGTitle</a>";
                                               //else
                                               //echo  "$sesSubject1 : $sWGTitle";
                                               
                                              //echo "</object>" ;

                                            echo " </td>";

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

 function Category(Category)

{

    var url="/Science/Science.php";

    url=url+"?sesCategory="+Category;

    location.href=url;

}			

	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////

    

</script>

</html>