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
	
		<button onclick="views()">
		<div id="qq">
		</h3>view user send virus disease data</h3>
		</div>
		</button>
 <!-- 	<button onclick="unviews()">
         <div id="ww">
		</h3>view unanswered question</h3>
		</div>
		</button>    -->
		
<!--		<div id="qw"><form method="post" action="ans.php">
			<legend>Enter answer for user query</legend>
					Username:<input type="text" value="" name="username"><br>
			 Question:<input type="text" value="" name="question"><br> 
					Answer:<textarea value=""  name="answer" rows="7" cols="60"></textarea> <br>
				answer:<input type="text" value="" name="answer"><br>
					<input type="submit" value="submit" name="submit">
				</form>
		    </div>   -->
		<p id="sac"></p>
		<div id="tforum">
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
				$qq="SELECT * FROM vdata ";
				$ww=mysqli_query($link,$qq);
				while ($r =mysqli_fetch_row($ww)){
				/*	echo $r1[0];echo " ?: ";echo $r1[1];echo "::@ ";echo $r1[2];echo "<br>"; */
                echo "<b>UserName : ",$r[0] ;echo "<br>";
				echo "VirusName : ",$r[1] ;echo "<br>";
				echo "AccessionId : ",$r[2] ;echo "<br>";
				echo "Family : ",$r[3] ;echo "<br>";
				echo "SourceInformation : ",$r[4] ;echo "<br>";
				echo "Segment : ",$r[5] ;echo "<br>";
				echo "Length : ",$r[6] ;echo "<br>";
				echo "Protein : ",$r[7] ;echo "<br>";
				echo "Host : ",$r[8] ;echo "<br>";
				echo "DiseaseName : ",$r[9] ;echo "<br>";
				echo "References : ",$r[10] ;echo "<br>";
				echo "DiseaseSpredingMethod : ",$r[11] ;echo "<br>";
				echo "DescribeDrugs : ",$r[12] ;echo "<br>";
				echo "----------------------------";echo "<br>";
				}
			}  
			function unview(){
				$link=mysqli_connect("localhost","root","");
				$db=mysqli_select_db($link,"bey3");
				$qq="select * from vdata";
				$ww=mysqli_query($link,$qq);
				while ($r1 =mysqli_fetch_row($ww)){
					if($r1[2]==""){
					echo $r1[0];echo "?: ";echo $r1[1];echo "<br>";
				    }
				}
			} 
			    
			?> 
			</div>
</div>
			
	</body>
</html>		