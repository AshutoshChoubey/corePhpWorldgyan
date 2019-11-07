<?php
$Author="Ashutosh Kumar Choubey";
$Description="Laravel is The PHP framework for web artisans.Well organized,Simple learning ,Free Laravel Tutorial and easy to understand.This is the chapter of Middleware";
$Keywords="Middleware,
Defining Middleware,
Registering Middleware,
Middleware Parameters,
Terminable Middleware,Terminable,php artisan make:middleware OldMiddleware";
$Title="Laravel Middleware";
$Contents='Middleware';
 require "IndexRelated/indexUpper.php";
?>
        		
                                       <!-- Start from Here -->
 <article>
		<h1 align="Center"> Middleware</h1>
        
        <p ><a style="float: left; color:#430383 ;" href="Routing.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="Controllers.php">Next Page-&gt;&gt;</a></p> <br/>
<ul>
<li><a href="#introduction">Introduction</a></li>
<li><a href="#defining-middleware">Defining Middleware</a></li>
<li><a href="#registering-middleware">Registering Middleware</a></li>
<li><a href="#middleware-parameters">Middleware Parameters</a></li>
<li><a href="#terminable-middleware">Terminable Middleware</a></li>
</ul>
<p class="paragraph"><a name="introduction"></a></p>
<h2>Introduction</h2> 

<p class="paragraph">HTTP middleware give an advantageous system to sifting HTTP asks for entering your application. For instance, Laravel incorporates a middleware that checks the user of your application is validated. On the off chance that the user isn't validated, the middleware will divert the user to the login screen. In any case, if the user is validated, the middleware will enable the demand to continue encourage into the application.</p> 

<p class="paragraph">Of course, extra middleware can be composed to play out an assortment of tasks other than verification. A CORS middleware may be in charge of adding the best possible headers to all reactions leaving your application. A logging middleware may log every approaching solicitation to your application.</p> 

<p class="paragraph">There are a few middleware incorporated into the Laravel framework, including middleware for upkeep, confirmation, CSRF assurance, and the sky is the limit from there. These middleware are situated in the <code>app/Http/Middleware</code> directory.</p> 

<p class="paragraph"><a name="defining-middleware"></a></p> 

<h2>Defining Middleware</h2> 

<p class="paragraph">To make another middleware, use the <code>make:middleware</code> Artisan command:</p> 

<pre class="preTag"><code>php artisan make:middleware OldMiddleware</code></pre> 

<p class="paragraph">This command will put another <code>OldMiddleware</code> class inside your <code>app/Http/Middleware</code> directory. In this middleware, we will just enable access to the route if the provided <code>age</code> is more noteworthy than 200. Else, we will divert the users back to the &quot;home&quot; URI.</p><pre class="preTag"><code>&lt;?php

namespace App\Http\Middleware;

use Closure;

class OldMiddleware
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request-&gt;input('age') &lt;= 200) {
            return redirect('home');
        }

        return $next($request);
    }

}</code></pre>
<p class="paragraph">As you can see, if the given <code>age</code> is not exactly or equivalent to <code>200</code>, the middleware will restore a HTTP divert to the customer; generally, the demand will be passed encourage into the application. To pass the demand further into the application (permitting the middleware to &quot;pass&quot;), essentially call the <code>$next</code> callback with the <code>$request</code>.</p> 

<p class="paragraph">It's best to imagine middleware as a progression of &quot;layers&quot; HTTP asks for must pass through before they hit your application. Each layer can look at the demand and even reject it entirely.</p> 

<h3><em>Before</em>/<em>After</em> Middleware</h3> 

<p class="paragraph">Whether a middleware pursues earlier or a demand relies upon the middleware itself. For instance, the accompanying middleware would play out some task <strong>before</strong> the demand is taken care of by the application:</p><pre class="preTag"><code>&lt;?php

namespace App\Http\Middleware;

use Closure;

class BeforeMiddleware
{
    public function handle($request, Closure $next)
    {
        // Perform action

        return $next($request);
    }
}</code></pre>
<p class="paragraph">However, this middleware will perform its task <strong>after</strong> the request is Controlled by the application:</p>
<pre class="preTag"><code>&lt;?php

namespace App\Http\Middleware;

use Closure;

class AfterMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Perform action

        return $response;
    }
}</code></pre>
<p class="paragraph"><a name="registering-middleware"></a></p>
<h2>Registering Middleware</h2> 

<h3>Global Middleware</h3> 

<p class="paragraph">If you require a middleware to be continue running in the midst of every HTTP ask for to your application, basically list the middleware class in the <code>$middleware</code> property of your <code>app/Http/Kernel.php</code> class.</p><h3>Assigning Middleware To Routes</h3> 

<p class="paragraph">If you might want to assign middleware to particular routes, you should first assign the middleware a short-hand key in your <code>app/Http/Kernel.php</code> file. As a matter of course, the <code>$routeMiddleware</code> property of this class contains passages for the middleware included with Laravel. To include your own, essentially append it to this rundown and assign it a key of your picking. For example:</p><pre class="preTag"><code>// Within App\Http\Kernel Class...

protected $routeMiddleware = [
    'auth' =&gt; \App\Http\Middleware\Authenticate::class,
    'auth.basic' =&gt; \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
    'guest' =&gt; \App\Http\Middleware\RedirectIfAuthenticated::class,
];</code></pre>
<p class="paragraph">Once the middleware has been characterized in the HTTP part, you may use the <code>middleware</code> key in the route alternatives array:</p><pre class="preTag"><code>Route::get('admin/profile', ['middleware' =&gt; 'auth', function () {
    //
}]);</code></pre>
<p class="paragraph">Use an array to assign different middleware to the route:</p>
<pre class="preTag"><code>Route::get('/', ['middleware' =&gt; ['first', 'second'], function () {
    //
}]);</code></pre>
<p class="paragraph">Instead of utilizing an array, you may likewise chain the <code>middleware</code> method onto the route definition:</p>
<pre class="preTag"><code>Route::get('/', function () {
    //
})-&gt;middleware(['first', 'second']);</code></pre>
<p class="paragraph"><a name="middleware-parameters"></a></p>
<h2>Middleware Parameters</h2>

<p class="paragraph">Middleware can likewise get extra custom parameters. For instance, if your application needs to confirm that the validated user has a given &quot;role&quot; before playing out a given activity, you could make a <code>RoleMiddleware</code> that gets a part name as an extra argument.</p>
<p class="paragraph">Extra middleware parameters will be passed to the middleware after the <code>$next</code> argument:</p>
<pre class="preTag"><code>&lt;?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (! $request-&gt;user()-&gt;hasRole($role)) {
            // Redirect...
        }

        return $next($request);
    }

}</code></pre>
<p class="paragraph">Middleware parameters might be indicated when defining the route by isolating the middleware name and parameters with a <code>:</code>. Various parameters ought to be delimited by commas:</p><pre class="preTag"><code>Route::put('post/{id}', ['middleware' =&gt; 'role:editor', function ($id) {
    //
}]);</code></pre>
<p class="paragraph"><a name="terminable-middleware"></a></p>
<h2>Terminable Middleware</h2>
<p class="paragraph">Sometimes a middleware may need to do some work after the HTTP reaction has just been sent to the program. For instance, the &quot;session&quot; middleware included with Laravel composes the session information to capacity <em>after</em> the reaction has been sent to the program. To achieve this, characterize the middleware as &quot;terminable&quot; by including a <code>terminate</code> method to the middleware:</p>
<pre class="preTag"><code>&lt;?php

namespace Illuminate\Session\Middleware;

use Closure;

class StartSession
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {
        // Store the session data...
    }
}</code></pre>
<p class="paragraph">The <code>terminate</code> method ought to get both the demand and the reaction. When you have characterized a limited middleware, you should add it to the rundown of worldwide middlewares in your HTTP kernel.</p> 
<p class="paragraph">When calling the <code>terminate</code> method on your middleware, Laravel will resolve a crisp occasion of the middleware from the <a href="/docs/5.1/container">service container</a>. In the event that you might want to use the same middleware occurrence when the <code>handle</code> and <code>terminate</code> methods are called, enlist the middleware with the holder utilizing the compartment's <code>singleton</code> method.</p></article>

<p ><a style="float: left; color:#430383 ;" href="Routing.php">&lt;&lt;-Previous  Page</a>
                      <a style="float: right; color:#430383 ;"  href="Controllers.php">Next Page-&gt;&gt;</a></p> <br/>
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