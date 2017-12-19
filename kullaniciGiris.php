<html>  
<style>
div {
    border: 1px solid #ecf0f1;
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
input[type=password] {
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
	<form action="giris.php" method="post">
		<div>			
			 Kullanıcı Adı    : <input type="text" name="user"><br>
			 Sifre            : <input type="password" name="pass"><br>				
			 Giris            :<input type="submit"></input>		
		</div>	
	</form>	
</body>
</html>
