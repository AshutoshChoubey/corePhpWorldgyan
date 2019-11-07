<?php

$Description="Well organized,Simple learning  and easy to understand Java Tutorial.This is the chapter of Arrays and For loop in Java";

$Keywords="Arrays and For loop in Java,Parameter passing method to function with Example,Example Using if statement";





$Title="Arrays and For loop in java";

$Contents='JavautorialArraysandForloop';

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

	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////

			

	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////

?>

<?php

    require "IndexRelated/indexUpper.php";

?>

                        <!-- Start from Here -->

                                       <!--------------------------------------->

                      <h1 align='center'>Arrays and For loop</h1>

                      <p ><a style="float: left; color:#430383 ;" href="JavaTutorialJavaPlatform.php">&lt;&lt;-Previous  Page</a>

                      <a style="float: right; color:#430383 ;"  href="JavautorialConstructors.php">Next Page-&gt;&gt;</a></p> <br/>

                      

</li><br/><li style="font-size: 15px; color: #8A470B;">An Array is the similer type of data item store in Contigeous memory location 

</li><br/> 

</li><br/><li style="font-size: 15px; color: #8A470B;">For loop is the sequence of instruction that will continually repeated until certain condition become false.Example is given in the Demo program for understanding

</li><br/>


<div>

    <textarea readonly=""  class="TextAreaForTutorial">

class oneDarr

{

    	public static void main(String args[])

    	{

    		int a[] = {10,20,30},i;

    		// int a[];

    		// a = new int[3];

    		// a[0] = 10;

    		// a[1] = 20;

    		// a[2] = 30;

    		for(i = 0;i < a.length;i++)

    		{

    		System.out.println("value is : "+a[i]);

    		}

    	}

}

class twoDarr

{

    public static void main(String args[])

	{

		int a[] [] = {{10},{10,11},{10,11,12}},I,k=10;

		// int a[] [];

		// a = new int[3] [];

		// a[0] = new int[1];

		// a[1] = new int[2];

		// a[2] = new int[3];

		/* for(i = 0;i < a.length;i++)

		{

		for(j = 0;j < a[i].length;j++)

		{

		a[i][j] = k;

		k++;

		} */

		}

		for(i = 0;i < a.length;i++)

		{

		for(j = 0;j < a[i].length;j++)

		{

		System.out.println("value is : "+a[i][j]);

		}

		System.out.println();

		}

	}

}



    </textarea>

</div><br />

                        <p><b style="font-size: 20px; color: #2F0422;">Parameter passing method to function:</b></p>

<div>    

    <textarea readonly="" class="TextAreaForTutorial">

    public class Employee

    {

    	float annsal = 40000f;

    	public void incSal(int bonus)

    	{

    		annsal = annsal+bonus;

    	}

    	public static void main(String args[])

    	{

    		Employee e = new Employee();

    		e.incSal(1000);

    		System.out.println(e.annsal);

    	}

    }

    </textarea>

</div><br />

                           <p><b style="font-size: 20px; color: #2F0422;">Using if statement:</b></p>

<div>    

    <textarea readonly=""  class="TextAreaForTutorial">

        Public class Employee

        {

        	int age;

        	public boolean checkage()

        	{

        		if (age > 60)

        			return false;

        		else

        			return true;

        	}

        	public static void main(String args[])

        	{

        		Employee e = new Employee();

        		e.age = 78;

        		if (e.checkage()== false)

        		{

        			System.out.println("Employee retired");

        		}

        	}

        }



    </textarea>

</div><br />

                        

<p ><a style="float: left; color:#430383 ;" href="JavaTutorialJavaPlatform.php">&lt;&lt;-Previous  Page</a>

    <a style="float: right; color:#430383 ;"  href="JavautorialConstructors.php">Next Page-&gt;&gt;</a>

</p> <br/>

                                       

                                       

                                <!--Work section End -->

                                <!--------------------------------------->

<?php

    require "IndexRelated/indexLower.php";

?> 

<script language="javascript" type="text/javascript">

	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////

				

	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////

    

</script>