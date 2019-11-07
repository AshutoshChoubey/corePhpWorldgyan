<?php
$Description="Well organized,Simple learning  and easy to understand Java Tutorial.This is the chapter of Overloading Methods in Java";
$Keywords="Basic Java Syntax,Class, Methods,Instance Variables , Object,First Java Program,Importantant Point To Keep In mind in Java
,File Name in Java,Case Sensitivity in Java,Class Names in java,Method Names in java,public static void main(String args[])";

$Title="Overloading Methods in java";
$Contents='JavaTutorialOverloadingMethods';
 require "IndexRelated/indexUpper.php";
?>
        		
                                       <!-- Start from Here -->
                                       <!--------------------------------------->
                      <h2 align='center'>Overloading Methods</h2>
                      <p ><a style="float: left; color:#430383 ;" href="JavaTutorialStaticMembers.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialInnerClasses.php">Next Page-&gt;&gt;</a></p> <br/> 
                      <p><b style="font-size: 20px; color: #2F0422;">Demo Programe For Understanding</b></p>
                        <div>.
                        <textarea readonly="" class="TextAreaForTutorial">
class Areas
{
	int res;
	void area(int x)
	{
		int res = (x*x);
		System.out.println("Area of Square is : "+res);
	}
	void area(int l, int b)
	{
		int res = (l*b);
	System.out.println("Area of Rectangle is : "+res);
	}
	public static void main(String args[])
	{
		Areas a = new Areas();
		a.area(5);
		a.area(10,20);
	}
}

</textarea></div><br />
<p><b style="font-size: 20px; color: #2F0422;">Objects as Parameters</b></p>
                       <div>.
                        <textarea readonly=""  class="TextAreaForTutorial">
class Time
{
	int h,m;
	Time(int x,int y)
	{
		h = x;
		m = y;
	}
	Time addtime(Time x,Time y)
	{
		Time res = new Time();
		res.h = x.h + y.h;
		res.m = x.m + y.m;
		return res;
	}
	void display()
	{
		System.out.println(h+" : "+m);
	}
	public static void main(String args[])
	{
		Time t1 = new Time(2,20);
		Time t2 = new Time(3,20);
		Time t3 = new Time();
		t3.addtime(t1,t2);
		t3.display();
	}
}

</textarea></div><br />

<p ><a style="float: left; color:#430383 ;" href="JavaTutorialStaticMembers.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialInnerClasses.php">Next Page-&gt;&gt;</a></p> <br/>
                                       
                                       
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