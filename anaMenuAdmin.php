<html>  
<style>
div {
    border: 2px solid black;
    background-color: #e74c3c;
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
	<h1>Ana Menü Admin Paneli Veri Tabanı Yönetim Sayfası</h1>	
	<form action="menuKaydet.php" method="post" class="MainMenu">
		<div id="mainMenu">			
			<h3>Ana Menu</h3>
			Menu	 : <input type="text" name="menu"><br>			
			Menu_Link: <input type="text" name="menu_link"><br>
			Kaydet      :<input type="submit"></input>					
		</div>
	</form>	
</body>
</html>
<?php echo "<a href=\"kontrol.php\">Geri</a>";?>