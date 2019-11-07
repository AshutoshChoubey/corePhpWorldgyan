<?php
$Description="Well organized,Simple learning  and easy to understand Java Tutorial.This is the chapter of  Java Platform";
$Keywords="Java Platform,Comments in JAVA,Built in Data Types in JAVA,Classes and Objects,Parameter passing method to function";

$Title="Java Platform";

$Contents='JavaTutorialJavaPlatform';
 require "IndexRelated/indexUpper.php";
?>
    
        		
                                       <!-- Start from Here -->
                                       <!--------------------------------------->
                      <h2 align='center'>Java Platform</h2>
                      <p ><a style="float: left; color:#430383 ;" href="JavaTutorialBasicSyntax.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavautorialArraysandForloop.php">Next Page-&gt;&gt;</a></p> <br/> 
                      <img src="/../../images/JavaPlateforms.PNG"  width="90%" height="500px" alt=""/>
                      <p><b style="font-size: 20px; color: #2F0422;">Comments in JAVA:</b></p>
                      
                      </li><br/><li style="font-size: 15px; color: #8A470B"> // Double slashes
</li><br/><li style="font-size: 15px; color: #8A470B;">/* C - Style slashes */
</li><br/><li style="font-size: 15px; color: #8A470B;">/*   ------------------------------<br />
		------------------------------ */<br /></li>
        <p><b style="font-size: 20px; color: #2F0422;">Built in Data Types in JAVA:</b></p>
        <li style="font-size: 15px; color: #8A470B"> 
        Short	short integer	16 bit.
</li><br/>
 <li style="font-size: 15px; color: #8A470B"> 
        Int	integer		32 bit.
</li><br/>
 <li style="font-size: 15px; color: #8A470B"> 
         Float	single precision	32 bit.
</li><br/>
 <li style="font-size: 15px; color: #8A470B"> 
        Long 	long integer	64 bit.
</li><br/>
 <li style="font-size: 15px; color: #8A470B"> 
        Double	double precision 64 bit.
</li><br/>
 <li style="font-size: 15px; color: #8A470B"> 
        Boolean 	true or false	1 bit.
</li><br/>
 <li style="font-size: 15px; color: #8A470B"> 
       String (derived) 	all types of data
</li><br/>
                        <p><b style="font-size: 20px; color: #2F0422;">Classes and Objects:</b></p>
                       <div>
    <textarea readonly=""  class="TextAreaForTutorial">
    public class Employee
{
	String eName;
	String eAdd;
	public Employee()
	{
		eName = "ashutosh";
		eAdd = "ranchi";
	}
	public void display()
	{
		System.out.println("Name is : "+eName);
		System.out.println("Address is : "+eAdd);
	}
	public static void main(String args[])
	{
		Employee e = new Employee();
		e.display();
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
<p ><a style="float: left; color:#430383 ;" href="JavaTutorialBasicSyntax.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavautorialArraysandForloop.php">Next Page-&gt;&gt;</a></p> <br/>
                                       
                                       
                                <!--Work section End -->
                                <!--------------------------------------->
        		
        	
<?php
 require "IndexRelated/indexLower.php";
?>   
<script language="javascript" type="text/javascript">
	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////

    /////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////
</script>
</html>	