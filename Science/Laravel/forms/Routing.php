<?php
$Author="Ashutosh Kumar Choubey";
$Description="Laravel is The PHP framework for web artisans.Well organized,Simple learning ,Free Laravel Tutorial and easy to understand.This is the chapter of Laravel Routing";
$Keywords="
Basic Routing,
Route Parameters,
Required Parameters,
Optional Parameters,
Regular Expression Constraints,
Named Routes,
Route Groups,
Middleware,
Namespaces,
SubDomain Routing,
Route Prefixes,
CSRF Protection,
Introduction,
Excluding URIs,
X-CSRF-Token,
X-XSRF-Token,
Route Model Binding,
Form Method Spoofing,
Throwing 404 Errors
";

$Title="Laravel Routing";
$Contents='Routing';
 require "IndexRelated/indexUpper.php";
?>
        		
                                       <!-- Start from Here -->
 <article>
        <h1 align='center'>Routing </h1>
        <p ><a style="float: left; color:#430383 ;" href="Laravel.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="Middleware.php">Next Page-&gt;&gt;</a></p> <br/>
                      
        <h3 class="TutorialSubTitle"> Contents</h3>
<li class="PointTutorials"><a href="#basic-routing">Basic Routing</a></li>
<li class="PointTutorials"><a href="#route-parameters">Route Parameters</a>
<ul>
<li class="PointTutorials"><a href="#required-parameters">Required Parameters</a></li>
<li class="PointTutorials"><a href="#parameters-optional-parameters">Optional Parameters</a></li>
<li class="PointTutorials"><a href="#parameters-regular-expression-constraints">Regular Expression Constraints</a></li>
</ul></li>
<li class="PointTutorials"><a href="#named-routes">Named Routes</a></li>
<li class="PointTutorials"><a href="#route-groups">Route Groups</a>
<ul>
<li class="PointTutorials"><a href="#route-group-middleware">Middleware</a></li>
<li class="PointTutorials"><a href="#route-group-namespaces">Namespaces</a></li>
<li class="PointTutorials"><a href="#route-group-sub-domain-routing">Sub-Domain Routing</a></li>
<li class="PointTutorials"><a href="#route-group-prefixes">Route Prefixes</a></li>
</ul></li>
<li class="PointTutorials"><a href="#csrf-protection">CSRF Protection</a>
<ul>
<li class="PointTutorials"><a href="#csrf-introduction">Introduction</a></li>
<li class="PointTutorials"><a href="#csrf-excluding-uris">Excluding URIs</a></li>
<li class="PointTutorials"><a href="#csrf-x-csrf-token">X-CSRF-Token</a></li>
<li class="PointTutorials"><a href="#csrf-x-xsrf-token">X-XSRF-Token</a></li>
</ul></li>
<li class="PointTutorials"><a href="#route-model-binding">Route Model Binding</a></li>
<li class="PointTutorials"><a href="#form-method-spoofing">Form Method Spoofing</a></li>
<li class="PointTutorials"><a href="#throwing-404-errors">Throwing 404 Errors</a></li>
</ul>


<p class="paragraph"><a name="basic-routing"></a></p>                                      <!--------------------------------------->
<h2 style="color: #2F0422;" class="h2">Basic Routing</h2>
<p class="paragraph">
You will characterize the vast majority of the routes for your application in the <code>app/Http/routes.php</code> file, which is stacked by the 

<code>App\Providers\RouteServiceProvider</code> class. The most basic Laravel routes basically acknowledge a URI and a <code>Closure</code> 

:
 </p>
<pre class="PreTag"><code>Route::get('/', function () {
    return 'Hello World';
});

Route::post('foo/bar', function () {
    return 'Hello World';
});

Route::put('foo/bar', function () {
    //
});

Route::delete('foo/bar', function () {
    //
});</code></pre>
<h4 class="TutorialSubTitle">Registering A Route For Multiple Verbs</h4>
<p class="paragraph">
    In some cases you can need to enroll a route that reacts to numerous HTTP verbs. You can do as such utilizing the <code>match</code> technique on the 

<code>Route</code>facade:
 </p>
<pre class="PreTag"><code>Route::match(['get', 'post'], '/', function () {
    return 'Hello World';
});</code></pre>
<p class="paragraph">
    Or on the other hand, you can much enroll a route that reacts to all HTTP verbs utilizing the <code>any</code> method:
