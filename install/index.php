<?php
/*
 * Project: iZariam
 * File: install/index.php
 * Edited: 08/03/2015
 * By: Kevern
 * Info: izariam@onapi.co.za
 */
$page = 'index';
if (isset($_GET['step'])) {
    switch ($_GET['step']) {
        case 1: $page = 'db'; break;
        case 2: $page = 'url'; break;
        case 3: $page = 'server'; break;
        case 4: $page = 'sql'; break;
        case 5: $page = 'finish'; break;
        default: $page = 'index'; break;
    }
}
if (isset($_GET['error'])) {
    switch ($_GET['error']) {
        case 1: $error = 'Try CHMOD 777'; break;
        default: $error = 'Error ocurred'; break;
    }
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">
    <meta name="Author" content="Kevern">
    <meta name="Description" content="Install iZariam">
    <title>iZariam install</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link href="design/style.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
    <!-- <div class="products"></div> -->
    <div id="headback">
        <a href="index.php"><div id="headlogo"></div></a>
        <div id="main">
            <div id="wrapper">
                <div id="links">
                    <a href="#" id="index" title="Disclamer">Disclamer</a>
                    <a href="#" id="install" title="Start Install">Start Install</a>
                    <a href="#" id="credits" title="Credits">Credits</a>
                    <!-- <a href="#" id="rules" title="Step4">Step4</a> -->
                    <a href="http://forum.onapi.co.za/categories/izariam" target="_blank" title="Support Forum">Support Forum</a>
                </div>
            </div>
            <? if (isset($error)) { echo $error; } ?>
            <div id="text">
            
            </div>
            <br>
        </div>
        <div id="footer">Powered by <a href="https://github.com/Kevvo7312/IZARIAM">iZariam</a></div>
        <div id="footer2"><a href="http://www.onabox.co.za">OnABox</a> © 2015<br><br></div>
    </div>
    <iframe src="" marginheight="0" marginwidth="0" frameborder="0" height="1" scrolling="no" width="1"></iframe>
    <div id="fuzz">
        <div class="loadbox">
            <img src="design/ajax-loader.gif">
        </div>
    </div>
    </body>
</html>
<script>
    $(document).ready(function(){
    	$("#fuzz").css("height", $(document).height());
    	$("#fuzz").fadeIn();
    	$('#text').load('templates/<?=$page;?>.php',function(){$("#fuzz").fadeOut()});
    	$("#index").click(function(){
    		$("#fuzz").fadeIn();
    		$('#text').load('templates/index.php',function(){$("#fuzz").fadeOut()});
    	});
    	$("#install").click(function(){
    		$("#fuzz").fadeIn();
    		$('#text').load('templates/db.php',function(){$("#fuzz").fadeOut()});
    	});
    	$("#credits").click(function(){
    		$("#fuzz").fadeIn();
    		$('#text').load('templates/credits.php',function(){$("#fuzz").fadeOut()});
    	});
        /*$("#rules").click(function(){
    		$("#fuzz").fadeIn();
    		$('#text').load('templates/rules.php',function(){$("#fuzz").fadeOut()});
    	});*/
    	$(window).bind("resize", function(){
            $("#fuzz").css("height", $(window).height());
    	});
    	$(window).bind("scroll", function(){
            $("#fuzz").css("height", $(window).height());
    	});
    	$(window).scroll(function () {
    		$("#fuzz").css("height", $(window).height());
    	});
    });
</script>