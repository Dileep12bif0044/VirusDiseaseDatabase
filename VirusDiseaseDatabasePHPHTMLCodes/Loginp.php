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
		   <li><a href='vdata.html'>SendVirusData</a></li>
		   
		</ul>
	</div>
	<!-- this is for search -->
	<div id="tfheader">
		<form id="tfnewsearch" method="post" action="searchp.php">
		        <input type="text"  value="" name="virusname" class="tftextinput"  size="21" maxlength="120"><input type="submit" value="search virus" class="tfbutton">
		</form>
	<div class="tfclear"></div>
    </div>

   <div id="contact3" >
			
			<?php
		$link=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($link,"bey3");
	 	$user=$_POST['user']; 
		$pass=$_POST['password'];
		$count=0;
		$eject="select name,password from checkt";
		$ver=mysqli_query($link,$eject);
		while($qq=mysqli_fetch_row($ver))
		{
			if($qq[0]==$user && $qq[1]==$pass && $user!='dileep' && $pass!='tudu'){
			    echo "<br>";
			    echo"Congratulations you are logged in";
				$count=$count+1;
				//header("Location: index.html");
			}
		    else if($user=='dileep' && $pass=='tudu'){
				header("Location: dileep.php");
			}
	    }
		if($count==0)
		{
			echo "<br>";
			echo "<b>Either username or password is incorrect or you are not a member !";
		}
	?>
			
	</div>

	</body>
	</html>
	