</p>
<pre class="PreTag"><code>Route::any('foo', function () {
    return 'Hello World';
});</code></pre>
<h4 class="TutorialSubTitle">Generating URLs To Routes</h4>
<p class="paragraph">
    You can generate URLs to your application's routes utilizing the <code>url</code> helper:</p>
<pre class="PreTag"><code>$url = url('foo');</code></pre>
<p class="paragraph"><a name="route-parameters"></a></p>
<h2 style="color: #2F0422;" class="h2">Route Parameters</h2>
<p class="paragraph"><a name="required-parameters"></a></p>
<h3 class="TutorialSubTitle">Required Parameters</h3>
<p class="paragraph">Obviously, some of the time you ought catch portions of the URI inside your route. For instance, you can need to catch a user's ID from the URL. 

You can do as such by characterizing route parameters:
</p>
<pre class="PreTag"><code>Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});</code></pre>
<p class="paragraph">You can define as many route parameters that is requir by your route:</p>
<pre class="PreTag"><code>Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});</code></pre>
<p class="paragraph">
   Route parameters are constantly encased inside &quot;curly&quot; props. The parameters will  passed into your route's <code>Closure</code> 

at the point when the route is executed.
     </p>
<blockquote>
<p class="paragraph"><strong>Note:</strong> Route parameters cannot contain the <code>-</code> character. Use an underscore (<code>_</code>) instead.</p>
</blockquote>
<p class="paragraph"><a name="parameters-optional-parameters"></a></p>
<h3 class="TutorialSubTitle">Optional Parameters</h3>
<p class="paragraph">
    Every so often you can need to determine a route parameter, yet make the nearness of that route parameter discretionary. 

You can do as such by putting a <code>?</code> stamp after the parameter name:
</p>
<pre class="PreTag"><code>Route::get('user/{name?}', function ($name = null) {
    return $name;
});

Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});</code></pre>
<p class="paragraph"><a name="parameters-regular-expression-constraints"></a></p>
<h3 class="TutorialSubTitle">Regular Expression Constraints</h3>
<p class="paragraph">
    You can constrain the format of your route parameters utilizing the <code>where</code> strategy on a route illustration. 

    The <code>where</code> strategy acknowledges the name of the parameter and a standard articulation defining how the parameter ought to be constrained:
</p>
<pre class="PreTag"><code>Route::get('user/{name}', function ($name) {
    //
})
-&gt;where('name', '[A-Za-z]+');

Route::get('user/{id}', function ($id) {
    //
})
-&gt;where('id', '[0-9]+');

Route::get('user/{id}/{name}', function ($id, $name) {
    //
})
-&gt;where(['id' =&gt; '[0-9]+', 'name' =&gt; '[a-z]+']);</code></pre>
<p class="paragraph"><a name="parameters-global-constraints"></a></p>
<h4 class="TutorialSubTitle">Global Constraints</h4>
<p class="paragraph">
       On the off chance that you might want a route parameter to dependably be constrained by a given general expression, 
    
    you can use the <code>pattern</code> method. You ought to characterize these patterns in the <code>boot</code> 
    
    method of your <code>RouteServiceProvider</code>:
</p>
<pre class="PreTag"><code>/**
 * Define your route model bindings, pattern filters, etc.
 *
 * @param  \Illuminate\Routing\Router  $router
 * @return void
 */
public function boot(Router $router)
{
    $router-&gt;pattern('id', '[0-9]+');

    parent::boot($router);
}</code></pre>
<p class="paragraph">
Once the pattern is define, it is consequently  applie to all routes utilizing that parameter name:
</p>
<pre class="PreTag"><code>Route::get('user/{id}', function ($id) {
    // Only called if {id} is numeric.
});</code></pre>
<p class="paragraph"><a name="named-routes"></a></p>
<h2 style="color: #2F0422;" class="h2">Named Routes</h2>
<p class="paragraph">
    Named routes enable you to helpfully generate URLs or sidetracks for a particular route. You can indicate a name for a route utilizing the 
    
    <code>as</code> array key when defining the route: 
