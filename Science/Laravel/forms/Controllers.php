<?php
$Author="Ashutosh Kumar Choubey";
$Description="Laravel is The PHP framework for web artisans.Well organized,Simple learning ,Free Laravel Tutorial and easy to understand.This is the chapter of Laravel Controllers";
$Keywords="
Basic Controllers,
Controller Middleware,
RESTful Resource Controllers,
Partial Resource Routes,
Naming Resource Routes,
Nested Resources,
Supplementing Resource Controllers,
Implicit Controllers,
Dependency Injection & Controllers,Controller,RESTful,Nested,Implicit
Route Caching";

$Title='Laravel Controllers';
$Contents='Controllers';
 require "IndexRelated/indexUpper.php";
?>
        		
                                       <!-- Start from Here -->
 <article>
		<h1 class="h1" align="center">Controllers</h1>
        
        <p ><a style="float: left; color:#430383 ;" href="Routing.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="Requests.php">Next Page-&gt;&gt;</a></p> <br/>
<ul>
<li class="PointTutorials"><a href="#introduction">Introduction</a></li>
<li class="PointTutorials"><a href="#basic-controllers">Basic Controllers</a></li>
<li class="PointTutorials"><a href="#controller-middleware">Controller Middleware</a></li>
<li class="PointTutorials"><a href="#restful-resource-controllers">RESTful Resource Controllers</a>
<ul>
<li class="PointTutorials"><a href="#restful-partial-resource-routes">Partial Resource Routes</a></li>
<li class="PointTutorials"><a href="#restful-naming-resource-routes">Naming Resource Routes</a></li>
<li class="PointTutorials"><a href="#restful-nested-resources">Nested Resources</a></li>
<li class="PointTutorials"><a href="#restful-supplementing-resource-controllers">Supplementing Resource Controllers</a></li>
</ul></li>
<li class="PointTutorials"><a href="#implicit-controllers">Implicit Controllers</a></li>
<li class="PointTutorials"><a href="#dependency-injection-and-controllers">Dependency Injection &amp; Controllers</a></li>
<li class="PointTutorials"><a href="#route-caching">Route Caching</a></li>
</ul>
<p class="paragraph"><a name="introduction"></a></p>
<h2>Introduction</h2>
<p class="paragraph">Instead of defining the majority of your demand dealing with rationale in a solitary <code>routes.php</code> file, you may wish to compose this conduct utilizing Controller classes. Controllers can gather related HTTP ask for dealing with rationale into a class. Controllers are commonly stored in the <code>app/Http/Controllers</code> directory.</p>
<p class="paragraph"><a name="basic-controllers"></a></p>
<h2>Basic Controllers</h2>
<p class="paragraph">

Here is controller class which is basic .the base controller class including with the default Laravel installation:</p>

<pre class="preTag"><code>&lt;?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        return view('user.profile', ['user' =&gt; User::findOrFail($id)]);
    }
}</code></pre>
<p class="paragraph">We may route to the controller activity along these lines so:</p> 

