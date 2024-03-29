<?php
$Description="Well organized,Simple learning  and easy to understand Java Tutorial.This is the chapter of Constructors in Java";
$Keywords="Constructors,Demo Program For Understanding Constructors,Constructor to a Constructor Example,Overloading Constructors Example";


$Title="Constructors in java";
 $Contents='JavautorialConstructors';
 require "IndexRelated/indexUpper.php";
?>
        	
                                       <!-- Start from Here -->
                                       <!--------------------------------------->
                      <h2 align='center'>Constructors</h2>
                      <p ><a style="float: left; color:#430383 ;" href="JavautorialArraysandForloop.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialStaticMembers.php">Next Page-&gt;&gt;</a></p> <br/> 
                      <p><b style="font-size: 20px; color: #2F0422;">Demo Program For Understanding</b></p>
                        <div>
    <textarea readonly=""  class="TextAreaForTutorial">
    class Employee
{
	int eno;
	String ename;

	Employee(int x, String y)
	{
		eno = x;
		ename = y;
	}
	void dispeno()
	{
		System.out.println("Sno is :"+sno);
	}
	void dispename()
	{
		System.out.println("Name is :"+sname);
	}
	void display()
	{
		this.dispeno();
		this.dispename();
	}
}
class test
{
	public static void main(String args[])
	{
		Employee e = new Employee(12,"saikat");
		e.display();
	}
}


    </textarea>
</div><br />
                        <p><b style="font-size: 20px; color: #2F0422;">Overloading Constructors</b></p>
                        <div>
    <textarea readonly=""  class="TextAreaForTutorial">
    class Employee
{
	int eno;
	String ename;
	
	Employee()
	{
		eno = 11;
		ename = "ashutosh';
	}
	Employee(int x, String y)
	{
		eno = x;
		ename = y;
	}
	void disp()
	{
		System.out.println("sno :"+sno+"\nsname :"+sname);
	}
	public static void main(String args[])
	{
		Employee e = new Employee();
		e.disp();
		Employee e1 = new Employee(12,"Choubey");
		e1.disp();
	}
}



    </textarea>
</div><br />
                        <p><b style="font-size: 20px; color: #2F0422;">Constructor to a Constructor</b></p>
                       <div>
    <textarea readonly="" class="TextAreaForTutorial">
    class Employee
{
	int eno;
	String ename;
	
	Employee()
	{
		this(11,"ashutosh");
	}
	Employee(int x, String y)
	{
		this.eno = x;
		this.ename = y;
	}
	void disp()
	{
		System.out.println("sno :"+sno+"\nsname :"+sname);
	}
	public static void main(String args[])
	{
		Employee e = new Employee();
		e.disp();
		Employee e1 = new Employee(12,"choubey");
		e1.disp();
	}
}
    </textarea>
</div><br />
                         
<p ><a style="float: left; color:#430383 ;" href="JavautorialArraysandForloop.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialStaticMembers.php">Next Page-&gt;&gt;</a></p> <br/>
                                       
                                       
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