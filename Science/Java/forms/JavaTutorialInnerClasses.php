<?php
$Description="Well organized,Simple learning  and easy to understand Java Tutorial.This is the chapter of Java Inner Classes";
$Keywords="Demo Programe For Understanding Inner Classes,Inner Classes,Inner Classes in java";

$Title="Inner Classes in java";
$Contents='JavaTutorialInnerClasses';
 require "IndexRelated/indexUpper.php";
?>
        	
                                       <!-- Start from Here -->
                                       <!--------------------------------------->
                      <h1 align='center'>Inner Classes</h1>
                      <p ><a style="float: left; color:#430383 ;" href="JavaTutorialOverloadingMethods.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialInheritance.php">Next Page-&gt;&gt;</a></p> <br/> 
                     <li style="font-size: 15px; color: #8A470B;">
it is a class which will be defined in another class
</li><br/><li style="font-size: 15px; color: #8A470B">
If any changes made in the outer class those will be reflected in all its inner classes
</li><br/>
<p><b style="font-size: 20px; color: #2F0422;">Demo Program For Understanding</b></p>
                       <div>  <textarea readonly=""  class="TextAreaForTutorial">
class outer 
{
	int outvar = 10;
// the above value can be used in all inner classes and also in sub classes
	void outfun()
	{
		inner in = new inner1();
		in.infun();
	}

	class inner
	{
		int invar = 100;
		// can be accessed only in this class
		void infun()
		{
			System.out.println("inner class function");
			System.out.println("Accessing outer var : "+outvar);
		}
	}
}
class test
{
	public static void main(String a[])
	{
		outer out = new  outer();
		out.outfun();
	}
}


    </textarea>
</div><br />

<p ><a style="float: left; color:#430383 ;" href="JavaTutorialOverloadingMethods.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialInheritance.php">Next Page-&gt;&gt;</a></p> <br/>
                                       
                                       
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