<pre class="preTag"><code>Route::get('user/{id}', '[email&#160;protected]);</code></pre> 

<p class="paragraph">

when a demand coordinates the predefined route URI, the <code>showProfile</code> method on the <code>UserController</code> class will be executed.
 Obviously, the route parameters will also be passed to the method.</p> 

<h4>Controllers &amp; Namespaces</h4> 

<p class="paragraph">It is critical to take note of that we didn't have to determine the full controller namespace when defining the controller route. We just characterized the bit of the class name that comes after the <code>App\Http\Controllers</code> namespace &quot;root&quot;. As a matter of course, the <code>RouteServiceProvider</code> will stack the <code>routes.php</code> file inside a route bunch containing the root controller namespace.</p> 

<p class="paragraph">If you settle or compose your controllers utilizing PHP namespaces more profound into the <code>App\Http\Controllers</code> directory, just use the particular class name in respect to the <code>App\Http\Controllers</code> root namespace. In this way, if your full controller class is <code>App\Http\Controllers\Photos\AdminController</code>, you would enlist a route like so:</p>
<pre class="preTag"><code>Route::get('foo', 'Photos\[email&#160;protected]');</code></pre>
<h4>Naming Controller Routes</h4> 

<p class="paragraph">Like Closure routes, you may determine names on controller routes:</p> 

<pre class="preTag"><code>Route::get('foo', ['uses' =&gt;[email&#160;protected]', 'as' =&gt; 'name']);</code></pre> 

<h4>URLs To Controller Actions</h4> 

<p class="paragraph">You may likewise use the <code>route</code> assistant to generate a URL to a named controller route:</p> 

<pre class="preTag"><code>$url = route('name');</code></pre> 

<p class="paragraph">You may likewise use the <code>action</code> assistant method to generate a URL utilizing the controller's class and method names. Once more, we just need to indicate the piece of the controller class name that comes after the base <code>App\Http\Controllers</code> namespace:</p> 

<pre class="preTag"><code>$url = action('[email&#160;protected]');</code></pre> 

<p class="paragraph"> the <code>currentRouteAction</code> method on the <code>Route</code> facade:</p> 

<pre class="preTag"><code>$action = Route::currentRouteAction();</code></pre> 

<p class="paragraph"><a name="controller-middleware"></a></p> 

<h2>Controller Middleware</h2> 

<p class="paragraph"><a href="/docs/5.1/middleware">Middleware</a> might be assigned to the controller's routes like so:</p><pre class="preTag"><code>Route::get('profile', [
    'middleware' =&gt; 'auth',
    'uses' =&gt; '[email&#160;protected]'
]);</code></pre>
<p class="paragraph">It is more useful to show middleware inside your constructor of controller . from your controller's constructor  Utilizing the <code>middleware</code> method, you might easily assign middleware to the controller. You might even fixed the middleware to just certain methods on the controller class:</p>
<pre class="preTag"><code>class UserController extends Controller
{
    /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this-&gt;middleware('auth');

        $this-&gt;middleware('log', ['only' =&gt; ['fooAction', 'barAction']]);

        $this-&gt;middleware('subscribed', ['except' =&gt; ['fooAction', 'barAction']]);
    }
}</code></pre>
<p class="paragraph"><a name="restful-resource-controllers"></a></p>
<h2>RESTful Resource Controllers</h2>
<p class="paragraph">Resource controllers make it effortless to assemble RESTful controllers around resources. For instance, you may wish to make a controller that handles HTTP asks for with respect to &quot;photos&quot; stored by your application. Utilizing the <code>make:controller</code> Artisan command, we can rapidly make such a controller:</p>
<pre class="preTag"><code>php artisan make:controller PhotoController</code></pre>
<p class="paragraph">The Artisan command will generate a controller file at <code>app/Http/Controllers/PhotoController.php</code>.
 The console will contain a method for each of the operations of available resources.</p> 

<p class="paragraph">Next, you may enlist a resourceful route to the controller:</p>
<pre class="preTag"><code>Route::resource('photo', 'PhotoController');</code></pre>
<p class="paragraph">This single route affirmation makes different routes to deal with an assortment of RESTful actions on the photograph resource.

 In this way,the generated controller   have methods stubbed for each of these actions</p>
<h4>Actions Handled By Resource Controller</h4>
<table align="center"  width="80%" cellpadding="5" cellspacing="0" border="0" class="PageTextBox">
<thead>
<tr>
<th>Verb</th>
<th>Path</th>
<th>Action</th>
<th>Route Name</th>
</tr>
</thead>
<tbody>
<tr>
<td>GET</td>
<td><code>/photo</code></td>
<td>index</td>
<td>photo.index</td>
</tr>
<tr>
<td>GET</td>
<td><code>/photo/create</code></td>
<td>create</td>
<td>photo.create</td>
</tr>
<tr>
<td>POST</td>
<td><code>/photo</code></td>
<td>store</td>
<td>photo.store</td>
</tr>
<tr>
<td>GET</td>
<td><code>/photo/{photo}</code></td>
<td>show</td>
<td>photo.show</td>
</tr>
<tr>
<td>GET</td>
<td><code>/photo/{photo}/edit</code></td>
<td>edit</td>
<td>photo.edit</td>
</tr>
<tr>
<td>PUT/PATCH</td>
<td><code>/photo/{photo}</code></td>
<td>update</td>
<td>photo.update</td>
</tr>
<tr>
<td>DELETE</td>
<td><code>/photo/{photo}</code></td>
<td>destroy</td>
<td>photo.destroy</td>
</tr>
</tbody>
</table>
<p class="paragraph"><a name="restful-partial-resource-routes"></a></p>
<h4>Partial Resource Routes</h4>
<p class="paragraph">When announcing a resource route, you may determine a subset of actions to deal with on the route:</p>
<pre class="preTag"><code>Route::resource('photo', 'PhotoController',
                ['only' =&gt; ['index', 'show']]);

Route::resource('photo', 'PhotoController',
                ['except' =&gt; ['create', 'store', 'update', 'destroy']]);</code></pre>
<p class="paragraph"><a name="restful-naming-resource-routes"></a></p>
<h4>Naming Resource Routes</h4>
<p class="paragraph">By default all resource controller  have a route name by passing a <code>names</code> array with your options:</p>
<pre class="preTag"><code>Route::resource('photo', 'PhotoController',
                ['names' =&gt; ['create' =&gt; 'photo.build']]);</code></pre>
<p class="paragraph"><a name="restful-nested-resources"></a></p>
<h4>Nested Resources</h4>
<p class="paragraph">when you may need to characterize routes to a &quot;nested&quot; resource. For that time, a photograph resource may have many &quot;comments&quot; that will be appended to the photograph. </p>
<pre class="preTag"><code>Route::resource('photos.comments', 'PhotoCommentController');</code></pre>
<p class="paragraph">This route will register a &quot;nested&quot; resource that may be accessed with URLs like the following: <code>photos/{photos}/comments/{comments}</code>.</p>
<pre class="preTag"><code>&lt;?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PhotoCommentController extends Controller
{
    /**
     * Show the specified photo comment.
     *
     * @param  int  $photoId
     * @param  int  $commentId
     * @return Response
     */
    public function show($photoId, $commentId)
    {
        //
    }
}</code></pre>
<p class="paragraph"><a name="restful-supplementing-resource-controllers"></a></p>
<h4>Supplementing Resource Controllers</h4>
<p class="paragraph">In the event that it becomes necessary to add additional routes. you should define those routes before you call to <code>Route::resource</code>; otherwise, the routes defined by the <code>resource</code> method may witout attentionally take priority over your supplemental routes:</p>
<pre class="preTag"><code>Route::get('photos/popular', '[email&#160;protected]'); 

Route::resource('photos', 'PhotoController');</code></pre> 

<p class="paragraph"><a name="implicit-controllers"></a></p> 

<h2>Implicit Controllers</h2> 

<p class="paragraph">  using the <code>Route::controller</code> method define the route . The <code>controller</code> method accepts two arguments. The 1st is the base URI and  2nd is the class name of the controller:</p> 

<pre class="preTag"><code>Route::controller('users', 'UserController');</code></pre> 

<p class="paragraph">Next,add methods to your controller. The method names should be begin with the HTTP verb which respond to took after by the title case version of the URI:</p> 

<pre class="preTag"><code>&lt;?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    /**
     * Responds to requests to GET /users
     */
    public function getIndex()
    {
        //
    }

    /**
     * Responds to requests to GET /users/show/1
     */
    public function getShow($id)
    {
        //
    }

    /**
     * Responds to requests to GET /users/admin-profile
     */
    public function getAdminProfile()
    {
        //
    }

    /**
     * Responds to requests to POST /users/profile
     */
    public function postProfile()
    {
        //
    }
}</code></pre>





