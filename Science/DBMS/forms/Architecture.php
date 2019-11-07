<?php

    $Author="Maneesha Mishra";

    $Description="Three Schema Architecture";

    $Keyword="Three Schema Architecture";

    $Title="Three Schema Architecture";

    $Contents='Architecture';//place Your Name Of Page

    require "IndexRelated/indexUpper.php";

?> 

		

        <!------------------------------------------------------ Center Column Start ------------------------------------------------------------>

<article>        

            <p ><a class="TutorialPreviousPagea" href="index.php">&lt;&lt;-Previous  Page</a>

                          <a class="TutorialNextPagea"  href="Language.php">Next Page-&gt;&gt;</a></p> <br/><!-- float: left; color:#430383 ; style for previous page-->  

            <!-- for Text Area it is for code--> 

        <p class="h2" align="center">Three Schema Architecture</p><br />

        <p align="center"><img class="img-responsive" src="images/3SchemaArchi.PNG"   alt=""/></p>

        

         <p class="h3" align="center">Three Main Advantages of Three Schema Architecture</p>

         <ul>

         <li class="PointTutorials">Data Abstraction.</li><br />

         <li class="PointTutorials">Multiple Views.</li><br />

         <li class="PointTutorials">Data Independency.</li><br />

         </ul>

         

         <p class="h3" align="center">External Level</p>

         <ul>

         <li class="PointTutorials">External level is related to the data which is viewed by individual End users.</li><br />

         <li class="PointTutorials">This level includes a no of user views or External Schemas.</li><br />

         <li class="PointTutorials">This level is closest to the user.</li><br />

         <li class="PointTutorials">External view describes the segment of the database that is required for a particular user group and hides the rest of the database from that user group.</li><br />

         </ul>

         

         <p class="h3" align="center">Conceptual Level</p>

         <ul>

         <li class="PointTutorials">Conceptual level describes the structure of the whole database for a group of users.</li><br />

         <li class="PointTutorials">It is also called as the data model.</li><br />

         <li class="PointTutorials">Conceptual schema is a representation of the entire content of the database.</li><br />

         <li class="PointTutorials">These schema contains all the information to build relevant external records.</li><br />

         <li class="PointTutorials">It hides the internal details of physical storage.</li><br />

         <li class="PointTutorials">Here data stores Dictionarily.</li><br />

         </ul>

         

         <p class="h3" align="center">Internal Level</p>

         <ul>

         <li class="PointTutorials">Internal level describes the physical storage structure of data in database.</li><br />

         <li class="PointTutorials">It is also known as Physical Level.</li><br />

         <li class="PointTutorials">This level is very close to physical storage of data.</li><br />

         <li class="PointTutorials">At lowest level, it is stored in the form of bits with the physical addresses on the secondary storage device.</li><br />

         <li class="PointTutorials">At highest level, it can be viewed in the form of files, Byte Offset is handeled here.</li><br />

         <li class="PointTutorials">The internal schema defines the various stored data types. It uses a physical data model.</li><br />

         <li class="PointTutorials">In simple words internal level handels the access path and Storage Structure.</li><br />

         </ul>

         

         <ol start="1">

         <li class="PointTutorials">The chanel of Request and Response of 2 level is Mapping.</li><br />

         <li class="PointTutorials">In 3 Schema Architecture we found two types of Independency one is Physical Data Independence and another is Logical Data Independence.</li><br />

         <li class="PointTutorials">Let us know first what is data independence, when changes made to one level does not effect other level is known as data independency.</li><br />

         <li class="PointTutorials">Changes made to Conceptual level does not effect the external level is known as Logical Data Independency.</li><br />

         <li class="PointTutorials">Changes made to internal level does not effect Conceptual level known as Physical Data Independency.</li><br />

         </ol>

</article>

		<!------------------------------------------------------ /Center Column Start ------------------------------------------------------------>

<?php

    require "IndexRelated/indexLower.php";

?> 

<script language="javascript" type="text/javascript">

	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////

				

	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////

    

</script>