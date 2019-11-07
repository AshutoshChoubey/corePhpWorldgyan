<?php
$Description="Well organized,Simple learning  and easy to understand Java Tutorial.This is the chapter of Constructors in Inheritance";
$Keywords="Constructors in Inheritance,Program for example";


$Title="Constructors in Inheritance";
$Contents='JavaTutorialConstructorsinInheritance';
 require "IndexRelated/indexUpper.php";
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

                                       <!-- Start from Here -->
                                       <!--------------------------------------->
                      <h1 align='center'>Constructors in Inheritance</h1>
                      <p ><a style="float: left; color:#430383 ;" href="JavaTutorialAccessusingSuperkeyword.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialOverriddenMethods.php">Next Page-&gt;&gt;</a></p> <br/> 
                        <li style="font-size: 15px; color: #8A470B;">
                        Super class constructors invoked first than sub class.
                        </li><br/>
                        <li style="font-size: 15px; color: #8A470B;">
                        If there are no of super classes and then constructors will be executed in the order of the inheritance (from bottom to top).
                        </li><br/>
                        <li style="font-size: 15px; color: #8A470B;">
                        We can call super class constructors from sub class constructors using super keyword.
                        </li><br/>
                        <li style="font-size: 15px; color: #8A470B;">
                        But we must call super constructor first in their order..
                        </li><br/>
                        <div>.
                        <textarea readonly="" class="TextAreaForTutorial">
class A
{
	int x,y;
	A(int x,int y)
	{
		this.x = x;
		this.y = y;
	}
}
class B extends A
{
	int z;
	B(int a,int b,int c)
	{
		super(a,b);
		this.z=c;
	}
	void display()
	{
		System.out.println("values are : "+x+y+z);
	}
	
}
class test
{
	public static void main(String a[])
	{
		B b = new B(10,20,30);
		b.display();
	}
}


</textarea></div><br />
<p ><a style="float: left; color:#430383 ;" href="JavaTutorialAccessusingSuperkeyword.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialOverriddenMethods.php">Next Page-&gt;&gt;</a></p> <br/>
                                       
                                       
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