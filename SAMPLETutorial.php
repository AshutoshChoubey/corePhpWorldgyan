<?php
$Contents='NameOfPage';//place Your Name Of Page
    require "IndexRelated/indexUpper.php";
?> 
		
        <!------------------------------------------------------ Center Column Start ------------------------------------------------------------>
<article>        
            <h2 align='center'>Syntax Errors, Runtime Errors, and Logic Errors</h2><!-- for title at the top-->
            
            
            
            <p ><a class="TutorialPreviousPagea" href="JavautorialArraysandForloop.php">&lt;&lt;-Previous  Page</a>
                          <a class="TutorialNextPagea"  href="JavaTutorialStaticMembers.php">Next Page-&gt;&gt;</a></p> <br/><!-- float: left; color:#430383 ; style for previous page-->
        <ul>
            <li class="PointTutorials"><a href="#prepping-the-database">Prepping The Database</a>
                <ul>
                    <li class="PointTutorials"><a href="#stubbing-the-routes">Stubbing The Routes</a></li>
                    <li class="PointTutorials"><a href="#stubbing-the-routes">Eloquent Models</a></li>
                </ul>
            </li>
        </ul>   
            <p class="h3"><!-- forHeading-->
                There are three categories of errors: syntax errors, runtime errors, and logic errors.
            </p>
            
            
            <img class="img-responsive" src=""  alt=""/><br /><!-- for Image\     alt=""  Specifies an alternate text for an image-->
             <img class="img-responsive" src=""   alt=""/>
            
            
            
           <!-- for Text Area it is for code--> 
            <textarea readonly=""  class="TextAreaForTutorial">
    import java.util.*;
    public class HandleExceptionDemo
     {
        public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        boolean continueInput = true;
    
        do {
          try {
            System.out.print("Enter an integer: ");
            int number = scanner.nextInt();
    
            // Display the result
            System.out.println(
              "The number entered is " + number);
            
            continueInput = false;
          } 
          catch (InputMismatchException ex)
           {
            System.out.println("Try again. (" + 
              "Incorrect input: an integer is required)");
            scanner.nextLine(); // discard input 
          }
        } while (continueInput);
      }
      </textarea> 
      
      
      
      
      
     <p><b class="TutorialSubTitle">Features</b></p> <!-- This is Tutorial Sub Title--> 
      
    <li class="PointTutorials"> <!-- This is the class for list u can use another color withought using class in style--> 
        Laravel is an Open Source system. It has an exceptionally rich arrangement of highlights which will help the speed of Web Development. On the off chance that you comfortable with Core PHP and Advanced PHP, Laravel will make your errand less demanding. It will spare a considerable measure time on the off chance that you are wanting to build up a site starting with no outside help. Not just that, the site worked in Laravel is likewise secure. It keeps the different assaults that can occur on sites.
    </li>
      
          
          
          
    
     
    
    
    
    
    <p><a name="stubbing-the-routes"></a></p><!-- This is Name where link is given Sub--> 
    <h3 class="TutorialSubTitle">Stubbing The Routes</h3>
    <p>
            Next, we're prepared to add a couple of routes to our application. Routes are used to point URLs to controllers or mysterious functions that ought to be executed 
        
        at the point when a user gets to a given page. As a matter of course, all Laravel routes are characterized in the <code>app/Http/routes.php</code> document that is incorporated into each new 
        
        project.
     </p>
     <!--      
      what is pre 
      The <pre> tag defines preformatted text.
       Text in a <pre> element is displayed in a fixed-width font (usually Courier), and it preserves both spaces and line breaks.     
      -->     
    <pre class="PreTag"><!-- For Text Color For Code style="color: #212232; or class--> 
        <code ><!-- For Text Color For Code both in pre and code--> 
            &lt;?php
            
            use App\Task;
            use Illuminate\Http\Request;
            
            /**
             * Display All Tasks
             */
            Route::get('/', function () {
                //
            });
            
            /**
             * Add A New Task
             */
            Route::post('/task', function (Request $request) {
                //
            });
            
            /**
             * Delete An Existing Task
             */
            Route::delete('/task/{id}', function ($id) {
                //
            });
        </code>
    </pre> 
</article>
		<!------------------------------------------------------ /Center Column Start ------------------------------------------------------------>
<?php
    require "IndexRelated/indexLower.php";
?> 
<script language="javascript" type="text/javascript">
	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////
				
	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////
    
</script>