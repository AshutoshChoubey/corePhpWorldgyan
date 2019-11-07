<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>WorldGyan Admin Pannel </title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
                
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/fontastic.css"/>
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <link rel="stylesheet" href="icons-reference/styles.css"/>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
    
    
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar" style="background-color: #2A1818;">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center" style="background: ;">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle"/>
            <h2 class="h5">Ashutosh</h2><span style="color: #E2A5A5;">Web Developer</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong style="color: #D53C0E;">W</strong><strong style="color:#D53C0E ;">G</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading"  style=" background: #757A6F; color: #492F2F;">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.html"> <i class="icon-home"></i>Home  </a></li>
            <li><a href="forms.html"> <i class="fa fa-book"></i>Your Containt  </a></li>
            <li><a href="charts.html"> <i class="fa fa-pencil-square-o"></i>Update Containt   </a></li>
            <li><a href="tables.html"> <i class="icon-grid"></i>Your Tutorial</a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-plus-square"></i>Add</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Add Tutorial</a></li>
                <li><a href="#">Add News</a></li>
                <li><a href="#">Add Blog</a></li>
                <li><a href="#">Add Material</a></li>                                                
              </ul>
            </li>
            <li><a href="login.html"> <i class="fa fa-trash"></i>Delete Containt     </a></li>
            
          </ul>
        </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading" style=" background: #757A6F; color: #492F2F;">Second menu</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#"> <i class="icon-screen"> </i>Demo</a></li>
            <li> <a href="#"> <i class="icon-flask"> </i>Demo
                <div class="badge badge-info">Special</div></a></li>
            <li> <a href=""> <i class="icon-flask"> </i>Demo</a></li>
            <li> <a href=""> <i class="icon-picture"> </i>Demo</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar" style="background: linear-gradient(#FFDCC4,#FF9042,#FF8632 );" >
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span style="font-family: French Script MT; font-size:larger; font-weight: bold; text-transform: none;">WorldGyan</span></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
              <li class="nav-item"><a href="login.html" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
            </ul>
              
              
              
              
              
              
              
              
              
              
              
              
              
                                                                                                                                                                                                                                                            
            </div>
          </div>
        </nav>
      </header>
      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        
      </section>
      <footer class="main-footer" style="background-color:#E2E9E9;">
        <div class="container-fluid">
                <table width="100%" border='0'>
            	               <tr>
                            		<td height="15px">
                            			<div style="float: right;font-size: x-small;">
                            				This Site Maintained by <a style="color:#70730F; font-size: xx-small;"  href="http://www.worldgyan.com" ><b> WorldGyan.com</b></a>
                            			</div>                        
                            		</td>
                                </tr>
                                
                </table>        
          <div class="row">                      
            <div class="small-print">
            	<div class="container">
            		<p>Copyright &copy;<?php echo $currentDate=date('Y'); ?> WorldGyan.com  </p>
            	</div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
     $('#toggle-btn').on('click', function (e) {

        e.preventDefault();

        if ($(window).outerWidth() > 1194) {
            $('nav.side-navbar').toggleClass('shrink');
            $('.page').toggleClass('active');
        } else {
            $('nav.side-navbar').toggleClass('show-sm');
            $('.page').toggleClass('active-sm');
        }
    });

    
    
    
    </script>
  </body>
</html>