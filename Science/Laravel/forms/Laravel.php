<?php
$Author="Ashutosh Kumar Choubey";
$Description="Laravel is The PHP framework for web artisans.Well organized,Simple learning ,Free Laravel Tutorial and easy to understand.This is the chapter of Laravel Basic knowledge from Routing";
$Keywords="Routing,Stubbing The Routes,Displaying A View,Building Layouts,View,Building Layouts & Views
Defining The Layout,Defining The Child View,Child View,Adding Tasks,Validation,Creating The Task
Displaying Existing Tasks,Deleting Tasks,Adding The Delete Button";
$Title="Laravel Basic";
$Contents='Laravel';
 require "IndexRelated/indexUpper.php";
?>
        		
                                       <!-- Start from Here -->
  <article style="font-size: 15px;color: #2C1F15;">
		<h1 align='center'>Laravel Basic </h1>
        
        <p ><a style="float: left; color:#430383 ;" href="PreppingTheDatabase.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="Routing.php">Next Page-&gt;&gt;</a></p> <br/>
        
        <h3> Contents</h3>
<ul>
<li class="PointTutorials"><a href="#routing">Routing</a>
<ul>
<li class="PointTutorials"><a href="#stubbing-the-routes">Stubbing The Routes</a></li>
<li class="PointTutorials"><a href="#displaying-a-view">Displaying A View</a></li>
</ul></li>
<li class="PointTutorials"><a href="#building-layouts-and-views">Building Layouts &amp; Views</a>
<ul>
<li class="PointTutorials"><a href="#defining-the-layout">Defining The Layout</a></li>
<li class="PointTutorials"><a href="#defining-the-child-view">Defining The Child View</a></li>
</ul></li>
<li class="PointTutorials"><a href="#adding-tasks">Adding Tasks</a>
<ul>
<li class="PointTutorials"><a href="#validation">Validation</a></li>
<li class="PointTutorials"><a href="#creating-the-task">Creating The Task</a></li>
<li><a href="#displaying-existing-tasks">Displaying Existing Tasks</a></li>
</ul></li>
<li class="PointTutorials"><a href="#deleting-tasks">Deleting Tasks</a>
<ul>
<li class="PointTutorials"><a href="#adding-the-delete-button">Adding The Delete Button</a></li>
<li class="PointTutorials"><a href="#deleting-the-task">Deleting The Task</a></li>
</ul></li>
</ul>                                     <!--------------------------------------->


<p class="paragraph"><a name="routing"></a></p>
<h2  style="color: #2F0422;" class="h2">Routing</h2>
<p class="paragraph"><a name="stubbing-the-routes"></a></p>
<h3 class="TutorialSubTitle">Stubbing The Routes</h3>
<p class="paragraph">
        Next, we're prepared to add a couple of routes to our application. Routes are used to point URLs to controllers or mysterious functions that ought to be executed 
    
    at the point when a user gets to a given page. As a matter of course, all Laravel routes are characterized in the <code>app/Http/routes.php</code> document that is incorporated into each new 
    
    project.
 </p>
<p class="paragraph">
        For this application, we know we will require no less than three routes: a course to show a rundown of the greater part of our tasks, a course to include new tasks, and a course 
    
    to erase existing tasks. In this way, how about we stub these routes in the <code>app/Http/routes.php</code> file:
</p>
<pre class="PreTag"><code>&lt;?php

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
});</code></pre>
<p class="paragraph"><a name="displaying-a-view"></a></p>
<h3 class="TutorialSubTitle">Displaying A View</h3>
<p class="paragraph">
        Next, how about we round out our <code>/</code> route. From this route, we need to render a HTML template that contains a frame to include new tasks, and also a 
    
    rundown of every single current task.
</p>
<p class="paragraph">
    In Laravel, all HTML templates are stored in the <code>resources/views</code> directory, and we can use the <code>view</code> assistant to return one 

    of these templates from our route:
</p>
<pre class="PreTag"><code>Route::get('/', function () {
    return view('tasks');
});</code></pre>
<p class="paragraph">Obviously, we have to really characterize this view, so how about we do that now!</p>
<p class="paragraph"><a name="building-layouts-and-views"></a></p>
<h2 style="color: #2F0422;" class="h2">Building Layouts &amp; Views</h2>
<p class="paragraph">
    This application just has a solitary view which contains a frame for including new tasks and in addition a posting of every single current task. To enable you to imagine the 
    
    see, here is a screenshot of the completed application with basic Bootstrap CSS styling applied:
 </p>
