<?php
$Description="Well organized,Simple learning  and easy to understand Java Tutorial.This is the chapter of Access using Super keyword in Java";
$Keywords="Access using Super keyword,Demo Programe For Understanding Super keyword ";


$Title="Access using Super keyword in java";
$Contents='JavaTutorialAccessusingSuperkeyword';
 require "IndexRelated/indexUpper.php";
?>
        	
                                       <!-- Start from Here -->
                                       <!--------------------------------------->
                      <h1 align='center'>Access using Super keyword</h1>
                      <p ><a style="float: left; color:#430383 ;" href="JavaTutorialInheritance.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialConstructorsinInheritance.php">Next Page-&gt;&gt;</a></p> <br/> 
                        <p><b style="font-size: 20px; color: #2F0422;">Demo Program For Understanding</b></p>
                       <div> <textarea readonly="" class="TextAreaForTutorial">
class A
{
	int x;
	void display()
	{
		System.out.println("x value of A : "+x);
	}
}
class B extends A
{
	int x;
	B(int a,int b)
	{
		super.x = a;
		this.x = b;
	}
	void display()
	{
		super.display();
		System.out.println("x value of B : "+x);
	}
}
class test
{
	public static void main(String a[])
	{
		B b = new B(10,20);
		b.display();
	}
}


</textarea></div>

<p ><a style="float: left; color:#430383 ;" href="JavaTutorialInheritance.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialConstructorsinInheritance.php">Next Page-&gt;&gt;</a></p> <br/>
                                       
                                       
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