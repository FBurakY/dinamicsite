<?php
$servername = "localhost";
$username = "root";
$password = "20162024";
$dbname = "database";

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$AnaMenuID     = $_POST['anaMenuID'];
	$Icerik 	   = $_POST['icerik'];
	$IcerikLink    = $_POST['icerik_link'];	
	
	$sql = "INSERT INTO `database`.`altmenu` (`anaMenuID`, `icerik`, `icerik-link`) VALUES ('$AnaMenuID', '$Icerik', '$IcerikLink')";
    //$sql = "INSERT INTO `database`.`altmenu` (`anaMenuID`, `icerik`, `iceril_link`) VALUES ('$AnaMenuID','$Icerik', $IcerikLink')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Yeni Kayıt Başarılı ...";	
	echo "<a href=\"altMenuAdmin.php\">Geri</a>";
    }	
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
	$conn = null;
	
?>