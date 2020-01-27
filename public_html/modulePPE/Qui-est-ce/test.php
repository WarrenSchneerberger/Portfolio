<?php
$personnage = array(array(0,0,0,0,0,0,0), array(0,0,0,1,1,1,1), array(0,0,1,0,0,1,1), array(0,0,1,1,1,0,0),array(0,1,0,0,1,0,1),array(0,1,0,1,0,1,0),array(0,1,1,0,1,1,0),array(0,1,1,1,0,0,1),array(1,0,0,0,1,1,0),array(1,0,0,1,0,0,1),array(1,0,1,0,1,0,1),array(1,0,1,1,0,1,0),array(1,1,0,0,0,1,1),array(1,1,0,1,1,0,0),array(1,1,1,0,0,0,0),array(1,1,1,1,1,1,1),);
$P= array($_POST['Q1'],$_POST['Q2'],$_POST['Q3'],$_POST['Q4'],$_POST['Q5'],$_POST['Q6'],$_POST['Q7']);
$S1=($_POST['Q1']+$_POST['Q3']+$_POST['Q5']+$_POST['Q7'])%2;
$S2=($_POST['Q2']+$_POST['Q3']+$_POST['Q5']+$_POST['Q6'])%2;
$S3=($_POST['Q4']+$_POST['Q5']+$_POST['Q6']+$_POST['Q7'])%2;
$aux=($S1*2)+($S2*4)+($S3);
/*echo $S1." ".$S2." ".$S3."<BR>";*/
switch ($aux){
case 2:
$e=1; break;
case 4:
$e=2; break;
case 6:
$e=3; break;
case 1:
$e=4; break;
case 7:
$e=5; break;
case 5:
$e=6; break;
case 3:
$e=7; break;
}
if(isset($e)){
    echo "Vous avez menti a la question ".$e."<BR>";
    $P[$e-1]=($P[$e-1]+1)%2;
}
else{
    echo "vous avez pas menti<BR>";
}


/*echo $P[3]."<BR>";*/
$p=($P[0]*1000000)+($P[1]*100000)+($P[2]*10000)+($P[3]*1000)+($P[4]*100)+($P[5]*10)+$P[6];
/*echo $p."<BR>";*/
if($p==0){
    echo '<img src="./jpg/0.jpg" />';
}
if($p==1111){
    echo '<img src="./jpg/1.jpg" />';
}
if($p==10011){
    echo '<img src="./jpg/2.jpg" />';
}
if($p==11100){
    echo '<img src="./jpg/3.jpg" />';
}
if($p==100101){
    echo '<img src="./jpg/4.jpg" />';
}
if($p==101010){
    echo '<img src="./jpg/5.jpg" />';
}
if($p==110110){
    echo '<img src="./jpg/6.jpg" />';
}
if($p==111001){
    echo '<img src="./jpg/7.jpg" />';
}
if($p==1000110){
    echo '<img src="./jpg/8.jpg" />';
}
if($p==1001001){
    echo '<img src="./jpg/9.jpg" />';
}
if($p==1010101){
    echo '<img src="./jpg/10.jpg" />';
}
if($p==1011010){
    echo '<img src="./jpg/11.jpg" />';
}
if($p==1100011){
    echo '<img src="./jpg/12.jpg" />';
}
if($p==1101100){
    echo '<img src="./jpg/13.jpg" />';
}
if($p==1110000){
    echo '<img src="./jpg/14.jpg" />';
}
if($p==1111111){
    echo '<img src="./jpg/15.jpg" />';
}