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
			<li><a href='dileep.php'>GoToAnswerPage</a></li>
		</ul>
	</div>
	<!-- this is for search -->
	<div id="tfheader">
		<form id="tfnewsearch" method="post" action="searchp.php">
		        <input type="text"  value="" name="virusname" class="tftextinput"  size="21" maxlength="120"><input type="submit" value="search virus" class="tfbutton">
		</form>
	<div class="tfclear"></div>
    </div>
      <div id="qforum1">
		<?php
			$link=mysqli_connect("localhost","root","");
			$db=mysqli_select_db($link,"bey3");
			$user=$_POST['username'];
			$ques=$_POST['question'];
			$ans=$_POST['answer'];
			$qq="select * from question";
			$res=mysqli_query($link,$qq);
			$a=0;
			while($r=mysqli_fetch_row($res)){
				if($r[0]==$user && $r[1]==$ques){
					$ins="update question set answer=\"$ans\" where username=\"$user\"";
					mysqli_query($link,$ins);
					echo "data updated successfully";
					$a=1;
				}
			}
			if($a==0){
				echo "enter correct username and question";
			}
		?>
		</div>
		   
	</body>
	</html>


