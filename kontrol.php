<?php
include("baglan.php");
include("admin.php");

session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}
else{
echo "<br><a href=\"anaMenuAdmin.php\">Ana Menü Admin Sayfası :</a><br>";
echo "<br><a href=\"anaMenuDelete.php\">Ana Menu Admin Sayfası 'Delete':</a><br>";


echo "<br><a href=\"altMenuAdmin.php\">Alt Menu Admin Sayfası :</a><br>";
echo "<br><a href=\"altMenuDelete.php\">Alt Menu Admin Sayfası 'Delete':</a><br>";

echo "<br><a href=\"yanAltMenuAdmin.php\">Yan Alt Menu Admin Sayfası :</a><br>";
echo "<br><a href=\"yanAltMenuDelete.php\">Yan Alt Menu Admin Sayfası 'Delete':</a><br>";

echo "<br><a href=\"site.php\">Siteye Gir:</a><br>";

echo "<br><a href=\"logout.php\">Çıkış Yap</a>";
}
?>