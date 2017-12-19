<?php
$servername = "localhost";
$username = "root";
$password = "20162024";
$dbname = "database";

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$AltMenuID     = $_POST['altMenuID'];
	$KonuBaslik = $_POST['konuBasligi'];
	$KonuAciklamasi = $_POST['konuAciklamasi'];	
	
	$sql ="INSERT INTO `database`.`yanaltmenu` (`altMenuID`, `konuBaslik`, `Aciklama`) VALUES ('$AltMenuID', '$KonuBaslik', '$KonuAciklamasi')";
   
    $conn->exec($sql);
    echo "Yeni Kayıt Başarılı ...";	
	echo "<a href=\"yanAltMenuAdmin.php\">Geri</a>";
    }	
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
	$conn = null;
	
?>