</p>
<pre class="PreTag"><code>Route::get('user/profile', ['as' =&gt; 'profile', function () {
    //
}]);</code></pre>
<p class="paragraph">You can  in the same waywise indicate route names for controller actions: </p>
<pre class="PreTag"><code>Route::get('user/profile', [
    'as' =&gt; 'profile', 'uses' =&gt; '[email&#160;protected]'
]);</code></pre>
<p class="paragraph">
    Rather than indicating the route name in the route array definition, you can chain the <code>name</code> method onto the finish of the route definition:
</p>
<pre class="PreTag"><code>Route::get('user/profile', '[email&#160;protected]')-&gt;name('profile');</code></pre>
<h4 class="TutorialSubTitle">Route Groups &amp; Named Routes</h4>
<p class="paragraph">
      On the off chance that you are utilizing route groups, you can indicate an <code>as</code> keyword in the route aggregate quality array, 
      enabling you to set a typical route name prefix for all routes inside the group:
</p>
<pre class="PreTag"><code>Route::group(['as' =&gt; 'admin::'], function () {
    Route::get('dashboard', ['as' =&gt; 'dashboard', function () {
        // Route named "admin::dashboard"
    }]);
});</code></pre>
<h4 class="TutorialSubTitle">Producing URLs To Named Routes </h4>
<p class="paragraph">
When you have assigned a name to a given route, you can use the route's name while producing URLs or sidetracks through the <code>route</code> function: 

</p>
<pre class="PreTag"><code>$url = route('profile');

$redirect = redirect()-&gt;route('profile');</code></pre>
<p class="paragraph">
    On the off chance that the route characterizes parameters, you can pass the parameters as the second argument to the <code>route</code> method.
     The given parameters will naturally be inserted into the URL: 

</p>
<pre class="PreTag"><code>Route::get('user/{id}/profile', ['as' =&gt; 'profile', function ($id) {
    //
}]);

$url = route('profile', ['id' =&gt; 1]);</code></pre>
<p class="paragraph"><a name="route-groups"></a></p>
<h2 style="color: #2F0422;" class="h2">Route Groups</h2>
<p class="paragraph">
    Route groups enable you to share route attributes, for illustration, middleware or namespaces, 
    over an extensive number of routes without expecting to characterize those attributes on every individual route. 
    Shared attributes are determined in an array format as the primary parameter to the <code>Route::group</code>  method. 
</p>


<p class="paragraph">To take in more about route groups, we'll stroll through a few regular use-cases for the feature.</p>
<p class="paragraph"><a name="route-group-middleware"></a></p>
<h3 class="TutorialSubTitle">Middleware</h3>
<p class="paragraph">
   To assign middleware to all routes inside a gathering, you can use the <code>middleware</code> key in the gathering property array. Middleware will be executed in the request you characterize this array:

</p>


<pre class="PreTag"><code>Route::group(['middleware' =&gt; 'auth'], function () {
    Route::get('/', function ()    {
        // Uses Auth Middleware
    });

    Route::get('user/profile', function () {
        // Uses Auth Middleware
    });
});</code></pre>
<p class="paragraph"><a name="route-group-namespaces"></a></p>
<h3 class="TutorialSubTitle">Namespaces</h3>
<p class="paragraph">
Another common use-case is a group of controllers. You could use the <code> namespace </code>
parameter in your group attribute array to specify the namespace for all controllers within the group:

</p>

<pre class="PreTag"><code>Route::group(['namespace' =&gt; 'Admin'], function()
{
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Route::group(['namespace' =&gt; 'User'], function()
    {
        // Controllers Within The "App\Http\Controllers\Admin\User" Namespace
    });
});</code></pre>
<p class="paragraph">
Kip in mind, by default the <code> RouteServiceProvider </code> includes your <code> routes.php </code>
 file in a namespace group, allow you to register controller routes without specifying the full 
 namespace prefix <code> App \ Http \ Controllers </code>. So, the part of the namespace  need to specify 
  that comes after the root of the <code> App \ Http \ Controllers </code> base namespace.
  </p>
<p class="paragraph"><a name="route-group-sub-domain-routing"></a></p>
<h3 class="TutorialSubTitle">Sub-Domain Routing</h3>
<p class="paragraph">
Root Group Wildcard can further be used for all domain routes. Domain routes can be assigned root routes  in the same way URLs, which will allow you to subscribe to a subdomain of a part. The subdomain group utilizing your path or controller feature can be indicated on the eri on <code> domain </code> keyboard:
 </p>
