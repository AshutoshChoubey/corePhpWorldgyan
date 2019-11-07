<?php
$Author="Ashutosh Kumar Choubey";
$Description="Laravel is The PHP framework for web artisans.Well organized,Simple learning ,Free Laravel Tutorial and easy to understand.This is the chapter of Laravel Requests";
$Keywords="Accessing The Request,
Basic Request Information,
PSR-7 Requests,
Retrieving Input,
Old Input,
Cookies,
Files,Requests";
$Contents='Requests';
 require "IndexRelated/indexUpper.php";
?>
        		
                                       <!-- Start from Here -->
 <article>
		<h1 align="center">Requests</h1>
<ul>
<li lass="PointTutorials"><a href="#accessing-the-request">Accessing The Request</a>
<ul>
<li lass="PointTutorials"><a href="#basic-request-information">Basic Request Information</a></li>
<li lass="PointTutorials"><a href="#psr7-requests">PSR-7 Requests</a></li>
</ul></li>
<li lass="PointTutorials"><a href="#retrieving-input">Retrieving Input</a>
<ul>
<li lass="PointTutorials"><a href="#old-input">Old Input</a></li>
<li lass="PointTutorials"><a href="#cookies">Cookies</a></li>
<li lass="PointTutorials"><a href="#files">Files</a></li>
</ul></li>
</ul>
<p class="paragraph"><a name="accessing-the-request"></a></p>
<h2>Accessing The Request</h2>
<p class="paragraph">To get an example of the present HTTP ask for through reliance infusion, you should type-indicate the <code>Illuminate\Http\Request</code> class on your controller constructor or method. The present demand case will consequently be infused by the 
service container:</p><pre class="PreTag"><code>&lt;?php

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
<p class="paragraph">If your controller method is likewise expecting contribution from a route parameter, essentially list your route arguments after your different dependencies. For instance, if your route is characterized like so:</p> 

<pre class="PreTag"><code>Route::put('user/{id}', '[email&#160;protected]');</code></pre> 

<p class="paragraph">You may at present kind insight the <code>Illuminate\Http\Request</code> and get to your route parameter <code>id</code> by defining your controller method like the following:</p><pre class="PreTag"><code>&lt;?php

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
<p class="paragraph"><a name="basic-request-information"></a></p>
<h3>Basic Request Information</h3>
<p class="paragraph">The <code>Illuminate\Http\Request</code> occasion gives an assortment of methods to inspecting the HTTP ask for your application. The Laravel <code>Illuminate\Http\Request</code> extends the <code>Symfony\Component\HttpFoundation\Request</code> class. Here are a couple of a greater amount of the useful methods accessible on this class:</p> 

<h4>Retrieving The Request URI</h4> 

<p class="paragraph">The <code>path</code> method restores the demand's URI. Along these lines, if the approaching solicitation is focused at <code>http://domain.com/foo/bar</code>, the <code>path</code> method will return <code>foo/bar</code>:</p>
<pre class="PreTag"><code>$uri = $request-&gt;path();</code></pre>
<p class="paragraph">The <code>is</code> method enables you to confirm that the approaching solicitation URI coordinates a given example. You may use the <code>*</code> character as a trump card while using this method:</p>
<pre class="PreTag"><code>if ($request-&gt;is('admin/*')) {
    //
}</code></pre>
<p class="paragraph">To get the full URL, not only the way data, you may use the <code>url</code> method on the demand instance:</p> 

<pre class="PreTag"><code>$url = $request-&gt;url();</code></pre> 

<h4>Retrieving The Request Method</h4> 

<p class="paragraph">The <code>method</code> method will restore the HTTP verb for the demand. You may likewise use the <code>isMethod</code> method to confirm that the HTTP verb coordinates a given string:</p>
<pre class="PreTag"><code>$method = $request-&gt;method();

if ($request-&gt;isMethod('post')) {
    //
}</code></pre>
<p class="paragraph"><a name="psr7-requests"></a></p>
<h3>PSR-7 Requests</h3>
<p class="paragraph">The PSR-7 standard indicates interfaces for HTTP messages, including solicitations and reactions. On the off chance that you might want to acquire an occasion of a PSR-7 ask for, you will first need to introduce a couple of libraries. Laravel uses the Symfony HTTP Message Bridge part to change over normal Laravel solicitations and reactions into PSR-7 good implementations:</p>
<pre class="PreTag"><code>composer require symfony/psr-http-message-bridge

