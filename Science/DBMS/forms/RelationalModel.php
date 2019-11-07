<?php

    $Author="Maneesha Mishra";

    $Description="About Relational Model";

    $Keyword="Relational Model and Keywords";

    $Title="Relational Model";

    $Contents='RelationalModel';

    require "IndexRelated/indexUpper.php";

?> 

		

        <!------------------------------------------------------ Center Column Start ------------------------------------------------------------>

<article>        

            <p ><a class="TutorialPreviousPagea" href="ERModel.php">&lt;&lt;-Previous  Page</a>

                          <a class="TutorialNextPagea"  href="Coding.php">Next Page-&gt;&gt;</a></p> <br/><!-- float: left; color:#430383 ; style for previous page-->  

            <!-- for Text Area it is for code--> 

        <p class="h2" align="center">Keys in Relational Model with an Example</p><br />

        

        <p align="center"><img class="img-responsive" src="images/Relational.PNG"   alt=""/></p><br />

        

        <p class="PointTutorials"><b>Candidate Key :-</b>The minimal set of attribute which can uniquely identify a tuple is known as candidate key. 

        For Example, ROLL_NO in STUDENT relation.

        <ul>

         <li class="PointTutorials">The value of Candidate Key is unique and non-null for every tuple.</li><br />

         <li class="PointTutorials">There can be more than one candidate key in a relation. For Example, ROLL_NO as well as PHONE_NO both are candidate keys for relation STUDENT. </li><br />

         <li class="PointTutorials">The candidate key can be simple (having only one attribute) or composite as well. For Example, {ROLL_NO, BOOK_ID} is a composite candidate key for relation STUDENT_COURSE.</li><br />

        </ul>

        </p>

        

        <p class="PointTutorials"><b>Super Key :-</b>The set of attributes which can uniquely identify a tuple is known as Super Key. For Example, ROLL_NO, (ROLL_NO, NAME) etc.

        <ul>

         <li class="PointTutorials">Adding zero or more attributes to candidate key generates super key.</li><br />

         <li class="PointTutorials">A candidate key is a super key but vice versa is not true.</li><br />

        </ul>

        </p>

        

        <p class="PointTutorials"><b>Primary Key :-</b>

        There can be more than one candidate key in a relation out of which one can be chosen as primary key. For Example, ROLL_NO 

        as well as PHONE_NO both are candidate keys for relation STUDENT but ROLL_NO can be chosen as primary key (only one out of many candidate keys).

        BOOK_ID is the primary key in book.

        </p><br />

        

        <p class="PointTutorials"><b>Alternate Key :-</b>

        The candidate key other than primary key is called as alternate key. For Example, ROLL_NO 

        as well as PHONE_NO both are candidate keys for relation STUDENT but PHONE_NO will be alternate key (only one out of many candidate keys).

        </p><br />

        

        <p class="PointTutorials"><b>Foreign Key :-</b>

        If an attribute can only take the values which are present as values of some other attribute, it will be foreign key to the attribute to which it refers. 

        The relation which is being referenced is called referenced relation and corresponding attribute is called referenced attribute and the relation which refers to referenced relation is called referencing relation and corresponding attribute is called referencing attribute. Referenced attribute of referencing attribute should be primary key. 

        For Example, ROLL_NO in STUDENT_BOOK is a foreign key to ROLL_NO in STUDENT relation. 

        </p>

        

        <p class="h2" align="center">Relational Model of Employee-Department</p><br />

        <p align="center"><img class="img-responsive" src="images/Relational2.PNG"   alt=""/></p><br />

</article>

		<!------------------------------------------------------ /Center Column Start ------------------------------------------------------------>

<?php

    require "IndexRelated/indexLower.php";

?> 

<script language="javascript" type="text/javascript">

	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////

				

	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////

    

</script>