<p class="paragraph">As you can see in the previous example, the user will respond to the <code> index </code> method for the URI managed by the controller, which is the <code> user </code> in this case.
</p>
<h4>Assigning Route Names</h4>
<p class="paragraph">
If you want to name some of the controller paths, you can pass an array of names as a third argument for the <code> controller </code> method:
</p>
<pre class="preTag"><code>Route::controller('users', 'UserController', [
    'getShow' =&gt; 'user.show',
]);</code></pre>
<p class="paragraph"><a name="dependency-injection-and-controllers"></a></p>
<h2>Dependency Injection &amp; Controllers</h2>
<h4>Constructor Injection</h4>
<p class="paragraph">
The Laravel service containers are used to solve all Laravel controllers. Therefore, you can write any dependency.
    The driver may need it in his constructor. The dependency will be automatically set and injected into the frequency of the controller:
 </p>
<pre class="preTag"><code>&lt;?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    /**
     * The user repository instance.
     */
    protected $users;

    /**
     * Create a new controller instance.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        $this-&gt;users = $users;
    }
}</code></pre>
<p class="paragraph">
Of course, you can also sign any Laravel contract. If the container can solve it, you can write it, hide it
.</p>
<h4>Method Injection</h4>
<p class="paragraph">
In addition to constructor injection, you can also write suggestive suggestions about the actions of your controller.
For example, enter an example of <code> Illuminate \ http \ Request </code> in one of our methods:
</p>
<pre class="preTag"><code>&lt;?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $name = $request-&gt;input('name');

        //
    }
}</code></pre>
<p class="paragraph">

If your control method is also waiting for the input of a route parameter, then after its other dependencies, simply list its root arguments
    For example, if your route is defined as:
 
 </p>
<pre class="preTag"><code>Route::put('user/{id}', '[email&#160;protected]');</code></pre>
<p class="paragraph">
You can continue to write <code> Illuminate \ Http \ Request </code> and access its path parameter <code> id </code>
     Defining your controlling method is as follows:
 </p>
<pre class="preTag"><code>&lt;?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}</code></pre>
<p class="paragraph"><a name="route-caching"></a></p>
<h2>Route Caching</h2>

<p class="paragraph">

If your application only uses a driver-based path, you can take advantage of Arwell's path cache.
     The way the cache is used will greatly reduce the amount of time.
     In some cases, your track record can be 100 times faster! To create root cache, just run the command <code> Route: Cache </code> Artisan:
 </p>
<pre class="preTag"><code>php artisan route:cache</code></pre>
<p class="paragraph">
    It's all there! The cached path file will now be used instead of the <code> app / http / routes.php </code> file
        Remember, if you add a new route, you will need to create a new road cache.
        Because of this, you only want to run Command <code> path: cache </code> during project deployment
 </p>
<p class="paragraph">To remove the cached path file without creating a new cache, use the <code> route: Clear </code> command:</p>
<pre class="preTag"><code>php artisan route:clear</code></pre>
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