<p class="paragraph"><img src="/images/Laravel3.PNG" /></p>
<p ><a name="defining-the-layout"></a></p>
<h3 class="TutorialSubTitle">Defining The Layout</h3>
<p class="paragraph">
    
    All web applications share a similar layout crosswise over pages. For instance, this application has a best route bar that would be regularly present 
    
    on each page (on the off chance that we had more than one). Laravel makes it simple to share these basic highlights over each page utilizing Blade <strong>layouts</strong>.
     
 </p>
<p class="paragraph">
        As we talked about before, all Laravel views are stored in <code>resources/views</code>. 
    
    Thus, how about we characterize another layout view in <code>resources/views/layouts/app.blade.php</code>. 
    
    The <code>.blade.php</code> expansion trains the framework to use the Blade templating engine to render the view. 
    
    Obviously, you may use plain PHP templates with Laravel. Be that as it may, Blade gives advantageous alternate routes to composing cleaner, concise templates.
          
 </p>
<p class="paragraph">Our <code>app.blade.php</code> view should look like the following:</p>
<pre class="PreTag"><code>// resources/views/layouts/app.blade.php

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
    &lt;head&gt;
        &lt;title&gt;Laravel Quickstart - Basic&lt;/title&gt;

        &lt;!-- CSS And JavaScript --&gt;
    &lt;/head&gt;

    &lt;body&gt;
        &lt;div class="container"&gt;
            &lt;nav class="navbar navbar-default"&gt;
                &lt;!-- Navbar Contents --&gt;
            &lt;/nav&gt;
        &lt;/div&gt;

        @yield('content')
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
<p class="paragraph">
    Note the <code>@yield('content')</code> part of the layout. This is an uncommon Blade directive that indicates where all child pages that broaden the layout 
    
    can infuse their own particular content. Next, how about we characterize the child view that will use this layout and give its essential content.
</p>
<p class="paragraph"><a name="defining-the-child-view"></a></p>
<h3 class="TutorialSubTitle">Defining The Child View</h3>
<p class="paragraph">
    Incredible, our application layout is done. Next, we have to characterize a view that contains a shape to make another task and also a table that rundowns all 
    
    existing tasks. We should characterize this view in <code>resources/views/tasks.blade.php</code>
    .
</p>



<pre class="PreTag"><code>// resources/views/tasks.blade.php

@extends('layouts.app')

@section('content')

    &lt;!-- Bootstrap Boilerplate... --&gt;

    &lt;div class="panel-body"&gt;
        &lt;!-- Display Validation Errors --&gt;
        @include('common.errors')

        &lt;!-- New Task Form --&gt;
        &lt;form action="/task" method="POST" class="form-horizontal"&gt;
            {{ csrf_field() }}

            &lt;!-- Task Name --&gt;
            &lt;div class="form-group"&gt;
                &lt;label for="task" class="col-sm-3 control-label"&gt;Task&lt;/label&gt;

                &lt;div class="col-sm-6"&gt;
                    &lt;input type="text" name="name" id="task-name" class="form-control"&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;!-- Add Task Button --&gt;
            &lt;div class="form-group"&gt;
                &lt;div class="col-sm-offset-3 col-sm-6"&gt;
                    &lt;button type="submit" class="btn btn-default"&gt;
                        &lt;i class="fa fa-plus"&gt;&lt;/i&gt; Add Task
                    &lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/form&gt;
    &lt;/div&gt;

    &lt;!-- TODO: Current Tasks --&gt;
@endsection</code></pre>
<h4 style="color: #2F0422;">A Few Notes Of Explanation</h4>
<p class="paragraph">
    Before proceeding onward, how about we discuss this template a bit. To start with, the <code>@extends</code> directive educates Blade that we are utilizing the 

layout we characterized at <code>resources/views/layouts/app.blade.php</code>. The majority of the content between <code>@section('content')</code> 

what's more, <code>@endsection</code> will be infused into the location of the <code>@yield('content')</code> directive inside the <code>app.blade.php</code> 

layout.
  </p>
  
<p class="paragraph">
    Presently we have characterized a basic layout and view for our application. 
    
    Keep in mind that, we are restoring this view from our <code>/</code> route like so
     :
 </p>
<pre class="PreTag"><code>Route::get('/', function () {
    return view('tasks');
});</code></pre>
<p class="paragraph">
    Next, we're prepared to add code to our <code>POST/task</code> route to deal with the approaching structure info and add another task to the database.