composer require zendframework/zend-diactoros</code></pre>
<p class="paragraph">Once you have introduced these libraries, you may get a PSR-7 ask for by essentially type-indicating the demand write on your route or controller:</p>
<pre class="PreTag"><code>use Psr\Http\Message\ServerRequestInterface;

Route::get('/', function (ServerRequestInterface $request) {
    //
});</code></pre>
<p class="paragraph">If you restore a PSR-7 reaction occasion from a route or controller, it will consequently be changed over back to a Laravel reaction occurrence and be shown by the framework.</p>
<p class="paragraph"><a name="retrieving-input"></a></p>
<h2>Retrieving Input</h2>
<h4>Retrieving An Input Value</h4>
<p class="paragraph">Using a couple of straightforward methods, you may get to all user contribution from your <code>Illuminate\Http\Request</code> occasion. You don't have to stress over the HTTP verb used for the demand, as information is gotten to similarly for all verbs:</p>
<pre class="PreTag"><code>$name = $request-&gt;input('name');</code></pre>
<p class="paragraph">Alternatively, you may get to user enter utilizing the properties of the <code>Illuminate\Http\Request</code> example. For instance, in the event that one of your application's structures contains a <code>name</code> field, you may get to the estimation of the posted field like so:</p>
<pre class="PreTag"><code>$name = $request-&gt;name;</code></pre>
<p class="paragraph">You may pass a default an incentive as the second argument to the <code>input</code> method. This esteem will be returned if the asked for input esteem is absent on the request:</p> 

<pre class="PreTag"><code>$name = $request-&gt;input('name', 'Sally');</code></pre> 

<p class="paragraph">When chipping away at frames with array inputs, you may use &quot;dot&quot; documentation to get to the arrays:</p> 

<pre class="PreTag"><code>$input = $request-&gt;input('products.0.name');</code></pre> 

<h4>Determining If An Input Value Is Present</h4> 

<p class="paragraph">To decide whether an esteem is available on the demand, you may use the <code>has</code> method. The <code>has</code> method returns <code>true</code> if the esteem is available <strong>and</strong> isn't a purge string:</p>
<pre class="PreTag"><code>if ($request-&gt;has('name')) {
    //
}</code></pre>



<h4>Retrieving All Input Data</h4>
<p class="paragraph">You may likewise retrieve the majority of the input information as a <code>array</code> utilizing the <code>all</code> method:</p> 

<pre class="PreTag"><code>$input = $request-&gt;all();</code></pre> 

<h4>Retrieving A Portion Of The Input Data</h4> 

<p class="paragraph">If you need to retrieve a sub-set of the message/information, you can use the <code>only</code> and <code>except</code> methods.these methods will recognize a singular <code>array</code> or a dynamic once-over of arguments:</p>
<pre class="PreTag"><code>$input = $request-&gt;only(['username', 'password']);

$input = $request-&gt;only('username', 'password');

$input = $request-&gt;except(['credit_card']);

$input = $request-&gt;except('credit_card');</code></pre>
<p class="paragraph"><a name="old-input"></a></p>
<h3>Old Input</h3>
<p class="paragraph">Laravel empowers you to keep incorporate from one request in the midst of the accompanying sales. This segment is particularly useful for re-populating shapes in the wake of recognizing approval botches. Regardless, in case you are using Laravel's consolidated validation services, it is unrealistic you ought to physically use these methods, as some of Laravel's worked in approval workplaces will call them automatically.</p> 

<h4>Flashing Input To The Session</h4> 

<p class="paragraph">The <code>flash</code> method on the <code>Illuminate\Http\Request</code> occasion will flash the present commitment to the session with the objective that it is open in the midst of the user's next request to the application:</p> 

<pre class="PreTag"><code>$request-&gt;flash();</code></pre> 

<p class="paragraph">You may in like manner use the <code>flashOnly</code> and <code>flashExcept</code> methods to flash a sub-set of the request information into the session:</p> 

