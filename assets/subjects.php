<?php
	$option = $_POST['active_option'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Share Your Best</title>
        <link rel="stylesheet" href="../css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
        <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    </head>
    <body>
    	<div class="top">
	    	<div id="logo">ShareYourBest</div>
	    	<div id="search">
	    		<input type="test" name="search" placeholder="Search" />
	    		<span class="search-icon">Icon</span>
	    	</div>
	    	<div id="login"><a href="assets/login.html">Login</a></div>
	    </div>
        <header>
        	<ul>
	            <li class="tabs">ShareYourBest</li>
	            <li class="tabs">Home</li>
	            <li class="tabs" id="sub">
	            	Subjects
	            	<ul id="subjects-list">
	            		<input type="hidden" name="active_option" />
	            		<li id="science">
	            			Science
	            			<ul id="science-list">
	            				<li onclick="getID(elem)">Physics</li>
	            				<li>Chemistry</li>
	            				<li>Mathematics</li>
	            			</ul>
	            		</li>
	            		<li id="arts">
	            			Arts
	            			<ul id="arts-list">
	            				<li>xxxxx</li>
	            				<li>xxxxx</li>
	            				<li>xxxxx</li>
	            			</ul>
	            		</li>
	            		<li id="commerce">
	            			Commerce
	            			<ul id="commerce-list">
	            				<li>yyyyyy</li>
	            				<li>yyyyyy</li>
	            				<li>yyyyyy</li>
	            			</ul>
	            		</li>
	            	</ul>
	            </li>
	            <li class="tabs">Question Papers</li>
	            <li class="tabs">Books</li>
	            <li class="tabs">Contact Us</li>
	            <li class="tabs">About</li>
        	</ul>
        </header>
        <main>
			<div class="heading-container">
				<div class="heading"><?= $option ?></div>
			</div>
        	<div class="width-20 fixed">
				<ul>
					<li class="active left-menu" id="college" onclick="ExpandCollege()">
						College<span class="right pad-right-10px">+</span>
						<ul id="sem-list">
							<li>1st Sem</li>
							<li>1st Sem</li>
							<li>1st Sem</li>
							<li>1st Sem</li>
							<li>1st Sem</li>
							<li>1st Sem</li>
							<li>1st Sem</li>
							<li>1st Sem</li>
						</ul>
					</li>
					<li class="left-menu">Class 12</li>
					<li class="left-menu">Class 10</li>
				</ul>
			</div>
        	<div class="width-50 mar-left-20">
				<div class="db1">
					<div class="questions">Questions for 2017-18</div>
					<div class="questions">Questions for 2017-18</div>
					<div class="questions">Questions for 2017-18</div>
				</div>
        	</div>
        	<div class="width-30">hgghjdfddddddddd</div>
        </main>
        <footer>
        	<div class="address">ShareYourBest
                 <address>
                 	Agartala pin-799005
                 </address>

        	</div>
        	<div class="social">
        		<i class="fab fa-facebook-f fa-2x"></i>
        		<i class="fab fa-twitter-square fa-2x"></i>
        		<i class="fab fa-instagram fa-2x"></i>
        		<i class="fab fa-linkedin fa-2x"></i>


        	</div>
        </footer>
        <script type="text/javascript" src="../js/home.js"></script>
    </body>
</html>
