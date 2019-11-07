<?php


//   This class is generated by Class Automation System


//	Class Name             :   clsStudentDetailManager


//	Type                   :   Manager Class


//	Description            :   This class implements the methods for DML operations of table clsDegreeDetailManager


//	Author                 :   Ashutosh Kumar Choubey


//	Date                   :   08/09/2011


//	Modified By            :   


//	Date of Modification   :   


//	Purpose of Modification:  


require_once ($_SERVER['DOCUMENT_ROOT']."/Science/CProgramming/classes/clsWGSubCategory.php");


require_once ($_SERVER['DOCUMENT_ROOT']."/Science/CProgramming/classes/clsWGSubCategorySet.php");


class clsWGSubCategoryManager


{


   function RetrieveWGSubCategorySet($sQuery)


   {


        global $DOCUMENT_ROOT;


        require($_SERVER['DOCUMENT_ROOT']."/dbconnect.php");


        $objWGSubCategorySet=new clsWGSubCategorySet();


        $rslWGSubCategory = mysqli_query($connection,$sQuery) or die ("Couldn't execute query in clsWGSubCategoryManager:RetrieveWGSubCategorySet.");


        $lNumRows = mysqli_num_rows($rslWGSubCategory);


        if($lNumRows == 0)


        {


            mysqli_close();


            return $objWGSubCategorySet;


        }


        for($lCount = 0; $lCount < $lNumRows; $lCount++)


        {             


            $objWGSubCategory=new clsWGSubCategory();


            $arrWGSubCategory=mysqli_fetch_assoc($rslWGSubCategory);            


            $objWGSubCategory->setWGSubCategoryID($arrWGSubCategory[wgsubcategoryid]);        


            $objWGSubCategory->setWGSubCategoryName($arrWGSubCategory[wgsubcategoryname]);         


            $objWGSubCategorySet->Add($objWGSubCategory);


        }


        mysqli_close();


        return $objWGSubCategorySet;


    }





    


}


?>