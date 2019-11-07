<?php


$Author="Ashutosh Kumar Choubey";


$Description="Laravel is The PHP framework for web artisans.Well organized,Simple learning ,Free Laravel Tutorial and easy to understand.This is the chapter of Blade Templates";


$Keywords="


Template Inheritance,


Defining A Layout,


Extending A Layout,


Displaying Data,


Control Structures,


Service Injection,


Extending Blade,Layout,Injection";


$Contents='BladeTemplates';


 require "IndexRelated/indexUpper.php";


?>


        		


                                       <!-- Start from Here -->


<article>


		<h1>Blade Templates</h1>


<ul>


<li class="PointTutorials"><a href="#introduction">Introduction</a></li>


<li class="PointTutorials"><a href="#template-inheritance">Template Inheritance</a>


<ul>


<li class="PointTutorials"><a href="#defining-a-layout">Defining A Layout</a></li>


<li class="PointTutorials"><a href="#extending-a-layout">Extending A Layout</a></li>


</ul></li>


<li class="PointTutorials"><a href="#displaying-data">Displaying Data</a></li>


<li class="PointTutorials"><a href="#control-structures">Control Structures</a></li>


<li class="PointTutorials"><a href="#service-injection">Service Injection</a></li>


<li class="PointTutorials"><a href="#extending-blade">Extending Blade</a></li>


</ul>


<p><a name="introduction"></a></p>


<h2>Introduction</h2> 





<p>Blade is the straightforward, yet capable templating engine gave Laravel. Not at all like other prevalent PHP templating engines, Blade does not confine you from utilizing plain PHP code in your views. All Blade views are assembled into plain PHP code and reserved until the point when they are altered, which means Blade adds basically zero overhead to your application. Blade view files use the <code>.blade.php</code> file augmentation and are normally stored in the <code>resources/views</code> directory.</p> 





<p><a name="template-inheritance"></a></p> 





<h2>Template Inheritance</h2> 





<p><a name="defining-a-layout"></a></p> 





<h3>Defining A Layout</h3> 





<p>Two of the essential advantages of utilizing Blade are <em>template inheritance</em> and <em>sections</em>. To begin, how about we investigate a straightforward case. To start with, we will look at a &quot;master&quot; page layout. Since most web applications keep up a similar general layout crosswise over different pages, it's advantageous to characterize this layout as a solitary Blade view:</p> 





<pre class="PreTag"><code>&lt;!- - Stored in resources/views/layouts/master.blade.php - &gt; 
&lt;html&gt; 
&lt;head&gt; 
&lt;title&gt;App Name - @yield('title')&lt;/title&gt; 
&lt;/head&gt; 
&lt;body&gt; 
@section('sidebar') 
This is the master sidebar. 
@show 
&lt;div class="container"&gt; 
@yield('content') 
&lt;/div&gt; 
&lt;/body&gt; 
&lt;/html&gt;</code></pre> 





<p>As you can see, this file contains commonplace HTML increase. Notwithstanding, observe the <code>@section</code> and <code>@yield</code> directives. The <code>@section</code> directive, as the name infers, characterizes a segment of content, while the <code>@yield</code> directive is used to show the contents of a given section.</p> 





<p>Now that we have characterized a layout for our application, how about we characterize a child page that acquires the layout.</p> 





<p><a name="extending-a-layout"></a></p> 





<h3>Extending A Layout</h3> 





<p>When defining a child page, you may use the Blade <code>@extends</code> directive to determine which layout the child page ought to &quot;inherit&quot;. Views which <code>@extends</code> a Blade layout may infuse content into the layout's segments utilizing <code>@section</code> directives. Keep in mind, as found in the case over, the contents of these areas will be shown in the layout utilizing <code>@yield</code>:</p> 





<pre class="PreTag"><code>&lt;!- - Stored in resources/views/child.blade.php - &gt; 
@extends('layouts.master') 
@section('title', 'Page Title') 
@section('sidebar') 
@parent 
&lt;p&gt;This is appended to the master sidebar.&lt;/p&gt; 
@endsection 
@section('content') 
&lt;p&gt;This is my body content.&lt;/p&gt; 
@endsection</code></pre> 





<p>In this illustration, the <code>sidebar</code> area is using the <code>@parent</code> directive to append (as opposed to overwriting) content to the layout's sidebar. The <code>@parent</code> directive will be supplanted by the content of the layout when the view is rendered.</p> 





<p>Of course, much the same as plain PHP views, Blade views might be come back from routes utilizing the worldwide <code>view</code> partner function:</p> 





