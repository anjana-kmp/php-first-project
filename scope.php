<?php
echo "<h1>This is scope file</h1>";
echo "<a href='index.php'>Go to index</a>";
$samplevar = 10;
echo "<br><b>[outside]</b> samplevar is $samplevar";

function sumvars(){
    $a = 50;
    $b  = 175;
    $samplevar = $a+$b;
echo "<br><b>[inside function]</b> samplevar is added up to $samplevar";


}
sumvars();
echo "<br><b>[after functioncall]</b> samplevar which is outside is unchanged $samplevar";


?>