</p>
<blockquote>
<p class="paragraph"><strong>Note:</strong> The <code>@include('common.errors')</code> directive  load the template located at <code>resources/views/common/errors.blade.php</code>. e haven't characterized this template, however we will soon!</p>
</blockquote>
<p class="paragraph"><a name="adding-tasks"></a></p>
<h2 class="h2" >Adding Tasks</h2>
<p class="paragraph"><a name="validation"></a></p>
<h3 style="color: #2F0422;">Validation</h3>
<p class="paragraph">Now that we have a form in our view, we need to add code to our <code>POST /task</code> route to validate the incoming form input and create a new task. First, let's validate the input.</p>
<p class="paragraph">
    For this form, we will make the <code>name</code> field required and state that it must contain less than <code>255</code> 
    characters. If the validation fails, we will redirect the user back to the <code>/</code> URL, as well as flash the old input and errors into the 
    session:
</p>
<pre class="PreTag"><code>Route::post('/task', function (Request $request) {
    $validator = Validator::make($request-&gt;all(), [
        'name' =&gt; 'required|max:255',
    ]);

    if ($validator-&gt;fails()) {
        return redirect('/')
            -&gt;withInput()
            -&gt;withErrors($validator);
    }

    // Create The Task...
});</code></pre>
<h4>The <code>$errors</code> Variable</h4>
<p class="paragraph">Let's take a break for a moment to talk about the <code>-&gt;withErrors($validator)</code> portion of this example. The <code>-&gt;withErrors($validator)</code> call will flash the errors from the given validator instance into the session so that they can be accessed via the <code>$errors</code> variable in our view.</p>
<p class="paragraph">Remember that we used the <code>@include('common.errors')</code> directive within our view to render the form's validation errors. The <code>common.errors</code> will allow us to easily show validation errors in the same format across all of our pages. Let's define the contents of this view now:</p>
<pre class="PreTag"><code>// resources/views/common/errors.blade.php

@if (count($errors) &gt; 0)
    &lt;!-- Form Error List --&gt;
    &lt;div class="alert alert-danger"&gt;
        &lt;strong&gt;Whoops! Something went wrong!&lt;/strong&gt;

        &lt;br&gt;&lt;br&gt;

        &lt;ul&gt;
            @foreach ($errors-&gt;all() as $error)
                &lt;li&gt;{{ $error }}&lt;/li&gt;
            @endforeach
        &lt;/ul&gt;
    &lt;/div&gt;
@endif</code></pre>
<blockquote>
<p class="paragraph">
<strong>Note:</strong>
 The <code>$errors</code> variable is available in every Laravel view. It  simply be an empty instance of <code>ViewErrorBag</code> if no any validation errors are present.</p>
</blockquote>
<p class="paragraph"><a name="creating-the-task"></a></p>
<h3 class="TutorialSubTitle">Creating The Task</h3>
<p class="paragraph">
    Since input approval is taken care of, how about we really make another task by proceeding to round out our route. 

Once the new task has been made, we will divert the user back to the <code>/</code> URL. 

To make the task, we may use the <code>save</code> strategy in the wake of making and setting properties on another Eloquent model:
</p>
<pre class="PreTag"><code>Route::post('/task', function (Request $request) {
    $validator = Validator::make($request-&gt;all(), [
        'name' =&gt; 'required|max:255',
    ]);

    if ($validator-&gt;fails()) {
        return redirect('/')
            -&gt;withInput()
            -&gt;withErrors($validator);
    }

    $task = new Task;
    $task-&gt;name = $request-&gt;name;
    $task-&gt;save();

    return redirect('/');
});</code></pre>
<p class="paragraph"><a name="displaying-existing-tasks"></a></p>
<h3 class="TutorialSubTitle">Displaying Existing Tasks</h3>
<p class="paragraph">First, we need to edit our <code>/</code> route to pass all of the existing tasks to the view. The <code>view</code> function accepts a second argument which is an array of data that will be made available to the view, where each key in the array will become a variable within the view:</p>
<pre class="PreTag"><code>Route::get('/', function () {
    $tasks = Task::orderBy('created_at', 'asc')-&gt;get();

    return view('tasks', [
        'tasks' =&gt; $tasks
    ]);
});</code></pre>
<p class="paragraph">
Once the data is passed, we can turn through the tasks in our <code>tasks.blade.php</code> 

view and show them in a table. The <code>@foreach</code> Blade develop enables us to compose compact loop that compile 

down into blasting quick plain PHP code:
  </p>
<pre class="PreTag"><code>@extends('layouts.app')

