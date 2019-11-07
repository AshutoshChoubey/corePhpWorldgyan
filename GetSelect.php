<?php


session_start();


/**


 * @FormName        	 :getSelect.php


 * @Difficultylevel 	 :Low


 * @author 				 :


 * @copyright 			 :


 * @ModifiedBy			 :


 * @DateOfModification	 :


 * @PurposeOfModification:


 * @


 */


$hidValue1 = $_REQUEST['hidValue'];


if($_REQUEST["type"]==1)// 1: Retrieve data 


{


    


    	require_once ($_SERVER['DOCUMENT_ROOT']."/Science/CProgramming/classes/clsWGSubjectManeger.php");


            $objWGSubject=new clsWGSubject();


             $objWGSubjectSet=new clsWGSubjectSet();    


             $objWGSubjectManager=new clsWGSubjectManeger();


             $SQuery="select distinct wgsubcategory from wgsubject where wgcategory='$hidValue1'" ;


             //echo $SQuery;


             $objWGSubjectSet=$objWGSubjectManager->RetrieveWGSubjectSet($SQuery);


             $numrecordSub=$objWGSubjectSet->GetCount();


    $sReturnStr="#";


    for($i=0;$i<$numrecordSub;++$i)


	{


		 $objWGSubject=new clsWGSubject();


         $objWGSubject=$objWGSubjectSet->GetItem($i);                            


         $WGSubCategory=$objWGSubject->getWGSubCategory();


        if($i==0)


        {


            $sReturnStr=$sReturnStr.$WGSubCategory;


        }


        else


        {


            $sReturnStr=$sReturnStr."%".$WGSubCategory;


        }


    }


    $sReturnStr=$sReturnStr."#";


    echo $sReturnStr;


}


if($_REQUEST["type"]==2)// 1: Retrieve data 


{


    	require_once ($_SERVER['DOCUMENT_ROOT']."/Science/CProgramming/classes/clsWGSubjectManeger.php");


             $objWGSubject=new clsWGSubject();


             $objWGSubjectSet=new clsWGSubjectSet();    


             $objWGSubjectManager=new clsWGSubjectManeger();


             $SQuery="select distinct wgsubjectname from wgsubject where wgsubcategory='$hidValue1'" ;


             $objWGSubjectSet=$objWGSubjectManager->RetrieveWGSubjectSet($SQuery);


             $numrecordSub=$objWGSubjectSet->GetCount();


             $sReturnStr="#";


     for($i=0;$i<$numrecordSub;$i++)


     {


         $objWGSubject=new clsWGSubject();


         $objWGSubject=$objWGSubjectSet->GetItem($i);                  


         $WGSubName=$objWGSubject->getWGSubjectName();


        if($i==0)


        {


            $sReturnStr=$sReturnStr.$WGSubName;


        }


        else


        {


            $sReturnStr=$sReturnStr."%".$WGSubName;


        }


    }


    $sReturnStr=$sReturnStr."#";


    echo $sReturnStr;


}








?>


