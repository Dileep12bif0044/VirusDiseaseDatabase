<!DOCTYPE html>
<html>
			<head>
			
		<style>
			#qq{
			    top: 300px;
				width: 200px;
				height: 40px;
				background-color: #B88AE6;
				text-align: center;
				padding-top: 20px;
			}
			#ww{
			top: 300px;
				width: 200px;
				height: 40px;
				background-color: #FF75FF;
				text-align: center;
				padding-top: 20px;
			}
			#ee{
				width: 200px;
				height: 40px;
				background-color: #99993D;
				text-align: center;
				padding-top: 20px;
			}
			#aa{
				position: absolute;
				top: 10px;
				left: 500px;
			}
			#qw{
				position: absolute;
				top: 250px;
				left: 700px;
			}
		</style>
		<!-- this first one bellow link is important for virus heading -->
			<title>virusname</title>
			<link rel="stylesheet" href="style.css">
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<link rel="stylesheet" href="styles.css">
			<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	</head>	
	
	<body >
	
	<div id="qqq">
		<marquee><h4 style="font-family: Verdana;color:#003380;font-size:25px;">Welcome to Virus Disease Database</h4></marquee>
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
		<form id="tfnewsearch" method="post" action="searchp.php">
		        <input type="text"  value="" name="virusname" class="tftextinput"  size="21" maxlength="120"><input type="submit" value="search virus" class="tfbutton">
		</form>
	<div class="tfclear"></div>
    </div>

<div id="qforum5">
	
		<button onclick="views()"><div id="qq">
		</h3>view all question</h3>
		</div></button>
		<button onclick="unviews()"><div id="ww">
		</h3>view unanswered question</h3>
		</div></button>
		
		<div id="qw"><form method="post" action="ans.php">
			<legend>Enter answer for user query</legend>
					Username:<input type="text" value="" name="username"><br>
					Question:<input type="text" value="" name="question"><br>
					Answer:<textarea value=""  name="answer" rows="7" cols="60"></textarea> <br>
				<!--	answer:<input type="text" value="" name="answer"><br> -->
					<input type="submit" value="submit" name="submit">
				</form>
		</div>
		<p id="sac"></p>
		<script>
			function views(){
					document.getElementById("sac").innerHTML="<?php view(); ?>";
			}
			function unviews(){
					document.getElementById("sac").innerHTML="<?php unview(); ?>";
			}
			function editcopy(){
					document.getElementById("sac").innerHTML="<?php unview(); ?>";
			}
			
		</script>
		<?php
			function view(){
				$link=mysqli_connect("localhost","root","");
				$db=mysqli_select_db($link,"bey3");
				$qq="select * from question";
				$ww=mysqli_query($link,$qq);
				while ($r1 =mysqli_fetch_row($ww)){
					echo $r1[0];echo " ?: ";echo $r1[1];echo "::@ ";echo $r1[2];echo "<br>";
				}
			}
			function unview(){
				$link=mysqli_connect("localhost","root","");
				$db=mysqli_select_db($link,"bey3");
				$qq="select * from question";
				$ww=mysqli_query($link,$qq);
				while ($r1 =mysqli_fetch_row($ww)){
					if($r1[2]==""){
					echo $r1[0];echo "?: ";echo $r1[1];echo "<br>";
				    }
				}
			}
			?>
			</div>
			
	</body>
</html>		