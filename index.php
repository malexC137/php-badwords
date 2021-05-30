 <?php 
// http://localhost:8888/Boolean/php-badwords/index.php?badword=mona
$badword = $_GET["badword"];

$badwordReplace = "***";

$string = "Ma chi è chel " . $badword . " che-che-che sbatte la porta e che chiude urlando?!? ";


echo $string;

echo "<br>";
echo "<br>";
echo "<h1>Correzione</h1>";
echo "<br>";
echo "<br>";


echo str_replace($badword, $badwordReplace, $string)

?>