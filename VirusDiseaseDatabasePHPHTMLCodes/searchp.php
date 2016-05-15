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
		</ul>
	</div>
	<!-- this is for search -->
	<div id="tfheader">
		<form id="tfnewsearch" method="get" action="searchp.php">
		        <input type="text"  class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search virus" class="tfbutton">
		</form>
	<div class="tfclear"></div>
    </div>  

	 <div id="getans">
	  <?php
		$link=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($link,"bey3");
		$virusname=($_POST['virusname']);
		$q1="select * from adminvdata where virusname='$virusname'";
		  if($virusname){
		$res=mysqli_query($link,$q1); 
		while($r=mysqli_fetch_row($res)){
		//	echo $r[1]." :) ".$r[2]."<br>"; //
		        echo "<b>VirusName : ",$r[0] ;echo "<br>";
				echo "AccessionId : ",$r[1] ;echo "<br>";
				echo "SourceInformation : ",$r[2] ;echo "<br>";
				echo "Segment : ",$r[3] ;echo "<br>";
				echo "Length : ",$r[4] ;echo "<br>";
				echo "Protein : ",$r[5] ;echo "<br>";
				echo "HostName : ",$r[6] ;echo "<br>";
				echo "Family : ",$r[7] ;echo "<br>";
				echo "DiseaseSpredingMethod : ",$r[8] ;echo "<br>";
				echo "DiseaseName : ",$r[9] ;echo "<br>";
				echo "Treatement : ",$r[10] ;echo "<br>";
				echo "Prevention : ",$r[11] ;echo "<br>";
				echo "References : ",$r[12] ;echo "<br>";
		}
		  }
		   else
				echo "<b>Key does not exist in database"; 
	  ?>
	  </div>
  </body>
</html>