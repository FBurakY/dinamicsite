<html>
<head>
<title>F.Burak.Y</title>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<script language="javascript" src="js/jscripts.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
#wrapper					{	width:1200px;	margin:auto auto;}
#header						{	height:350px;}	
.header-menu				{	font-size:15px;	font-weight:bold; height:60px; background:#2980b9	; margin-top:-16px;}
.header-menu ul li a		{	float:left;	padding:15px;	color:white;}
.header-menu ul li a:hover  {	background:skyblue;	transition:5sn;}
#main						{	min-height:500px;}
div.scroll					{	margin-top:15px;	margin-left:100px;	padding:50px;		background:white;	border:1px solid #e74c3c;
								border-radius:1px;  margin-right:100px;	background-color:#ecf0f1;               width:775px;  height:600px;
								overflow: scroll;	color:black;}	
div.scroll h2				{	text-align:left;	padding:1px;	color:#2980b9;}
div.scroll p				{	text-align:left;	color:#e74c3c;	padding:30px; margin-top:-40px;}
.menu-sag					{	margin-top:-600px;	margin-left:950px;	width:353px;	background-color:#ecf0f1;	height:400px;	
								border:1px solid #e74c3c;	border-radius:5px;	}
.menu-sag h2				{	text-shadow:1px 2px ;	text-align:center;	padding:20px; color:#f39c12; }
.menu-sag ul				{	list-style:none; margin-top:50px; }
.menu-sag ul li				{	margin-left:90px;}	
.menu-sag ul li a			{	font-weight:bold;	color:#e74c3c;}
.menu-sag ul li a:hover		{	background:#ecf0f1;	border:1px solid #ecf0f1;	border-radius:5px;}
#footer						{	height:1px;}
#footer p					{	text-shadow:1px 1px #3498db;	letter-spacing:3px;	text-align:center;	padding-top:300px;	color:black;}
#footer p a					{	text-decoration:none;	color:white;}
#footer p a:hover			{	color:#e74c3c;	transition:1sn;}
body						{	background-color:#34495e;}
</style>
<body>	
	
	<div class="w3-content w3-section" style="max-width:1200px; ">
				  <img class="mySlides" src="image/main.jpg"          width="1200" height="350">
				  <img class="mySlides" src="image/motherboard.jpg"   width="1200" height="350">
				  <img class="mySlides" src="image/serversRoom.jpg"   width="1200" height="350" >		 
				  <img class="mySlides" src="image/destop.jpg"        width="1200" height="350" >
	</div>

	
	<div id="wrapper">		
		<div class="header-menu">			
		<ul>
			<?php 
				$ifade="<ul id=\"nav\">";
				$query= $conn->query("SELECT * FROM `database`.anamenu",PDO::FETCH_ASSOC);
				if($query->rowCount() ){
					foreach($query as $row){
					$ifade.="<li><a href=\"index.php?parametre=".$row['ID']."\">".$row['menu']."</a></li>";
					//$ifade.="<li><a>".$row['menu']."</a></li>";
					//$ifade.="<li><a href=\"#\">".$row['menu']."</a></li>";
					}
				}
				$ifade.="</ul>";
				echo $ifade;
			?>			
		</ul>
		</div>
	</div>
	
	<div class="scroll">			
			<?php 		
				$deger=$_REQUEST["parametre"];
				$ifade="<ul id=\"nav\">";
				$query= $conn->query("SELECT * FROM `database`.yanaltmenu where altMenuID=$deger;",PDO::FETCH_ASSOC);
				if($query->rowCount() ){
					foreach($query as $row){
					$ifade.="<h2>".$row['konuBaslik']."</h2><p>".$row['Aciklama']."</p>";					
					//$ifade.="<li><a href=\"#\">".$row['menu']."</a></li>";
					}
				}
				$ifade.="</ul>";
				echo $ifade;			
			?>		
	</div>
		
	<div id="main">	
		<div class="menu-sag">
			<h2>Konu Başlıkları</h2>
			<ul>
				<?php 
				$ifade="<ul id=\"nav\">";
				$query= $conn->query("SELECT * FROM `database`.altmenu where anaMenuID=$deger;",PDO::FETCH_ASSOC);
					if($query->rowCount() ){
						foreach($query as $row){
						$ifade.="<li><a href=\"index.php?parametre=".$row['altMenuID']."\">".$row['icerik']."</a></li>";
						}
					}
					$ifade.="</ul>";
					echo $ifade;
			?>									
			</ul>			
		</div>	
		
	</div>	
		
	<div id="footer">	
		<p><a href="index.html">Tüm Hakları Saklıdır.</a> &copy; Fadıl Burak Yurtsever </p> 
	</div>
</body>
<script> 
			var myIndex = 0;
			carousel();

			function carousel() {
				var i;
				var x = document.getElementsByClassName("mySlides");
				for (i = 0; i < x.length; i++) {
				   x[i].style.display = "none";  
				}
				myIndex++;
				if (myIndex > x.length) {myIndex = 1}    
				x[myIndex-1].style.display = "block";  
				setTimeout(carousel, 2000); 
			}
	</script>

</html>