<pre class="PreTag"><code>Route::get('blade', function () { 
return view('child'); 
});</code></pre> 





<p><a name="displaying-data"></a></p> 





<h2>Displaying Data</h2> 





<p>You may show information passed to your Blade views by wrapping the variable in &quot;curly&quot; supports. For instance, given the accompanying route:</p> 





<pre class="PreTag"><code>Route::get('greeting', function () { 
return view('welcome', ['name' =&gt; 'Samantha']); 
});</code></pre> 





<p>You may show the contents of the <code>name</code> variable like so:</p> 





<pre class="PreTag"><code>Hello, {{ $name }}.</code></pre> 





<p>Of course, you are not constrained to showing the contents of the factors passed to the view. You may likewise reverberate the aftereffects of any PHP function. Actually, you can put any PHP code you wish within a Blade reverberate statement:</p> 





<pre class="PreTag"><code>The current UNIX timestamp is {{ time() }}.</code></pre> 





<blockquote> 





<p><strong>Note:</strong> Blade <code>{{ }}</code> articulations are naturally sent through PHP's <code>htmlentities</code> function to anticipate XSS attacks.</p> 





</blockquote> 





<h4>Blade &amp; JavaScript Frameworks</h4> 





<p>Since numerous JavaScript frameworks additionally use &quot;curly&quot; supports to demonstrate a given expression ought to be shown in the program, you may use the <code>@</code> image to educate the Blade rendering engine an expression ought to stay untouched. For example:</p> 





<pre class="PreTag"><code>&lt;h1&gt;Laravel&lt;/h1&gt; 

Hi, @{{ name }}.</code></pre> 





<p>In this case, the <code>@</code> image will be evacuated by Blade; in any case, <code>{{ name }}</code> expression will stay untouched by the Blade engine, enabling it to rather be rendered by your JavaScript framework.</p> 





<h4>Echoing Data If It Exists</h4> 





<p>Sometimes you may wish to reverberate a variable, however you aren't sure if the variable has been set. We can express this in verbose PHP code like so:</p> 





<pre class="PreTag"><code>{{ isset($name) ? $name : 'Default' }}</code></pre> 





<p>However, rather than composing a ternary proclamation, Blade gives you the accompanying advantageous short-cut:</p> 





<pre class="PreTag"><code>{{ $name or 'Default' }}</code></pre> 





<p>In this illustration, if the <code>$name</code> variable exists, its esteem will be shown. In any case, in the event that it doesn't exist, the word <code>Default</code> will be displayed.</p> 





<h4>Displaying Unescaped Data</h4> 





<p>By default, Blade <code>{{ }}</code> proclamations are naturally sent through PHP's <code>htmlentities</code> function to avert XSS assaults. On the off chance that you don't need your information to be gotten away, you may use the accompanying syntax:</p> 





<pre class="PreTag"><code>Hello, {!! $name !!}.</code></pre> 





<blockquote> 





<p><strong>Note:</strong> Be extremely cautious while resounding content that is provided by users of your application. Continuously use the twofold wavy prop grammar to get away from any HTML elements in the content.</p> 





</blockquote> 





<p><a name="control-structures"></a></p> 





<h2>Control Structures</h2> 





<p>In expansion to template legacy and showing information, Blade likewise gives advantageous alternate ways to normal PHP control structures, for example, contingent proclamations and circles. These easy routes give a spotless, pithy method for working with PHP control structures, while likewise staying commonplace to their PHP counterparts.</p> 





<h4>If Statements</h4> 





<p>You may build <code>if</code> explanations utilizing the <code>@if</code>, <code>@elseif</code>, <code>@else</code>, and <code>@endif</code> directives. These directives function indistinguishably to their PHP counterparts:</p> 





<pre class="PreTag"><code>@if (count($records) === 1) 
I have one record! 
@elseif (count($records) &gt; 1) 

I have numerous records! 

@else 


I don't have any records! 





@endif</code></pre> 





<p>For comfort, Blade additionally gives a <code>@unless</code> directive:</p> 





<pre class="PreTag"><code>@unless (Auth::check()) 

You are not marked in. 

@endunless</code></pre> 



<h4>Loops</h4> 





<p>In expansion to restrictive articulations, Blade gives straightforward directives to working with PHP's bolstered circle structures. Once more, each of these directives functions indistinguishably to their PHP counterparts:</p>


<pre class="PreTag"><code>@for ($i = 0; $i &lt; 10; $i++)
    The current value is {{ $i }}
@endfor

