<?php


$Author="Ashutosh Kumar Choubey";


$Description="Laravel is The PHP framework for web artisans.Well organized,Simple learning ,Free Laravel Tutorial and easy to understand.This is the chapter of Laravel Views";


$Keywords="


Basic Usage,


Passing Data To Views,


Sharing Data With All Views,


View Composers,Views


";





$Contents='Views';


 require "IndexRelated/indexUpper.php";


?>


        		


                                       <!-- Start from Here -->


<article>


		<h1>Views</h1>


<ul>


<li><a href="#basic-usage">Basic Usage</a>


<ul>


<li><a href="#passing-data-to-views">Passing Data To Views</a></li>


<li><a href="#sharing-data-with-all-views">Sharing Data With All Views</a></li>


</ul></li>


<li><a href="#view-composers">View Composers</a></li>


</ul>


<p><a name="basic-usage"></a></p>


<h2>Basic Usage</h2> 





<p>Views contain the HTML served by your application and separate your controller/application rationale from your introduction rationale. Views are stored in the <code>resources/views</code> directory.</p> 





<p>A straightforward view may look something like this:</p> 





<pre><code>&lt;!- - View stored in resources/views/greeting.php - &gt; 


&lt;html&gt; 


&lt;body&gt; 



&lt;h1&gt;Hello, &lt;?php resound $name; ?&gt;&lt;/h1&gt; 




&lt;/body&gt; 

&lt;/html&gt;</code></pre> 





<p>Since this view is stored at <code>resources/views/greeting.php</code>, we may return it utilizing the worldwide <code>view</code> aide function like so:</p> 





<pre><code>Route::get('/', function () { 

return view('greeting', ['name' =&gt; 'James']); 


});</code></pre> 





<p>As you can see, the main argument passed to the <code>view</code> partner corresponds to the name of the view file in the <code>resources/views</code> directory. The second argument passed to aide is an array of information that ought to be made accessible to the view. In this case, we are passing the <code>name</code> variable, which is shown in the view by essentially executing <code>echo</code> on the variable.</p> 





<p>Of course, views may likewise be settled inside sub-indexes of the <code>resources/views</code> directory. &quot;Dot&quot; documentation might be used to reference settled views. For instance, if your view is stored at <code>resources/views/administrator/profile.php</code>, you may reference it like so:</p> 





<pre><code>return view('admin.profile', $data);</code></pre> 





<h4>Determining If A View Exists</h4> 





<p>If you have to decide whether a view exists, you may use the <code>exists</code> method subsequent to calling the <code>view</code> assistant without any arguments. This method will return <code>true</code> if the view exists on disk:</p> 





<pre><code>if (view()- &gt;exists('emails.customer')) { 

/ 
}</code></pre> 





<p>When the <code>view</code> aide is called without arguments, a case of <code>Illuminate\Contracts\View\Factory</code> is returned, giving you access to any of the production line's methods.</p> 





<p><a name="view-data"></a></p> 





<h3>View Data</h3> 





<p><a name="passing-information to-views"></a></p> 





<h4>Passing Data To Views</h4> 





<p>As you found in the past illustrations, you may easily pass an array of information to views:</p> 





<pre><code>return view('greetings', ['name' =&gt; 'Victoria']);</code></pre> 





<p>When passing information in this way, <code>$data</code> ought to be an array with key/esteem sets. Inside your view, you would then be able to get to each esteem utilizing its corresponding key, for example, <code>&lt;?php resound $key; ?&gt;</code>. As an other option to passing an entire array of information to the <code>view</code> partner function, you may use the <code>with</code> method to add singular bits of information to the view:</p> 





<pre><code>$view = view('greeting')- &gt;with('name', 'Victoria');</code></pre> 





<p><a name="sharing-information with-all-views"></a></p> 





<h4>Sharing Data With All Views</h4> 





<p>Occasionally, you may need to impart a bit of information to all views that are rendered by your application. You may do as such utilizing the view processing plant's <code>share</code> method. Ordinarily, you would put calls to <code>share</code> inside a specialist organization's <code>boot</code> method. You are allowed to add them to the <code>AppServiceProvider</code> or generate a different specialist organization to house them:</p> 





<pre><code>&lt;?php 





