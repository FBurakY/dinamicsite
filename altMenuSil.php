<?php
$servername = "localhost";
$username = "root";
$password = "20162024";
$dbname = "database";

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	$deger=$_REQUEST["parametre"];
	
    $sql = "DELETE FROM `database`.`altmenu` WHERE `altMenuID`='$deger'";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Silme Başarılı ...";	
	echo "<a href=\"altMenuDelete.php\">Geri</a>";
    }	
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
	$conn = null;
	
?>