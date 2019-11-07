<?php
    $Author="Maneesha Mishra";
    $Description="Details about ER Model Diagram";
    $Keyword="Description Of ER Model,E-R Diagram of Movie with Explanation,E-R Diagram of Book";
    $Title="E-R Data Model";
    $Contents='ERModel';
    require "IndexRelated/indexUpper.php";
?> 
		
        <!------------------------------------------------------ Center Column Start ------------------------------------------------------------>
<article>        
            <p><a class="TutorialPreviousPagea" href="DataModel.php">&lt;&lt;-Previous  Page</a>
                          <a class="TutorialNextPagea"  href="RelationalModel.php">Next Page-&gt;&gt;</a></p> <br/><!-- float: left; color:#430383 ; style for previous page-->  
            <!-- for Text Area it is for code--> 
        <p class="h2" align="center">E-R Data Model</p><br />
        
        <ul>
         <li class="PointTutorials">Entity Relationship is High Level Object based data model which represents entities properties and their relationship.</li><br />
         <li class="PointTutorials">In ER diagram different geometrical shapes represent different things.</li><br />
         <li class="PointTutorials"><b>Rectangle :- </b>Represents Entity sets.</li><br />
         <li class="PointTutorials"><b>Ellipses :- </b>Represents Attributes</li><br />
         <li class="PointTutorials"><b>Diamonds :- </b>Represents Relationship Set</li><br />
         <li class="PointTutorials"><b>Lines :- </b> They link attributes to Entity Sets and Entity sets to Relationship Set</li><br />
         <li class="PointTutorials"><b>Double Ellipses :- </b>Represents Multivalued Attributes</li><br />
         <li class="PointTutorials"><b>Dashed Ellipses :- </b>represents Derived Attributes</li><br />
         <li class="PointTutorials"><b>Double Rectangles :- </b>Represents Weak Entity Sets</li><br />
         <li class="PointTutorials"><b>Double Lines :- </b>Represents Total participation of an entity in a relationship set</li><br />
        </ul>
        
        <p align="center"><img class="img-responsive" src="images/Symbols.png"   alt=""/></p><br />
        
        <p class="h3" align="center">E-R Diagram of Movie with Explanation</p>
        <p align="center"><img class="img-responsive" src="images/E-R.png"   alt=""/></p>
         <ul>
         <li class="PointTutorials">A movie has one name.</li><br />
         <li class="PointTutorials">One movie making time is once not a single movie made three timesor more than that.</li><br />
         <li class="PointTutorials">One movie releasing time is only calculated by the day when it is first time releases.</li><br />
         <li class="PointTutorials">One movie may have more than one director in partnership Hence Director is multivalued attribute.</li><br />
         <li class="PointTutorials">A movie have several actors Hence Actors is multivalued attribute.</li><br />
         <li class="PointTutorials">One movie may release in several languages Hence Language is multivalued attribute.</li><br />
         <li class="PointTutorials">A movie only have one production company.</li><br />
         <li class="PointTutorials">One movie have its indivisal type.</li><br />
         </ul>
         <p class="h3" align="center">E-R Diagram of Book</p>
        <p align="center"><img class="img-responsive" src="images/ERBook.png"   alt=""/></p>
</article>
		<!------------------------------------------------------ /Center Column Start ------------------------------------------------------------>
<?php
    require "IndexRelated/indexLower.php";
?> 
<script language="javascript" type="text/javascript">
	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////
				
	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////
    
</script>