<pre class="PreTag"><code>Route::group(['domain' =&gt; '{account}.myapp.com'], function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});</code></pre>
<p class="paragraph"><a name="route-group-prefixes"></a></p>
<h3 class="TutorialSubTitle">Route Prefixes</h3>

<p class="paragraph">
The group's row attribute can be used to present before 
each path in the <code> prefix </code> group with an URI. For illustration, you want to present all the URLs in the group with the <code> administrator </code>:
</p>
 
<pre class="PreTag"><code>Route::group(['prefix' =&gt; 'admin'], function () {
    Route::get('users', function ()    {
        // Matches The "/admin/users" URL
    });
});</code></pre>
<p class="paragraph">
You can utilize the <code>prefix</code> parameter to specify common parameters for your grouped routes:
</p>
<pre class="PreTag"><code>Route::group(['prefix' =&gt; 'accounts/{account_id}'], function () {
    Route::get('detail', function ($account_id)    {
        // Matches The accounts/{account_id}/detail URL
    });
});</code></pre>
<p class="paragraph"><a name="csrf-protection"></a></p>
<h2 style="color: #2F0422;" class="h2">CSRF Protection</h2>
<p class="paragraph"><a name="csrf-introduction"></a></p>
<h3 class="TutorialSubTitle">Introduction</h3>
<p class="paragraph">
Laravel makes it easy to protect your application from cross-site request forgeries.
 Cross-site request forgeries are a type of malicious exploit by which unauthorized commands are performed on behalf of the authenticated user.
 </p>
<p class="paragraph">Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one  in fact making the requests to the application. To generate a hidden input field <code>_token</code> containing the CSRF token, you can use the <code>csrf_field</code> helper function:</p>
<pre class="PreTag"><code>&lt;?php echo csrf_field(); ?&gt;</code></pre>
<p class="paragraph">The <code>csrf_field</code> helper function generates the following HTML:</p>
<pre class="PreTag"><code>&lt;input type="hidden" name="_token" value="&lt;?php echo csrf_token(); ?&gt;"&gt;</code></pre>
<p class="paragraph">Of course, utilizing the Blade <a href="/docs/5.1/blade">templating engine</a>:</p>
<pre class="PreTag"><code>{{ csrf_field() }}</code></pre>
<p class="paragraph">You do not need to physically verify the CSRF token on POST, PUT, or DELETE requests. The <code>VerifyCsrfToken</code> HTTP middlewarewill verify that the token in the request input matches the token saved in the session.</p>
<p class="paragraph"><a name="csrf-excluding-uris"></a></p>
<h3 class="TutorialSubTitle">Excluding URIs From CSRF Protection</h3>
<p class="paragraph"><li>Sometimes ,you can try to totally remove from CSRF protection a set of URIs .</li>
 For illustration, you will need to entirely remove your webhook handler route from Laravel's CSRF protection if you are utilizing Stripe to process payments and are utilizing their webhook system .</p>
<p class="paragraph">You can entirely remove URIs by adding them to the <code>$except</code> property of the <code>VerifyCsrfToken</code> middleware:</p>
<pre class="PreTag"><code>&lt;?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that ought be entirely removed from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'stripe/*',
    ];
}</code></pre>
<p class="paragraph"><a name="csrf-x-csrf-token"></a></p>
<h3 class="TutorialSubTitle">X-CSRF-TOKEN</h3>
<p class="paragraph">In addition to checking as a POST parameter for the CSRF token , the Laravel <code>VerifyCsrfToken</code> middleware will	furthermore check for the <code>X-CSRF-TOKEN</code> request header. example- save the token in a &quot;meta&quot; tag:</p>
<pre class="PreTag"><code>&lt;meta name="csrf-token" content="{{ csrf_token() }}"&gt;</code></pre>
<p class="paragraph">Once you have created the <code>meta</code> tag, you can instruct a library  in the same way jQuery to add the token to all request headers. This provides simple, convenient CSRF protection for your AJAX based applications:</p>
<pre class="PreTag"><code>$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});</code></pre>
<p class="paragraph"><a name="csrf-x-xsrf-token"></a></p>
<h3 class="TutorialSubTitle">X-XSRF-TOKEN</h3>
<p class="paragraph">Laravel further saves the CSRF token in a <code>XSRF-TOKEN</code> cookie. You can use the cookie value to set the <code>X-XSRF-TOKEN</code> request header. Some JavaScript frameworks,  in the same way Angular, do this automatically for you. It is un in the same wayly that you will need to use this value physically.</p>
<p class="paragraph"><a name="route-model-binding"></a></p>
<h2 style="color: #2F0422;" class="h2">Route Model Binding</h2>
<p class="paragraph">Laravel route model binding provides a simple way to inject class instances into your routes. For illustration, instead of injecting a user's ID, you can inject the entire <code>User</code> class instance that matches the given ID.</p>
<p class="paragraph">First, use the router's <code>model</code> method  for a given parameter define the class.<br />
 You can  bindings in the <code>RouteServiceProvider::boot</code> method:</p> to define your model 
