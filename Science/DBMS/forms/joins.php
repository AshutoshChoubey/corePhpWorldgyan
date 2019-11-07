<?php

    $Author="Maneesha Mishra";

    $Description="Types of joins";

    $Keyword="inner join,full outer join,left join,right join,learn DBMS coding";

    $Title="Joins in Tables";

    $Contents='joins';

    require "IndexRelated/indexUpper.php";

?> 

		

        <!------------------------------------------------------ Center Column Start ------------------------------------------------------------>

<article>        

            <p ><a class="TutorialPreviousPagea" href="Coding.php">&lt;&lt;-Previous  Page</a><!-- float: left; color:#430383 ; style for previous page-->  

            <!-- for Text Area it is for code--> 

        

        <p class="h2" align="center">Types of Joins</p><br />

        <p class="PointTutorials"><b style="font-size: medium;">INNER JOIN</b>

        <ul>

        	<li>Returns records that have matching values in both tables.</li>

        </ul>

        </p>

        <p align="center"><img class="img-responsive" src="images/fullouter.PNG"   alt=""/></p><br />

        <p><h3>Let us take an example of inner join with complete code</h3></p>

        <pre>

        <code>

        CREATE TABLE EMPLOYEE

    	(EMPNO INTEGER,

    	ENAME VARCHAR,

    	DEPT_ID INTEGER);



        CREATE TABLE DEPARTMENT

        	(DEPT_ID INTEGER,

        	DEPT_NAME VARCHAR);

        

        INSERT INTO EMPLOYEE

                (EMPNO,ENAME,DEPT_ID) 

                VALUES 

                (7866,'JOHN',10);

        

        INSERT INTO EMPLOYEE

                (EMPNO,ENAME,DEPT_ID) 

                VALUES 

                (7867,'SMITH',11);

        

        INSERT INTO DEPARTMENT

        	(DEPT_ID,DEPT_NAME)

        	VALUES

        	(10,'SALES');

        

        INSERT INTO DEPARTMENT

        	(DEPT_ID,DEPT_NAME)

        	VALUES

        	(11,'MARKETING');

         

         SELECT * FROM EMPLOYEE INNER JOIN DEPARTMENT ON EMPLOYEE.DEPT_ID=DEPARTMENT.DEPT_ID;

        </code>

        </pre>

        <p align="center"><img class="img-responsive" src="images/t1.PNG"   alt=""/></p><br /></p>

        <p align="center"><img class="img-responsive" src="images/t2.PNG"   alt=""/></p><br /></p>

        <p align="center"><img class="img-responsive" src="images/joinex.PNG"   alt=""/></p><br /></p>

        <p align="center"><img class="img-responsive" src="images/inner.PNG"   alt=""/></p><br />

        <p class="PointTutorials"><b style="font-size: medium;">LEFT JOIN</b>

        <ul>

        	<li>Return all records from the left table, and the matched records from the right table.</li>

        </ul>

        <p><h3>Let us take an example of left join with complete code</h3></p>

        <pre>

        <code>

        INSERT INTO EMPLOYEE

                (EMPNO,ENAME,DEPT_ID) 

                VALUES 

                (7868,'DRACOLA',10);

        

        INSERT INTO DEPARTMENT

        	(DEPT_ID,DEPT_NAME)

        	VALUES

        	(12,'MANAGING');

         

         SELECT * FROM EMPLOYEE LEFT JOIN DEPARTMENT ON EMPLOYEE.DEPT_ID=DEPARTMENT.DEPT_ID;

        </code>

        </pre>

        <p align="center"><img class="img-responsive" src="images/t4.PNG"   alt=""/></p><br /></p>

        <p align="center"><img class="img-responsive" src="images/t5.PNG"   alt=""/></p><br /></p>

        <p align="center"><img class="img-responsive" src="images/t6.PNG"   alt=""/></p><br /></p>

        </p>

        <p align="center"><img class="img-responsive" src="images/left.PNG"   alt=""/></p><br />

        <p class="PointTutorials"><b style="font-size: medium;">RIGHT JOIN</b>

        <ul>

        	<li>Return all records from the right table, and the matched records from the left table.</li>

        </ul>

        <p><h3>Let us take an example of right join with complete code</h3></p>

        <pre>

        <code>

         SELECT * FROM EMPLOYEE RIGHT JOIN DEPARTMENT ON EMPLOYEE.DEPT_ID=DEPARTMENT.DEPT_ID;

        </code>

        </pre>

        <p align="center"><img class="img-responsive" src="images/t7.PNG"   alt=""/></p><br /></p>

        </p>

        <p align="center"><img class="img-responsive" src="images/right.PNG"   alt=""/></p><br />

        <p class="PointTutorials"><b style="font-size: medium;">FULL OUTER JOIN</b>

        <ul>

        	<li>Return all records when there is a match in either left or right table.</li>

        </ul>

        <p><h3>Let us take an example of full outer join with complete code</h3></p>

        <pre>

        <code>

        INSERT INTO EMPLOYEE

                (EMPNO,ENAME,DEPT_ID) 

                VALUES 

                (7869,'ANUP',14);

                

         SELECT * FROM EMPLOYEE FULL OUTER JOIN DEPARTMENT ON EMPLOYEE.DEPT_ID=DEPARTMENT.DEPT_ID;

        </code>

        </pre>

        <p align="center"><img class="img-responsive" src="images/t8.PNG"   alt=""/></p><br /></p>

        <p align="center"><img class="img-responsive" src="images/t9.PNG"   alt=""/></p><br /></p>

        </p>

        <p align="center"><img class="img-responsive" src="images/fullouter.PNG"   alt=""/></p><br />

</article>

		<!------------------------------------------------------ /Center Column Start ------------------------------------------------------------>

<?php

    require "IndexRelated/indexLower.php";

?> 

<script language="javascript" type="text/javascript">

	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////

				

	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////

    

</script>