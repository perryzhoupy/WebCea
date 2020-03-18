<?php 
$src_str = $_POST["CeaSrc"]; 
$len = strlen($src_str);
$src = str_split($src_str);
$HexTable = array();

$HexTable[0] = "0";
$HexTable[1] = "1";
$HexTable[2] = "2";
$HexTable[3] = "3";
$HexTable[4] = "4";
$HexTable[5] = "5";
$HexTable[6] = "6";
$HexTable[7] = "7";
$HexTable[8] = "8";
$HexTable[9] = "9";
$HexTable[10] = "a";
$HexTable[11] = "b";
$HexTable[12] = "c";
$HexTable[13] = "d";
$HexTable[14] = "e";
$HexTable[15] = "f";

if ($len % 2 == 1)
{
for ($i = 0 ; $i < $len - 1 ; $i = $i + 2) {
echo $HexTable[abs( ord($src[$i]) + ord($src[$i + 1]) ) % 16];
echo $HexTable[abs( ord($src[$i]) - ord($src[$i + 1]) ) % 16];	
}
echo $HexTable[ (abs ( abs (ord($src[$len - 1]) + ord($src[0]) ) + abs(ord($src[$len-1]) - ord($src[0]) ) ) / 2 ) % 16];
}
else 
{
for ($i = 0 ; $i < $len ; $i = $i + 2) {
echo $HexTable[abs( ord($src[$i]) + ord($src[$i + 1]) ) % 16];
echo $HexTable[abs( ord($src[$i]) - ord($src[$i + 1]) ) % 16];	
}
}
echo "<br /> <a href=\"index.html\">返回</a>";
?>

