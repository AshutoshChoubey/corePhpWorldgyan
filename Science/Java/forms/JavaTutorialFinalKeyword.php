<?php
$Description="Well organized,Simple learning  and easy to understand Java Tutorial.This is the chapter of Final Keyword in Java";
$Keywords="Final Keyword,Abstract Classes and Methods.Learn with Demo program";


$Title="Final Keyword in java";
$Contents='JavaTutorialFinalKeyword';
 require "IndexRelated/indexUpper.php";
?>
        	
                                       <!-- Start from Here -->
                                       <!--------------------------------------->
                      <h2 align='center'>Final Keyword</h2>
                      <p ><a style="float: left; color:#430383 ;" href="JavaTutorialOverriddenMethods.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialMultipleimplements.php">Next Page-&gt;&gt;</a></p> <br/> 
                       <li style="font-size: 15px; color: #8A470B;"> <b style="font-size: 17px; color: #2F0422;">Final keyword :</b>
                         the final can be used with members ,methods and classes
                        </li><br/>
                        <li style="font-size: 15px; color: #8A470B;"> 
                        When used by the members they become constants we can't update.
                        </li><br/>
                        <li style="font-size: 15px; color: #8A470B;"> 
                        Final methods can't be override
                        </li><br/>
                        <li style="font-size: 15px; color: #8A470B;"> 
                        Final classes can't be extended to any other classes.
                        </li><br/>
    <p><b style="font-size: 20px; color: #2F0422;">Abstract Classes and Methods</b></p>  
     <li style="font-size: 15px; color: #8A470B;">
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
                         <div>.
                        <textarea readonly=""  class="TextAreaForTutorial">
  abstract class AC
{
	abstract void f1();
	abstract void f2();
}
class demo extends AC
{
	void f1()
	{
		System.out.println("Hi");
	}
	void f2()
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
	
		AC r;
		r = new demo();
		r.f1();
		r.f2();
	}
}
</textarea></div><br />
<div>
<textarea readonly="" class="TextAreaForTutorial">
 interface common
{
	 void f1();
	 void f2();
}
class demo implements common
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
	
		common r;
		r = new demo();
		r.f1();
		r.f2();
	}
}





</textarea></div><br />
<p ><a style="float: left; color:#430383 ;" href="JavaTutorialOverriddenMethods.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialMultipleimplements.php">Next Page-&gt;&gt;</a></p> <br/> 
                                       
                                       
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