@section('content')
    &lt;!-- Create Task Form... --&gt;

    &lt;!-- Current Tasks --&gt;
    @if (count($tasks) &gt; 0)
        &lt;div class="panel panel-default"&gt;
            &lt;div class="panel-heading"&gt;
                Current Tasks
            &lt;/div&gt;

            &lt;div class="panel-body"&gt;
                &lt;table class="table table-striped task-table"&gt;

                    &lt;!-- Table Headings --&gt;
                    &lt;thead&gt;
                        &lt;th&gt;Task&lt;/th&gt;
                        &lt;th&gt;&amp;nbsp;&lt;/th&gt;
                    &lt;/thead&gt;

                    &lt;!-- Table Body --&gt;
                    &lt;tbody&gt;
                        @foreach ($tasks as $task)
                            &lt;tr&gt;
                                &lt;!-- Task Name --&gt;
                                &lt;td class="table-text"&gt;
                                    &lt;div&gt;{{ $task-&gt;name }}&lt;/div&gt;
                                &lt;/td&gt;

                                &lt;td&gt;
                                    &lt;!-- TODO: Delete Button --&gt;
                                &lt;/td&gt;
                            &lt;/tr&gt;
                        @endforeach
                    &lt;/tbody&gt;
                &lt;/table&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    @endif
@endsection</code></pre>
<p class="paragraph">
    Our  application is almost complete.
</p>
<p class="paragraph"><a name="deleting-tasks"></a></p>
<h2 class="h2">Deleting Tasks</h2>
<p class="paragraph"><a name="adding-the-delete-button"></a></p>
<h3 class="TutorialSubTitle">Adding The Delete Button</h3>
<p class="paragraph">
    We left a &quot;TODO&quot; note in our code where our delete button should be. 

Along these lines, how about we add a delete button to each line of our task posting inside the <code>tasks.blade.php</code> view. 

We'll make a little single-button shape for each task in the rundown. At the point when the button is clicked, a <code>DELETE/task</code> 

demand will be sent to the application:
</p>
<pre class="PreTag"><code>&lt;tr&gt;
    &lt;!-- Task Name --&gt;
    &lt;td class="table-text"&gt;
        &lt;div&gt;{{ $task-&gt;name }}&lt;/div&gt;
    &lt;/td&gt;

    &lt;!-- Delete Button --&gt;
    &lt;td&gt;
        &lt;form action="/task/{{ $task-&gt;id }}" method="POST"&gt;
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            &lt;button&gt;Delete Task&lt;/button&gt;
        &lt;/form&gt;
    &lt;/td&gt;
&lt;/tr&gt;</code></pre>
<p class="paragraph"><a name="a-note-on-method-spoofing"></a></p>
<h4 class="TutorialSubTitle">A Note On Method Spoofing</h4>
<p class="paragraph">
    Note that the delete button's form <code>method</code> is recorded as <code>POST</code>, despite the fact that we are reacting to the demand 
    
    utilizing a <code>Route::delete</code> route. HTML forms just permit the <code>GET</code> and <code>POST</code> HTTP verbs, 
    
    so we require an approach to parody a <code>DELETE</code> ask for from the form.
  </p>
<p class="paragraph">
    We can parody a <code>DELETE</code> ask for by outputting the consequences of the <code>method_field('DELETE')</code> 
    
    work inside our form. This capacity generates a concealed form input that Laravel perceives and will use to 
    
    abrogate the genuine HTTP ask for technique. The generated field will resemble the accompanying:
  </p>
<pre class="PreTag"><code>&lt;input type="hidden" name="_method" value="DELETE"&gt;</code></pre>
<p class="paragraph"><a name="deleting-the-task"></a></p>
<h3 class="TutorialSubTitle">Deleting The Task</h3>
<p class="paragraph">
        At long last, how about we add rationale to our route to really delete the given task. We can use the Eloquent 
    
    <code>findOrFail</code> strategy to retrieve a model by ID or toss a 404 exemption if the model does not exist. When we retrieve 
    
    the model, we will use the <code>delete</code> strategy to delete the record. Once the record is deleted, we will redirect the user back to 
    
    the <code>/</code> URL:
   </p>
<pre class="PreTag"><code>Route::delete('/task/{id}', function ($id) {
    Task::findOrFail($id)-&gt;delete();

    return redirect('/');
});</code></pre>

<p ><a style="float: left; color:#430383 ;" href="PreppingTheDatabase.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="Routing.php">Next Page-&gt;&gt;</a></p> <br/>
	</article>

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