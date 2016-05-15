<!DOCTYPE >
<html>
	<head>
	<!-- this first one bellow link is important for virus heading -->
	<title>virusname</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	</head>
	
	<body>
		<div id="qqq">
		<marquee><h4 style="font-family: Verdana;color:#003380;font-size:40px;">Welcome to Virus Disease Database</h4></marquee>
	</div>
	<br>

    <div id='menu'>
		<ul>
		   <li class='active'><a href='index.html'>Home</a></li>
		   <li><a href='Contact.html'>Contact</a></li>
		   <li><a href='Disease.html'>Disease</a></li>
		   <li><a href='signup.html'>Signup</a></li>
		   <li><a href='Login.html'>Login</a></li>
		   <li><a href='askquestion.html'>AskQuestion</a></li>
		    <li><a href='getanswer.html'>GetAnswer</a></li>
			<li><a href='dileep.php'>ViewQ</a></li>
			<li><a href='cuservdatap.php'>UserUploadVdata</a></li> 
			<li><a href='adminvdata.html'>AdminUploadVdata</a></li>
			<li><a href='DeleteVdata.html'>DeleteVdata</a></li>
		</ul>
	</div>
	<!-- this is for search -->
	<div id="tfheader">
		<form id="tfnewsearch" method="get" action="searchp.php">
		        <input type="text"  class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search virus" class="tfbutton">
		</form>
	<div class="tfclear"></div>
    </div>
	
	 <div id="qforum2">
	 <?php
		$link=mysqli_connect('localhost','root','');
		$db=mysqli_select_db($link,'bey3');
		
	$sac1 ="INSERT INTO adminvdata VALUES ('$_POST[virusname]','$_POST[accessionid]','$_POST[sourceinformation]','$_POST[segment]','$_POST[length]','$_POST[protein]','$_POST[host]','$_POST[family]','$_POST[diseasespreadingmethod]','$_POST[diseasename]','$_POST[treatement]','$_POST[prevention]','$_POST[references]')";
		
		mysqli_query($link,$sac1);
		echo "Admin Virus Data uploaded successfully";
     ?> 
	  </div>
	  
  </body>
</html>


