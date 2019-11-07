<?php
$Description="Well organized,Simple learning  and easy to understand Java Tutorial.This is the chapter of Syntax Errors, Runtime Errors, and Logic Errors in Java";
$Keywords="Syntax Errors,Exceptional Handler Runtime Errors, and Logic Errors,Checked Exceptions,Catch Runtime Errors,Unchecked Exceptions";


$Title="Syntax Errors, Runtime Errors, and Logic Errors in java";
$Contents='SyntaxErrorsRuntimeErrorsandLogicErrors';
require "IndexRelated/indexUpper.php";
?>
        	
                                       <!-- Start from Here -->
                                       <!--------------------------------------->
                      <h2 align='center'>Syntax Errors, Runtime Errors, and Logic Errors</h2>
                      <p ><a style="float: left; color:#430383 ;" href="JavaTutorialMultipleimplements.php">&lt;&lt;-Previous  Page</a><br />
                      <p class="h3">
                         There are three categories of errors: syntax errors, runtime errors, and logic errors.
                       </p>
                       <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide1.PNG"  width="90%" height="500px" alt=""/>
                      
<br/><li style="font-size: 15px; color: #8A470B;"> </b><b style="font-size: 17px; color: #33023D">Syntax errors::</b>
Syntax errors arise because the rules of the language have not been followed. They are detected by the compiler.
</li><br/><li style="font-size: 15px; color: #8A470B"> <b style="font-size: 17px; color: #2F0422;"> Runtime errors:</b>
Runtime errors occur while the program is running if the environment detects an operation that is impossible to carry out.
</li><br/><li style="font-size: 15px; color: #8A470B;"> <b style="font-size: 17px; color: #2F0422;"> Logic errors :</b>
  Logic errors occur when a program doesn't perform the way it was intended to. 
</li><br/>
 <p class="h3"><b style="font-size: 20px; color: #2F0422;">Runtime Errors:</b></p>
<textarea readonly=""  class="TextAreaForTutorial">
import java.util.Scanner;
public class ExceptionDemo 
{
  public static void main(String[] args)
   {
    Scanner scanner = new Scanner(System.in);
    System.out.print("Enter an integer: ");
    int number = scanner.nextInt();
    //If an exception occurs on 7 line then, the rest of the lines in the method are skipped and the program is terminated.

    // Display the result
    System.out.println(
      "The number entered is " + number);
   }
}
  </textarea>
<p class="h3"><b style="font-size: 20px; color: #2F0422;">Catch Runtime Errors:</b></p>
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
  
  <table align="center"  width="80%" cellpadding="5" cellspacing="0" border="0" class="PageTextBox" class="responsive">
  <tr><td>
        int number = scanner.nextInt();<br />

        // Display the result<br />
        System.out.println(<br />
          "The number entered is " + number);<br />
        
        continueInput = false;<br />
      } <br />
      catch (InputMismatchException ex)<br />
      </td></tr>
  </table>
 <p class="h4"> If an exception occurs on this line, the rest of lines in the try block are skipped and the control is transferred to the catch block.
  </p> 
   <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide5.PNG"  width="90%" height="500px" alt=""/> 
   <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide6.PNG"  width="90%" height="500px" alt=""/>
   <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide7.PNG"  width="90%" height="500px" alt=""/>
   <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide8.PNG"  width="90%" height="500px" alt=""/>
   <p class="h3"><b style="font-size: 20px; color: #2F0422;">Unchecked Exceptions:</b></p>
   <li style="font-size: 15px; color: #8A470B;"> </b>
In most cases, unchecked exceptions reflect programming logic errors that are not recoverable
</li>
<li style="font-size: 15px; color: #8A470B;"> </b>
For example, a NullPointerException is thrown if you access an object through a reference variable before an object is assigned to it; an IndexOutOfBoundsException is thrown if you access an element in an array outside the bounds of the array
</li>
<li style="font-size: 15px; color: #8A470B;"> </b>
These are the logic errors that should be corrected in the program. Unchecked exceptions can occur anywhere in the program. To avoid cumbersome overuse of try-catch blocks, Java does not mandate you to write code to catch unchecked exceptions
</li>

<p class="h3"><b style="font-size: 20px; color: #2F0422;">Checked Exceptions:</b></p>
   <li style="font-size: 15px; color: #8A470B;"> </b>
Inherit from class Exception but not from RuntimeException
</li>
<li style="font-size: 15px; color: #8A470B;"> </b>
Compiler enforces catch-or-declare requirement
</li>
<li style="font-size: 15px; color: #8A470B;"> </b>
Compiler checks each method call and method declaration 
</li>

<ul > </b>
<li style="font-size: 15px; color: #8A470B;"> </b>
determines whether method throws checked exceptions
</li>
<li style="font-size: 15px; color: #8A470B;"> </b>
If so, the compiler ensures checked exception caught or declared in throws clause 
</li>
<li style="font-size: 15px; color: #8A470B;"> </b>
If not caught or declared, compiler error occurs.
</li>
</ul>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide12.PNG"  width="90%" height="500px" alt=""/>
 
<li style="font-size: 15px; color: #8A470B;"> </b>
Code that could generate errors put in try blocks 
</li>

<ul> </b>
<li style="font-size: 15px; color: #8A470B;"> </b>
Code for error handling enclosed in a catch clause
</li>
<li style="font-size: 15px; color: #8A470B;"> </b>
The finally clause always executes
</li>
</ul>

<li style="font-size: 15px; color: #8A470B;"> </b>
Termination model of exception handling
</li>
<ul > 
<li style="font-size: 15px; color: #8A470B;"> </b>
The block in which the exception occurs expires
</li>
</ul>


<li style="font-size: 15px; color: #8A470B;"> </b>
throws clause specifies exceptions method throws
</li><br/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide14.PNG"  width="90%" height="500px" alt=""/>
  <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide15.PNG"  width="90%" height="500px" alt=""/>
 <!-- <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide16.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide17.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide18.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide19.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide20.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide21.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide22.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide23.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide24.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide25.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide26.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide27.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide28.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide29.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide30.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide31.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide32.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide33.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide34.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide35.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide36.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide37.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide38.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide39.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide40.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide41.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide42.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide43.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide44.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide45.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide46.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide47.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide48.PNG"  width="90%" height="500px" alt=""/>
 <img src="/../../images/SyntaxErrorsRuntimeErrorandLogicErrors1/Slide49.PNG"  width="90%" height="500px" alt=""/>  -->
<p ><a style="float: left; color:#430383 ;" href="JavaTutorialMultipleimplements.php">&lt;&lt;-Previous  Page</a>
                       
                                       
                                       
                                <!--Work section End -->
                                <!--------------------------------------->
        		
        	
<?php
    require "IndexRelated/indexLower.php";
?> 
<script language="javascript" type="text/javascript">
	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////
				
	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////
    
</script>