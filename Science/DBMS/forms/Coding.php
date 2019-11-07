<?php

    $Author="Maneesha Mishra";

    $Description="SQL Coding Bigening";

    $Keyword="CREATE A TABLE,INSERT A TABLE,update a table data,delete a column from a TABLE,RENAME A TABLE,RENAME A COLUMN,drop a table,learn DBMS coding";

    $Title="Bigening of DBMS Coding";

    $Contents='Coding';

    require "IndexRelated/indexUpper.php";

?> 

		

        <!------------------------------------------------------ Center Column Start ------------------------------------------------------------>

<article>        

            <p ><a class="TutorialPreviousPagea" href="RelationalModel.php">&lt;&lt;-Previous  Page</a>

                <a class="TutorialNextPagea"  href="joins.php">Next Page-&gt;&gt;</a></p> <br/>

                          <!-- float: left; color:#430383 ; style for previous page-->  

            <!-- for Text Area it is for code--> 

        <p class="h2" align="center">DBMS Coding</p><br />

        

        <p align="center"><img class="img-responsive" src="images/sql.PNG"   alt=""/></p><br />

        

        <p class="h2" align="center">HOW TO CREATE,INSERT,UPDATE AND DELETE A TABLE</p><br />

        

        <p align="center"><img class="img-responsive" src="images/Coding1.PNG"   alt=""/></p><br />

        

        <p class="PointTutorials"><b style="font-size: medium;">HOW TO CREATE A TABLE</b>

        <br /><br/>Let us take the above Table as a reference. While creating a table keep in mind there must be a unique key(super key) 

        and the atrribiutes are not allowed by space but uder score(_) is allowed.</p>

        <pre><code>

        CREATE TABLE EMPLOYEE

            (EMPNO INT4 PRIMARY KEY,

            EMAIL_ID VARCHAR UNIQUE,

            ENAME VARCHAR,

            HIRTE_DATE DATE);

        </code></pre>

        <p class="PointTutorials"><b style="font-size: medium;">HOW TO INSERT IN A TABLE</b></p>

        <pre>

        <code>

        INSERT INTO EMPLOYEE

        (EMPNO,EMAIL_ID,ENAME,HIRTE_DATE) 

        VALUES 

        (201702644,'maneeshamishra93@gmail.com','Maneesha Mishra','7/7/2017');

        </code>

        </pre>

        <p class="PointTutorials"><b style="font-size: medium;">HOW TO UPDATE DATA IN A TABLE</b></p>

        <pre>

        <code>

        UPDATE EMPLOYEE 

        SET EMAIL_ID='mimi@gmail.com',

        ENAME='Monali',

        HIRTE_DATE='2/2/2017' 

        WHERE EMPNO=201702644;

        </code>

        </pre>

        <p class="PointTutorials"><b style="font-size: medium;">DELETE A ROW FROM A TABLE</b></p>

        <pre>

        <code>

        DELETE FROM EMPLOYEE 

        WHERE EMPNO=201702644;

        </code>

        </pre>

        <p class="PointTutorials"><b style="font-size: medium;">RETRIVE DATA FROM A TABLE</b></p>

        <pre>

        <code>

        SELECT * FROM EMPLOYEE;

        </code>

        </pre>

        <p class="PointTutorials"><b style="font-size: medium;">HOW TO RENAME A TABLE</b></p>

        <pre>

        <code>

        ALTER TABLE EMPLOYEE RENAME TO DEPARTMENT;

        </code>

        </pre>

        <p class="PointTutorials"><b style="font-size: medium;">HOW TO RENAME A PARTICULAR COLUMN IN A TABLE</b></p>

        <pre>

        <code>

        ALTER TABLE EMPLOYEE RENAME COLUMN ENAME TO DNAME;

        </code>

        </pre>

        <p class="PointTutorials"><b style="font-size: medium;">DROP A TABLE</b></p>

        <pre>

        <code>

        DROP TABLE DNAME;

        </code>

        </pre>

</article>

		<!------------------------------------------------------ /Center Column Start ------------------------------------------------------------>

<?php

    require "IndexRelated/indexLower.php";

?> 

<script language="javascript" type="text/javascript">

	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////

				

	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////

    

</script>