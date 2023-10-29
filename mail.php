<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if($_POST){
	if (!$name || !$message || !$email || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		//$error4 = "Email address is invalid!";
		 echo'
            <!DOCTYPE HTML>
            <html>
    	        <head>
    	        	<title>Message</title>
    		        <link rel="icon" href="images/profile1.png" type="image/x-icon">
    		        <meta charset="utf-8" />
    		        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    		        <link rel="stylesheet" href="assets/css/main.css" />
            		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
            	</head>
            	<body class="is-preload">
            
            		<!-- Wrapper -->
            			<div id="wrapper">
            
            				<!-- Header -->
            					<header id="header">
            						<a href="index.html" class="logo">Nora Bui</a>
            					</header>
            
            				<!-- Nav -->
            					<nav id="nav">
            						<ul class="links">
            							<li><a href="index.html">Home</a></li>
            						
            						</ul>
            						<ul class="icons">
            						<li><a href="https://www.linkedin.com/in/ngoc-bui-846168199/" target="_blank" class="icon brands fa-linkedin"><span class="label">Instagram</span></a></li>
            						<li><a href="https://github.com/Norabui01" target="_blank" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
            						<li><a href="https://www.facebook.com/boiboy.bo.39" target="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            						</ul>
            					</nav>
            					
            
            				<!-- Main -->
            					<div id="main">
            
            						<!-- Post -->
            							<section class="post">
            							
            									<h2>Your message was not sent due to invalid email or empty information!.<br />
            									Please try again and make sure to enter a valid email with your information. Thank you.</h2>
            									<p>Go back to the <a href="index.html"><i>homepage.</i></a></p>
            								
            							</section>
            
            					</div>
            
            				<!-- Copyright -->
            					<div id="copyright">
            						<ul><li>&copy; Edit: Nora Bui</li></ul>
            					</div>
            
            			</div>
            
            		<!-- Scripts -->
            			<script src="assets/js/jquery.min.js"></script>
            			<script src="assets/js/jquery.scrollex.min.js"></script>
            			<script src="assets/js/jquery.scrolly.min.js"></script>
            			<script src="assets/js/browser.min.js"></script>
            			<script src="assets/js/breakpoints.min.js"></script>
            			<script src="assets/js/util.js"></script>
            			<script src="assets/js/main.js"></script>
            
            	</body>
            </html>
            ';
	}
	else{
        $mailheader ="From: ".$email;
        
        $recipient = "ngocmj01@gmail.com";

        if (mail($recipient, $email, $message, $mailheader)){
           // or die("Error!");

            echo'
            <!DOCTYPE HTML>
            <html>
    	        <head>
    	        	<title>Message</title>
    		        <link rel="icon" href="images/profile1.png" type="image/x-icon">
    		        <meta charset="utf-8" />
    		        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    		        <link rel="stylesheet" href="assets/css/main.css" />
            		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
            	</head>
            	<body class="is-preload">
            
            		<!-- Wrapper -->
            			<div id="wrapper">
            
            				<!-- Header -->
            					<header id="header">
            						<a href="index.html" class="logo">Nora Bui</a>
            					</header>
            
            				<!-- Nav -->
            					<nav id="nav">
            						<ul class="links">
            							<li><a href="index.html">Home</a></li>
            						
            						</ul>
            						<ul class="icons">
            						<li><a href="https://www.linkedin.com/in/ngoc-bui-846168199/" target="_blank" class="icon brands fa-linkedin"><span class="label">Instagram</span></a></li>
            						<li><a href="https://github.com/Norabui01" target="_blank" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
            						<li><a href="https://www.facebook.com/boiboy.bo.39" target="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            						</ul>
            					</nav>
            					
            
            				<!-- Main -->
            					<div id="main">
            
            						<!-- Post -->
            							<section class="post">
            							
            									<h2>Thank you for contacting me.<br />
            									I will get back to you as soon as possible!</h2>
            									<p>Go back to the <a href="index.html"><i>homepage.</i></a></p>
            								
            							</section>
            
            					</div>
            
            				<!-- Copyright -->
            					<div id="copyright">
            						<ul><li>&copy; Edit: Nora Bui</li></ul>
            					</div>
            
            			</div>
            
            		<!-- Scripts -->
            			<script src="assets/js/jquery.min.js"></script>
            			<script src="assets/js/jquery.scrollex.min.js"></script>
            			<script src="assets/js/jquery.scrolly.min.js"></script>
            			<script src="assets/js/browser.min.js"></script>
            			<script src="assets/js/breakpoints.min.js"></script>
            			<script src="assets/js/util.js"></script>
            			<script src="assets/js/main.js"></script>
            
            	</body>
            </html>
            ';
        }
        else{
             echo'
            <!DOCTYPE HTML>
            <html>
    	        <head>
    	        	<title>Message</title>
    		        <link rel="icon" href="images/profile1.png" type="image/x-icon">
    		        <meta charset="utf-8" />
    		        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    		        <link rel="stylesheet" href="assets/css/main.css" />
            		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
            	</head>
            	<body class="is-preload">
            
            		<!-- Wrapper -->
            			<div id="wrapper">
            
            				<!-- Header -->
            					<header id="header">
            						<a href="index.html" class="logo">Nora Bui</a>
            					</header>
            
            				<!-- Nav -->
            					<nav id="nav">
            						<ul class="links">
            							<li><a href="index.html">Home</a></li>
            						
            						</ul>
            						<ul class="icons">
            						<li><a href="https://www.linkedin.com/in/ngoc-bui-846168199/" target="_blank" class="icon brands fa-linkedin"><span class="label">Instagram</span></a></li>
            						<li><a href="https://github.com/Norabui01" target="_blank" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
            						<li><a href="https://www.facebook.com/boiboy.bo.39" target="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            						</ul>
            					</nav>
            					
            
            				<!-- Main -->
            					<div id="main">
            
            						<!-- Post -->
            							<section class="post">
            							
            									<h2>Your message was not sent due to invalid email!<br />
            									Please try again and make sure to enter a valid email. Thank you.</h2>
            									<p>Go back to the <a href="index.html"><i>homepage.</i></a></p>
            								
            							</section>
            
            					</div>
            
            				<!-- Copyright -->
            					<div id="copyright">
            						<ul><li>&copy; Edit: Nora Bui</li></ul>
            					</div>
            
            			</div>
            
            		<!-- Scripts -->
            			<script src="assets/js/jquery.min.js"></script>
            			<script src="assets/js/jquery.scrollex.min.js"></script>
            			<script src="assets/js/jquery.scrolly.min.js"></script>
            			<script src="assets/js/browser.min.js"></script>
            			<script src="assets/js/breakpoints.min.js"></script>
            			<script src="assets/js/util.js"></script>
            			<script src="assets/js/main.js"></script>
            
            	</body>
            </html>
            ';
        }
	}
}


?>