<?php
$Description="Well organized,Simple learning  and easy to understand Java Tutorial.This is the chapter of Static Members in Java";
$Keywords="Static Members,Demo Program For Understanding Static Members in Java";


$Title="Static Members in java";
$Contents='JavaTutorialStaticMembers';
 require "IndexRelated/indexUpper.php";
?>
        		
                                       <!-- Start from Here -->
                                       <!--------------------------------------->
                      <h2 align='center'>Static Members</h2>
                      <p ><a style="float: left; color:#430383 ;" href="JavautorialConstructors.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialOverloadingMethods.php">Next Page-&gt;&gt;</a></p> <br/> 
                      <p><b style="font-size: 20px; color: #2F0422;">Demo Program For Understanding</b></p>
                       <div>
    <textarea readonly="" class="TextAreaForTutorial">
class Demo
{
    int x,y;
    static int z=77;
    public static void main(String args[])
    {
    	System.out.println("val of z :"+Demo.z);
    	Demo d = new Demo();
    	d.x=10;
    	d.y=20;
    	d.z=99;
        System.out.println("val of x :"+d.x+"\nval of y :"+d.y+"\n val of z :"+d.z);
    	Demo d1 = new Demo();
    	System.out.println("val of z :"+Demo.z);
    
    	System.out.println("val of z :"+d1.z);
    }
}
    </textarea>
</div><br />

<p ><a style="float: left; color:#430383 ;" href="JavautorialConstructors.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="JavaTutorialOverloadingMethods.php">Next Page-&gt;&gt;</a></p> <br/> 
                                       
                                       
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