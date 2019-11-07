<?php
$Description="Well organized,Simple learning  and easy to understand Java Tutorial.This is the chapter of Multiple implements in Java";
$Keywords="Multiple implements,Abstract Classes and Methods,Final keyword,Extended Interfaces";

$Title="Multiple implements in java";
$Contents='JavaTutorialMultipleimplements';
 require "IndexRelated/indexUpper.php";
?>
        		
                                       <!-- Start from Here -->
                                       <!--------------------------------------->
                      <h2 align='center'>Multiple implements</h2>
                      <p ><a style="float: left; color:#430383 ;" href="JavaTutorialFinalKeyword.php">&lt;&lt;-Previous  Page</a>
                      <a class="TutorialNextPagea"; href="SyntaxErrorsRuntimeErrorsandLogicErrors.php">Next Page-&gt;&gt;</a></p> <br/> 
                      </p> <br/> 
    <p><b style="font-size: 20px; color: #2F0422;">Abstract Classes and Methods</b></p>  
     <li style="font-size: 15px; color: #8A470B;"> <b style="font-size: 17px; color: #2F0422;">Final keyword :</b>
                         When a function of a super class is used only for overriding purpose but it does't contains any statements then those can be prefixed by the keyword called abstract
                        </li><br/>
                        <li style="font-size: 15px; color: #8A470B;"> 
                        When a class contains at least one abstract fun then that class must be made as abstract.
                        </li><br/>
                        <li style="font-size: 15px; color: #8A470B;"> 
                        When a class is extending any abstract class then it must override all the abstract methods of that class.
                        </li><br/>
                        <li style="font-size: 15px; color: #8A470B;"> 
                        We can't create objects to abstract class but we can create reference var

                        </li><br/>                  
                         <div>
                         <textarea readonly="" class="TextAreaForTutorial">
                         
  interface A
{
	abstract void f1();
}
interface B
{
	abstract void f2();
}

class demo implements A,B
{
	public void f1()
	{
		System.out.println("Hi");
	}
	public void f2()
	{
		System.out.println("Hello");
	}
}
class test
{
	public static void main(String a[])
	{
		demo d = new demo();
		d.f1();
		d.f2();
	
		A a;
		a = new demo();
		a.f1();
		B b;
		b = new demo();
		b.f2();
	}
}
</textarea></div><br />
<p><b style="font-size: 20px; color: #2F0422;">Extended Interfaces</b></p> 
<div>
<textarea readonly=""  class="TextAreaForTutorial">
 interface A
{
	abstract void f1();
}
interface B extends A
{
	abstract void f2();
}

class demo implements B
{
	public void f1()
	{
		System.out.println("Hi");
	}
	public void f2()
	{
		System.out.println("Hello");
	}
}
class test
{
	public static void main(String a[])
	{
		demo d = new demo();
		d.f1();
		d.f2();
	
		A a;
		a = new demo();
		a.f1();
		B b;
		b = new demo();
		b.f2();
	}
}
</textarea></div><br />
<p ><a style="float: left; color:#430383 ;" href="JavaTutorialFinalKeyword.php">&lt;&lt;-Previous  Page</a>
<a class="TutorialNextPagea" href="SyntaxErrorsRuntimeErrorsandLogicErrors.php">Next Page-&gt;&gt;</a></p> <br/> 
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
</html>