@foreach ($users as $user)

    &lt;p&gt;This is user {{ $user-&gt;id }}&lt;/p&gt;

@endforeach
@forelse ($users as $user)

    &lt;li&gt;{{ $user-&gt;name }}&lt;/li&gt;

@empty

    &lt;p&gt;No users&lt;/p&gt;
@endforelse

@while (true)
    &lt;p&gt;I'm looping forever.&lt;/p&gt;
@endwhile</code></pre>


<h4>Including Sub-Views</h4> 





<p>Blade's <code>@include</code> directive, enables you to easily incorporate a Blade view from inside a current view. All factors that are accessible to the parent view will be made accessible to the included view:</p> 





<pre class="PreTag"><code>&lt;div&gt; 

@include('shared.errors') 

&lt;form&gt; 
&lt;!- - Form Contents - &gt; 
&lt;/form&gt; 
&lt;/div&gt;</code></pre> 





<p>Even however the included view will acquire all information accessible in the parent view, you may likewise pass an array of additional information to the included view:</p> 





<pre class="PreTag"><code>@include('view.name', ['some' =&gt; 'data'])</code></pre> 





<blockquote> 





<p><strong>Note:</strong> You ought to abstain from utilizing the <code>__DIR__</code> and <code>__FILE__</code> constants in your Blade views, since they will allude to the location of the stored view.</p> 





</blockquote> 





<h4>Rendering Views For Collections</h4> 





<p>You may consolidate circles and incorporates into one line with Blade's <code>@each</code> directive:</p> 





<pre class="PreTag"><code>@each('view.name', $jobs, 'job')</code></pre> 





<p>The first argument is the view inclined toward render for every component in the array or gathering. The second argument is the array or accumulation you wish to emphasize over, while the third argument is the variable name that will be assigned to the present cycle inside the view. Along these lines, for instance, in the event that you are emphasizing over an array of <code>jobs</code>, normally you will need to get to each activity as a <code>job</code> variable inside your view partial.</p> 





<p>You may likewise pass a fourth argument to the <code>@each</code> directive. This argument decides the view that will be rendered if the given array is empty.</p> 





<pre class="PreTag"><code>@each('view.name', $jobs, 'work', 'view.empty')</code></pre> 





<h4>Comments</h4> 





<p>Blade additionally enables you to characterize remarks in your views. Be that as it may, not at all like HTML remarks, Blade remarks are excluded in the HTML returned by your application:</p> 





<pre class="PreTag"><code>{{- - This remark won't be available in the rendered HTML - }}</code></pre> 





<p><a name="service-injection"></a></p> 





<h2>Service Injection</h2> 





<p>The <code>@inject</code> directive might be used to retrieve an administration from the Laravel benefit holder. The primary argument passed to <code>@inject</code> is the name of the variable the administration will be set into, while the second argument is the class/interface name of the administration you wish to resolve:</p> 





<pre class="PreTag"><code>@inject('metrics', 'App\Services\MetricsService') 
&lt;div&gt; 
Month to month Revenue: {{ $metrics-&gt;monthlyRevenue() }}. 

&lt;/div&gt;</code></pre> 





<p><a name="extending-blade"></a></p> 





<h2>Extending Blade</h2> 





<p>Blade even enables you to characterize your own particular custom directives. You can use the <code>directive</code> method to enroll a directive. At the point when the Blade compiler experiences the directive, it calls the furnished callback with its parameter.</p> 





<p>The following illustration makes a <code>@datetime($var)</code> directive which formats a given <code>$var</code>:</p> 





<pre class="PreTag"><code>&lt;?php 


namespace App\Providers; 


use Blade; 

use Illuminate\Support\ServiceProvider; 

class AppServiceProvider extends ServiceProvider 
{ 
/** 
* Perform post-enlistment booting of administrations. 
* 
* @return void 
*/ 
open function boot() 
{ 
Blade::directive('datetime', function($expression) { 
return "&lt;?php reverberate with{$expression}-&gt;format('m/d/Y H:i'); ?&gt;"; 
}); 
} 
/** 
* Register ties in the holder. 
* 
* @return void 
*/ 
open function enlist() 
{ 
/ 

} 

}</code></pre> 





<p>As you can see, Laravel's <code>with</code> assistant function was used in this directive. The <code>with</code> aide just returns the object/esteem it is given, taking into account helpful method anchoring. The last PHP generated by this directive will be:</p>


<pre class="PreTag"><code>&lt;?php echo with($var)-&gt;format('m/d/Y H:i'); ?&gt;</code></pre>


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