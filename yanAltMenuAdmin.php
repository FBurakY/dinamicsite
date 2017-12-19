<html>  
<style>
div {
    border: 2px solid black;
    background-color: #f1c40f;
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
}
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}
input[type=text]:focus {
    border: 3px solid #555;
}
</style>
<body>	
	<h1>Yan Alt Menü Admin Paneli Veri Tabanı Yönetim Sayfası</h1>		
	<form action="childMenuKaydet.php" method="post" class="ChildMenu">
		<div id="childMenu">
			<h3>Yan Alt Menu</h3>
			 Alt Menu ID    : <input type="text" name="altMenuID"><br>
			 Konu Basligi   : <input type="text" name="konuBasligi"><br>
			 Konu Aciklamasi:<input type="text" name="konuAciklamasi"><br>			
			 Kaydet      :<input type="submit"></input>				
		</div>	
	</form>	
</body>
</html>
<?php echo "<a href=\"kontrol.php\">Geri</a>";?>