<?php
$Author="Ashutosh Kumar Choubey";
$Description="Laravel is The PHP framework for web artisans.Well organized,Simple learning ,Free Laravel Tutorial and easy to understand.This is the chapter of Laravel Configuration";
$Keywords="php artisan key:generate,Environmental Configuration,Database Configuration,Start Maintenance Mode,php artisan up,php artisan down ";
$Title="Laravel Configuration";
$Contents='LaravelConfiguration';
 require "IndexRelated/indexUpper.php";
?>
        		
                                       <!-- Start from Here -->
                                       <!--------------------------------------->
                                       <h1 align='center'>Configuration</h1>
                      <p ><a style="float: left; color:#430383 ;" href="LaravelApplicationStrucure.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="PreppingTheDatabase.php">Next Page-&gt;&gt;</a></p> <br/> 
                      <p>
                      
                      config directory contains all  configuration files for your application. this directory contains various files needed to configure database, mail, session, application, services etc.
                      </p>
                      
                      <li  class="PointTutorials">After installing Laravel, first thing you  set the write permission for the directory storage and bootstrap/cache </li><br/>
                      <li  class="PointTutorials">Generate Application key to secure session and other encrypted data</li><br/>
                      <li  class="PointTutorials">If the root directory doesn’t have the .env file then rename the .env.example to .env file and execute the command which is given below where you installed Laravel. New generated key can be seen in the .env file.</li><br/>
                      <table align="center"  width="80%" cellpadding="5" cellspacing="0" border="0" class="PageTextBox">
                        <tr><td>
                        php artisan key:generate
                        </td></tr>
                        </table>
                      <li  class="PointTutorials">In the config/app.php file You can configure the time zone, etc. of your application</li><br/>
                        <p><b class="TutorialSubTitle">Environmental Configuration-: </b>
                      Laravel gives facility to run your application in different environment like production,testing etc. You can set the environment of your application in the .env file of the root directory of your application. If you installed Laravel using composer , this file will be automatically created.otherwise you need to set the environment of your application in the .env file of the root directory<br />
                      If you not install Laravel, you can simply rename the .env.example file to .env file.
                      </p>
                      <p align="center">
                      <img  class="img-responsive" src="../../../images/env.PNG" alt=""/></p>
                      <p><b class="TutorialSubTitle">Database Configuration:-</b></p>
                      <table align="center"  width="80%" cellpadding="5" cellspacing="0" border="0" class="PageTextBox">
                        <tr><td>
                        php artisan app:name &lt;NameOfAplication&gt;
                        </td></tr>
                        </table>
                        <p><b class="TutorialSubTitle">Start Maintenance Mode:-</b>If you want to modify ypur website Type command for Maintenance Mode</p>
                      <table align="center"  width="80%" cellpadding="5" cellspacing="0" border="0" class="PageTextBox">
                        <tr><td>
                        php artisan down
                        </td></tr>
                        </table>                                              
                      <li  class="PointTutorials">if maintenace mode is activated then server will be redirected to a single maintenance page </li><br/>
                      <p><b class="TutorialSubTitle">Start Maintenance Mode:-</b>For Stop Maintenance Mode</p>
                      <table align="center"  width="80%" cellpadding="5" cellspacing="0" border="0" class="PageTextBox">
                        <tr><td>
                        php artisan up
                        </td></tr>
                        </table> 
                            <p ><a style="float: left; color:#430383 ;" href="LaravelApplicationStrucure.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="PreppingTheDatabase.php">Next Page-&gt;&gt;</a></p> <br/>
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