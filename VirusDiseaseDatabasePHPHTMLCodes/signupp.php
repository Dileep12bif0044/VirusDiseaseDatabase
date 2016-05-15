	<!DOCTYPE >
<html>
	<head>
	<!-- this first one bellow link is important for virus heading -->
	<title>signupp</title>
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
		</ul>
	</div>
	<!-- this is for search -->
	<div id="tfheader">
		<form id="tfnewsearch" method="get" action="searchp.php">
		        <input type="text"  class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search virus" class="tfbutton">
		</form>
	<div class="tfclear"></div>
    </div>  
<div id="contact3">
	<?php
	
	$link=mysqli_connect('localhost','root','');
		$db=mysqli_select_db($link,'bey3');
		
		$val1=$_POST['name'];
		$val2=$_POST['phone'];
		$val3=$_POST['email'];
		$val4=$_POST['password'];
	    $val5="@gmail.com";
		$val6="@yahoo.com";
		$val7=substr($val3,-10);
		
		function digits($val2){
       return (int) (log($val2, 10) + 1);
       }
		
		
		$qq="select name from checkt";
		 $count =0;
		
		$ww=mysqli_query($link,$qq);
		while ($r1 =mysqli_fetch_row($ww)){
			if($r1[0] == $val1 ){
			$count=$count+1;
			//mysqli_query($link,$sac1);
			 echo"<br>";
			echo "<b>User already Exist,Please choose another name";
			}
		}
		if($count==0 )
		  {
		   if(((strcasecmp($val7,$val5)==0)||(strcasecmp($val7,$val6)==0))&&(digits($val2)== 10)){
			  $sql="INSERT INTO checkt (name,phone,email,password) VALUES ('$val1','$val2','$val3','$val4')";
			  mysqli_query($link,$sql);
			  echo"<br>";
			 echo "<b>Your profile created successfully";
			 }
			 else
			   echo"<br>Please Enter correct email & PhoneNO !";
		} 
	?> 
	</div>
	  </div>
  </body>
</html>
	
	