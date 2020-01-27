<?php

$tab=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,
21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,
40,41,42,43,44,45,46,47,48,49);
$tirage=array();
$verif=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
for($i=0;$i<6;$i++)
{
    $x=rand(0,48);
    if($verif[$x]==0){
        $tirage[$i]=$tab[$x];
        $verif[$x] = 1;
    }
    elseif($verif[$x]==1){
        while($verif[$x]==1){
            $x=rand(0,48);
        }
        $tirage[$i]=$tab[$x];
        $verif[$x] = 1;
    }
}
echo('<center><h1>Tirage gagnant</h1><table border="1px"><tr>');
foreach ($tirage as $key) {
    echo('<td><h1>'.$key.'</h1></td>');
}
echo('</tr></table></center>');