namespace App\Providers; 





class AppServiceProvider extends ServiceProvider 





{ 





/** 





* Bootstrap any application administrations. 





* 





* @return void 





*/ 





open function boot() 





{ 





view()- &gt;share('key', 'esteem'); 





} 





/** 





* Register the specialist co-op. 





* 





* @return void 





*/ 





open function enroll() 





{ 





/ 





} 





}</code></pre> 





<p><a name="view-composers"></a></p> 





<h2>View Composers</h2> 





<p>View arrangers are callbacks or class methods that are called when a view is rendered. On the off chance that you have information that you need to be bound to a view each time that view is rendered, a view arranger can enable you to sort out that rationale into a solitary location.</p> 





<p>Let's enlist our view authors inside a service provider. We'll use the <code>view</code> assistant to get to the basic <code>Illuminate\Contracts\View\Factory</code> contract execution. Keep in mind, Laravel does exclude a default directory for view authors. You are allowed to sort out them anyway you wish. For instance, you could make a <code>App\Http\ViewComposers</code> directory:</p> 





<pre><code>&lt;?php 





namespace App\Providers; 





use Illuminate\Support\ServiceProvider; 





class ComposerServiceProvider extends ServiceProvider 





{ 





/** 





* Register ties in the holder. 





* 





* @return void 





*/ 





open function boot() 





{ 





/Using class based writers... 





view()- &gt;composer( 





'profile', 'App\Http\ViewComposers\ProfileComposer' 





); 





/Using Closure based writers... 





view()- &gt;composer('dashboard', function ($view) { 





}); 





} 





/** 





* Register the specialist co-op. 





* 





* @return void 





*/ 





open function enroll() 





{ 





/ 





} 





}</code></pre> 





<p>Remember, in the event that you make another specialist co-op to contain your view arranger enrollments, you should add the specialist organization to the <code>providers</code> array in the <code>config/app.php</code> design file.</p> 





<p>Now that we have enlisted the arranger, the <code>[email&#160;protected]</code> method will be executed each time the <code>profile</code> view is being rendered. Along these lines, how about we characterize the author class:</p> 





<pre><code>&lt;?php 





namespace App\Http\ViewComposers; 





use Illuminate\Contracts\View\View; 





use Illuminate\Users\Repository as UserRepository; 





class ProfileComposer 





{ 





/** 





* The user archive execution. 





* 





* @var UserRepository 





*/ 





ensured $users; 





/** 





* Create another profile author. 





* 





* @param UserRepository $users 





* @return void 





*/ 





open function __construct(UserRepository $users) 





{ 





/Dependencies consequently settled by benefit compartment... 





$this-&gt;users = $users; 





} 





/** 





* Bind information to the view. 





* 





* @param View $view 





* @return void 





*/ 





open function compose(View $view) 





{ 





$view-&gt;with('count', $this-&gt;users-&gt;count()); 





} 





}</code></pre> 





<p>Just before the view is rendered, the arranger's <code>compose</code> method is called with the <code>Illuminate\Contracts\View\View</code> occurrence. You may use the <code>with</code> method to tie information to the view.</p> 





<blockquote> 





<p><strong>Note:</strong> All view authors are settled by means of the service container, so you may type-imply any conditions you require inside an arranger's constructor.</p> 





</blockquote> 





<h4>Attaching A Composer To Multiple Views</h4> 





<p>You may append a view author to numerous views on the double by passing an array of views as the primary argument to the <code>composer</code> method:</p>


<pre><code>view()-&gt;composer(


    ['profile', 'dashboard'],


    'App\Http\ViewComposers\MyViewComposer'


);</code></pre>


<p>The <code>composer</code> method accepts the <code>*</code> character as a wildcard, allowing you to attach a composer to all views:</p>


<pre><code>view()-&gt;composer('*', function ($view) {


    //


});</code></pre>


<h3>View Creators</h3>


<p>View <strong>creators</strong> are very similar to view composers; but, these are fired very soon when the view is instantiated instead of waiting until the view is about to render. To register a view creator, use the <code>creator</code> method:</p>


<pre><code>view()-&gt;creator('profile', 'App\Http\ViewCreators\ProfileCreator');</code></pre>


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