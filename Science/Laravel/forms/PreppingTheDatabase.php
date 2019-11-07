<?php
$Author="Ashutosh Kumar Choubey";
$Description="Laravel is The PHP framework for web artisans.Well organized,Simple learning ,Free Laravel Tutorial and easy to understand.This is the chapter of Laravel Database";
$Keywords="Database Migrations,
Eloquent Models,Database Migrations and Eloquent Models
";
$Title="Database Migrations and Eloquent Models";
$Contents='PreppingTheDatabase';
 require "IndexRelated/indexUpper.php";
?>

<h2 style="color: #2F0422;" class="h2" align='center'>Prepping The Database</h2>
<p ><a style="float: left; color:#430383 ;" href="LaravelConfiguration.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="Laravel.php">Next Page-&gt;&gt;</a></p> <br/>
<ul align='center' class="h4" > Contents    <br />                  
    <li class="PointTutorials"><a href="#database-migrations">Database Migrations</a></li>
    <li class="PointTutorials"><a href="#eloquent-models">Eloquent Models</a></li>
</ul> 
<p class="paragraph"><a name="database-migrations"></a> 

<h3 class="TutorialSubTitle">Database Migrations</h3>

<p style="color: #264778;">
<li class="PointTutorials" >
    To begin with, how about we utilize a migration to characterize a database table to hold the greater part of our undertakings.
</li>
<li class="PointTutorials" >
    Laravel's database migrations
     give a simple method to characterize your database table structure and modifications utilizing fluent, expressive PHP code. Rather than advising your
      colleagues to physically add columns to their local copy of the database, your partners can essentially run the migrations you push into source control.
</li>
     
</p>
 
<p class="paragraph">
<li class="PointTutorials" >
    Along these lines, how about we assemble a database table that will hold the greater part of our undertakings. The Artisan CLI can be utilized to produce
     an assortment of classes and will spare you a ton of composing as you construct your Laravel projects. For this situation, how about we utilize 
     the <code>make:migration</code> command to generate a new database migration for our <code>tasks</code> table:
</li>
    
     
</p>
<pre class="PreTag"><code>php artisan make:migration create_tasks_table --create=tasks</code></pre>
<p class="PointTutorials">
    he migration will be set in the <code>database/migrations</code> directory of your project. As you may have noticed, the <code>make:migration</code>
     command already added an auto-incrementing ID and timestamps to the migration file. Let's edit this file and add an additional
      <code>string</code> column for the name of our tasks:
</p>

<pre class="PreTag"><code>&lt;?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table-&gt;increments('id');
            $table-&gt;string('name');
            $table-&gt;timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasks');
    }
}</code></pre>

<p >
    run the migration, we will use the <code>migrate</code> Artisan command. On the off chance that you are utilizing Homestead, you should run this command from inside your virtual 

    machine, since your host machine won't have guide access to the database:
</p>

<pre class="PreTag"><code>php artisan migrate</code></pre>

<p >
         This command will make the greater part of our database tables. On the off chance that you review the database tables utilizing your preferred database customer, you should see a 
    
    new <code>tasks</code> table which contains the columns characterized in our migration. Next, we're prepared to characterize an Eloquent ORM model for 
    
    our tasks!
 </p>


<p class="paragraph"><a name="eloquent-models"></a></p>
<h3 class="TutorialSubTitle">Eloquent Models</h3>
<p class="paragraph">
 <li class="PointTutorials" >Eloquent is Laravel's default ORM (object-relational mapper).</li> 
  
   Eloquent makes it effortless to retrieve and store information in your database utilizing unmistakably 

characterized &quot;models&quot;. Typically, each Eloquent model compares straightforwardly with a solitary database table.
</p>
<p class="paragraph">
    In this way, how about we characterize a <code>Task</code> model that compares to our <code>tasks</code> database table we just made. Once more, we can use an Artisan command 

   to generate this model. For this situation, we'll use the <code>make:model</code> command:
</p>

<pre class="PreTag"><code>php artisan make:model Task</code></pre>
<p class="paragraph">
        The model will be set in the <code>app</code> catalog of your application. As a matter of course, the model class is unfilled. 

We don't need to unequivocally tell the Eloquent model which table it corresponds to because it will expect the database table is the plural frame 

of the model name. Along these lines, for this situation, the <code>Task</code> model is accepted to correspond with the <code>tasks</code> database table. 

Here is the thing that our unfilled model should resemble:
</p>
<pre class="PreTag"><code>&lt;?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
}</code></pre>
<p ><a style="float: left; color:#430383 ;" href="LaravelConfiguration.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="Laravel.php">Next Page-&gt;&gt;</a></p> <br/>
<?php
  require "IndexRelated/indexLower.php";
?>   
<script language="javascript" type="text/javascript">
	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////

    /////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////
</script>
</html>