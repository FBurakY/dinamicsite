
<?php
$servername = "localhost";
$username = "root";
$password = "20162024";
$dbname = "database";

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$Menu     = $_POST['menu'];
	$MenuLink = $_POST['menu_link'];
	
    $sql = "INSERT INTO `database`.`anamenu` (`menu`, `menu_link`) VALUES ('$Menu', '$MenuLink')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Yeni Kayıt Başarılı ...";	
	echo "<a href=\"anaMenuAdmin.php\">Geri</a>";
    }	
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
	$conn = null;
	
?>