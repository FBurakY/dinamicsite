<html>  
<style>
div {
    border: 2px solid black;
    background-color:#e74c3c;
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
}

</style>
<body>	
	<h1>Menu Admin Paneli Veri Tabanı Yönetim Sayfası Delete</h1>	

			
				<div id="mainMenu">			
					<h3>Ana Menu İçerik Sil</h3>						
					<?php 
					include("baglan.php");
					$ifade="<ul id=\"nav\">";
						$query= $conn->query("SELECT * FROM `database`.anamenu;",PDO::FETCH_ASSOC);
					if($query->rowCount() ){
						foreach($query as $row){
							$ifade.="<li><a href=\"Sil.php?parametre=".$row['ID']."\">".$row['menu']."</a></li>";
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