<html>  
<style>
div {
    border: 2px solid black;
    background-color: #e67e22;
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
textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
</style>
<body>	
	<h1>Alt Menu Admin Paneli Veri Tabanı Yönetim Sayfası</h1>		
	<form action="subMenuKaydet.php" method="post" class="SubMenu">	
		<div id="subMainMenu">
			<h3>Alt Menu</h3>
			Ana Menu ID : <input type="text" name="anaMenuID"><br>
			İçerik      : <input type="text" name="icerik"><br>	
			İçerik Link : <input type="text" name="icerik_link"><br>
			Kaydet      :<input type="submit"></input>					
		</div>
	</form>			
</body>
</html>
<?php echo "<a href=\"kontrol.php\">Geri</a>";?>