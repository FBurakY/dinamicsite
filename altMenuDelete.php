<html>  
<style>
div {
    border: 2px solid black;
    background-color:#e67e22;
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
}

</style>
<body>	
	<h1>Alt Menu Admin Paneli Veri Tabanı Yönetim Sayfası Delete</h1>	

			
				<div id="mainMenu">			
					<h3>Alt Menu İçerik Sil</h3>						
					<?php 
					include("baglan.php");
					$ifade="<ul id=\"nav\">"; 
						$query= $conn->query("SELECT * FROM `database`.altmenu",PDO::FETCH_ASSOC);
					if($query->rowCount() ){
						foreach($query as $row){
							$ifade.="<li><a href=\"altMenuSil.php?parametre=".$row['altMenuID']."\">".$row['icerik']."</a></li>";
							//$ifade.="<li><a>".$row['menu']."</a></li>";
							//$ifade.="<li><a href=\"#\">".$row['menu']."</a></li>";
							}
						}
						$ifade.="</ul>";
						echo $ifade;	
					?>									
				</div>
			
						
</body>
</html>
<?php echo "<a href=\"kontrol.php\">Geri</a>";?>