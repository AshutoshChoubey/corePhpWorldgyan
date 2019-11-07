<?php
$Description="Well organized,Simple learning  and easy to understand Java Tutorial.This is the chapter of  Java Overridden Methods";
$Keywords="Overridden Methods,Dynamic Method Dispatch";

$Title="Overridden Methods in java";
$Contents='JavaTutorialOverriddenMethods';
 require "IndexRelated/indexUpper.php";
?>
        		
                                       <!-- Start from Here -->
                                       <!--------------------------------------->
                      <h2 align='center'>Overridden Methods</h2>
                      <p ><a style="float: left; color:#430383 ;" href="JavaTutorialConstructorsinInheritance.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialFinalKeyword.php">Next Page-&gt;&gt;</a></p> <br/> 
                       <li style="font-size: 15px; color: #8A470B;">
                        When super and sub class method are sharing the same name then those methods are overridden.
                        </li><br/> <div>
                        <textarea readonly=""  class="TextAreaForTutorial">
class A
{
	void f1()
	{
	}
}
class B extends A
{
	void f1()
	{
	}
}
	A a = new A();
	B b = new B();
	a.f1();
	b.f1();
	// both calls class A f1()
	// so we have reference technology using which we can access the individual functions
	A rf;
	rf = a;
	rf.f1();
	rf = b;
	rf.f1();"
</textarea></div><br />
<p><b style="font-size: 20px; color: #2F0422;">Dynamic Method Dispatch</b></p>
<li style="font-size: 15px; color: #8A470B;">
                       System.in.read() : which reads single char from keyboard and returns a ascii code of that<br />
                       Ex : int ch = System.in.read();<br />
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	System.out.println(ch);<br />
                       And also we can apply  type cast  :<br />
char ch = (char) System.in.read();<br />
                        </li><br/>
                        
                         <div>
                        <textarea readonly=""  class="TextAreaForTutorial">
class person
{
	void accept()
	{
	}
	void display()
	{
	}
}
class student extends person
{
	int sno;String sname,scname;
	void accept()
	{
		sno = 10;
		sname = "ashutosh";
		scname = "St,peters";
	}
	void display()
	{
	System.out.println("Student Details : "+sno+" "+sname+" "+scname);
	}
}
class employee extends person
{
	int eno;String cname;
	void accept()
	{
		eno = 101;
		ename = "Alex";
	}
	void display()
	{
		System.out.println("\n Employee No : "+no+"\n Employee Name : "+name);
	}
}
class test
{
	public static void main(String a[])
	{
		char ch;
		person r;
		System.out.println("Enter 1 : Student              2 : Employee\n");
		ch = (char) System.in.read();
		if (ch=='1')
		r = new student();
		else
		r = new employee();
		r.accept();
		r.display();
	}
}
</textarea></div><br />
<p ><a style="float: left; color:#430383 ;" href="JavaTutorialConstructorsinInheritance.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialFinalKeyword.php">Next Page-&gt;&gt;</a></p> <br/>
                                       
                                       
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