<h4 class="TutorialSubTitle">Binding A Parameter To A Model</h4>
<pre class="PreTag"><code>public function boot(Router $router)
{
    parent::boot($router);

    $router-&gt;model('user', 'App\User');
}</code></pre>
<p class="paragraph">Next, define a route that includes a <code>{user}</code> parameter:</p>
<pre class="PreTag"><code>$router-&gt;get('profile/{user}', function(App\User $user) {
    //
});</code></pre>
<p class="paragraph">Since we have bound the <code>{user}</code> parameter to the <code>App\User</code> model, a <code>User</code> instance will be injected into the route. So, for illustration, a request to <code>profile/1</code> will inject the <code>User</code> instance which has an ID of 1.</p>
<blockquote>
<p class="paragraph"><strong>Note:</strong> If a matching model instance is not found in the database, a 404 exception will be thrown themself.</p>
</blockquote>
<p class="paragraph">If you hope to specify your own &quot;not found&quot; behavior, pass a Closure as the third argument to the <code>model</code> method:</p>
<pre class="PreTag"><code>$router-&gt;model('user', 'App\User', function() {
    throw new NotFoundHttpException;
});</code></pre>
<p class="paragraph">If you hope to use your own resolution logic, you ought use the <code>Route::bind</code> method.you pass to the <code>bind</code> method will get the value of the URI segment and  give an instance of the class which you want to be inserted into the route:</p>
<pre class="PreTag"><code>$router-&gt;bind('user', function($value) {
    return App\User::where('name', $value)-&gt;first();
});</code></pre>
<p class="paragraph"><a name="form-method-spoofing"></a></p>
<h2 style="color: #2F0422;" class="h2">Form Method Spoofing</h2>
<p class="paragraph">HTML forms do not support <code>PUT</code>, <code>PATCH</code> or <code>DELETE</code> actions. So that when defining <code>PUT</code>, <code>PATCH</code> or <code>DELETE</code> routes which is called from an HTML form, you need to add to the form which is a hidden <code>_method</code> field . The value sent with the <code>_method</code> field will be use as the HTTP request method:</p>
<pre class="PreTag"><code>&lt;form action="/foo/bar" method="POST"&gt;
    &lt;input type="hidden" name="_method" value="PUT"&gt;
    &lt;input type="hidden" name="_token" value="{{ csrf_token() }}"&gt;
&lt;/form&gt;</code></pre>
<p class="paragraph">To generate the hidden input field <code>_method</code>, you can  use the <code>method_field</code> helper function:</p>
<pre class="PreTag"><code>&lt;?php echo method_field('PUT'); ?&gt;</code></pre>
<p class="paragraph">Of course, utilizing the Blade <a href="/docs/5.1/blade">templating engine</a>:</p>
<pre class="PreTag"><code>{{ method_field('PUT') }}</code></pre>
<p class="paragraph"><a name="throwing-404-errors"></a></p>
<h2 style="color: #2F0422;" class="h2">Throwing 404 Errors</h2>
<p class="paragraph">.two ways to physically/Manually trigger/remove a 404 error from a route.<br /> 1. you could use the <code>abort</code> helper. The <code>abort</code> helper will throws a <code>Symfony\Component\HttpFoundation\Exception\HttpException</code> with the specified status code:</p>
<pre class="PreTag"><code>abort(404);</code></pre>
<p class="paragraph">Secondly, you can physically throw an instance of <code>Symfony\Component\HttpKernel\Exception\NotFoundHttpException</code>.</p>
	
 <p ><a style="float: left; color:#430383 ;" href="Laravel.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="Middleware.php">Next Page-&gt;&gt;</a></p> <br/>   
    
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