<!DOCTYPE HTML>
<?php
/*
*Form Name               : index.php
*Difficulty level        : 
*Description             : Index Page 
*Author                  : ASHUTOSH KUMAR CHOUBEY
*Date                    : 17/12/2017
*Modified By             :
*Date of Modification    :
*Purpose of Modification :
*/
	/////////////////////////////////////////////////////////////Start Client SIDE CODE //////////////////////////////////////////////////////////
			
	/////////////////////////////////////////////////////////////End Client SIDE CODE //////////////////////////////////////////////////////////
?>
<html>
    <head>
    	<meta http-equiv="content-type" content="text/html" />
    	<meta name="author" content="" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>            
        <meta name="HandheldFriendly" content="true"/>

        <title>World Gyan</title>
        <link href="/../../css/style.css" rel="stylesheet" type="text/css" media="screen"  />
       
        <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no"/>
        <script language="javascript" src="/../../JavaScript/IndexJS.js"></script>
    </head>
    <body>
		<div id="headerTop">
            <?php
                require "../../../IndexRelated/Header.php";
            ?>        
        </div>
		<div id="sidebar-left">
            <?php
                require "LeftSideBar.php";
            ?>            
        </div>
		<div id="main">
            <div id="menu">
        		<?php
                    require "../../../IndexRelated/MainHeading.php";
                ?>
        	</div>
        	<!-- end #menu -->
        	<div id="page">
                 