<pre class="PreTag"><code>$request-&gt;flashOnly('username', 'email');
$request-&gt;flashExcept('password');</code></pre>
<h4>Flash Input Into Session Then Redirect</h4>
<p class="paragraph">Since you routinely should flash commitment to association with a redirect to the past page, you may easily chain input flashing onto an occupy using the <code>withInput</code> method:</p>
<pre class="PreTag"><code>return redirect('form')-&gt;withInput();

return redirect('form')-&gt;withInput($request-&gt;except('password'));</code></pre>
<h4>Retrieving Old Data</h4>
<p class="paragraph">To retrieve flashed commitment from the past request, use the <code>old</code> method on the <code>Request</code> case. The <code>old</code> method gives a favorable assistant to pulling the flashed input information out of the session:</p> 

<pre class="PreTag"><code>$username = $request-&gt;old('username');</code></pre> 

<p class="paragraph">Laravel likewise gives a worldwide <code>old</code> partner function. On the off chance that you are indicate old input inside a Blade template, it is all the more easy to use the <code>old</code> helper:</p>
<pre class="PreTag"><code>{{ old('username') }}</code></pre>
<p class="paragraph"><a name="cookies"></a></p>
<h3>Cookies</h3>
<h4>Retrieving Cookies From The Request</h4>
<p class="paragraph">All treats made by the Laravel framework are encoded and set apart with an affirmation code, which implies they will be viewed as invalid if they have been changed by the client. To retrieve a treat a motivating force from the request, you may use the <code>cookie</code> method on the <code>Illuminate\Http\Request</code> instance:</p> 

<pre class="PreTag"><code>$value = $request-&gt;cookie('name');</code></pre> 

<h4>Attaching A New Cookie To A Response</h4> 

<p class="paragraph">Laravel gives an overall <code>cookie</code> helper function which fills in as a clear assembling plant for making new <code>Symfony\Component\HttpFoundation\Cookie</code> occasions. The treats may be joined to a <code>Illuminate\Http\Response</code> case using the <code>withCookie</code> method:</p>
<pre class="PreTag"><code>$response = new Illuminate\Http\Response('Hello World');

$response-&gt;withCookie(cookie('name', 'value', $minutes));

return $response;</code></pre>
<p class="paragraph">To make a seemingly perpetual treat, which lasts for a long time, you may use the <code>forever</code> method on the treat industrial facility by first calling the <code>cookie</code> assistant without any arguments, and after that anchoring the <code>forever</code> method onto the returned treat factory:</p>
<pre class="PreTag"><code>$response-&gt;withCookie(cookie()-&gt;forever('name', 'value'));</code></pre>
<p class="paragraph"><a name="files"></a></p>
<h3>Files</h3>
<h4>Retrieving Uploaded Files</h4> 

<p class="paragraph">You may get to exchanged files that are consolidated with the <code>Illuminate\Http\Request</code> case using the <code>file</code> method. The object returned by the <code>file</code> method is a case of the <code>Symfony\Component\HttpFoundation\File\UploadedFile</code> class, which extends the PHP <code>SplFileInfo</code> class and gives an assortment of methods to interfacing with the file:</p> 

<pre class="PreTag"><code>$file = $request-&gt;file('photo');</code></pre> 

<h4>Verifying File Presence</h4> 

<p class="paragraph">moreover you can decide whether file is accessible on the request utilizing the <code>hasFile</code> method:</p>
<pre class="PreTag"><code>if ($request-&gt;hasFile('photo')) {
    //
}</code></pre>
<h4>Validating Successful Uploads</h4>
<p class="paragraph">checking if the file is available, you may check that there was no issues on transferring the file by means of the <code>isValid</code> method:</p> 

<pre class="PreTag"><code>if ($request-&gt;file('photo')- &gt;isValid()) { 

/ 

}</code></pre> 

<h4>Moving Uploaded Files</h4> 

<p class="paragraph">To move/exchange the transferred file to another location, you have to use the <code>move</code> method. This method will exchange the file from its transitory transfer location (which is controlled by your PHP design) to a perpetual goal of your choosing:</p>
<pre class="PreTag"><code>$request-&gt;file('photo')-&gt;move($destinationPath);

$request-&gt;file('photo')-&gt;move($destinationPath, $fileName);</code></pre>
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