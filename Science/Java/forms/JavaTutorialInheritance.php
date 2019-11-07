<?php
$Description="Well organized,Simple learning  and easy to understand Java Tutorial.This is the chapter of  Inheritance";
$Keywords="Inheritance,Demo Program For Understanding Inheritance";

$Title="Inheritance in java";
$Contents='JavaTutorialInheritance';
 require "IndexRelated/indexUpper.php";
?>
                                       <!-- Start from Here -->
                                       <!--------------------------------------->
                      <h2 align='center'>Inheritance</h2>
                      <p ><a style="float: left; color:#430383 ;" href="JavaTutorialInnerClasses.php">&lt;&lt;Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialAccessusingSuperkeyword.php">Next Page-&gt;&gt;</a></p> <br/> 
                     <li style="font-size: 15px; color: #8A470B;">
Creation of classes from existed classes in order to reduce coding
</li><br/><li style="font-size: 15px; color: #8A470B">
Class which is ihherited is super and which inherting that is sub class
</li><br/><li style="font-size: 15px; color: #8A470B">
We are using extends key word to do this process
</li><br/><li style="font-size: 15px; color: #8A470B">
We may have multilevel but not multiple inheritance
</li><br/>
<p><b style="font-size: 20px; color: #2F0422;">Demo Program For Understanding</b></p>
                        <div>    
    <textarea readonly="" class="TextAreaForTutorial">
class person
{
	int no;
	String name;
}
class student extends person
{
	String scname;
	void accept()
	{
		no = 10;
		name = "vinay";
		scname = "St,peters school";
	}
	void display()
	{
		System.out.println("\n Student No : "+no+"\n Student Name : "+name+"\n School Name : "+scname);
	}
}
class employee extends person
{
	String cname;
	void accept()
	{
		no = 101;
		name = "Alex";
		cname = "world pvt";
	}
	void display()
	{
		System.out.println("\n Employee No : "+no+"\n Employee Name : "+name+"\n Company Name : "+cname);
	}
}
class test
{
	public static void main(String a[])
	{
		student  s = new student();
		employee e = new employee();
		s.accept()
		s.display();
		e.accept();
		e.display();
	}
}

    </textarea>
</div><br />

<p ><a style="float: left; color:#430383 ;" href="JavaTutorialInnerClasses.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialAccessusingSuperkeyword.php">Next Page-&gt;&gt;</a></p> <br/>
                                       
                                       
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