<?php
if(isset($_POST["submit"])){
  $academic_year=$_POST["academic_year"];
    $sem=$_POST["sem"];
    $exam_type=$_POST["exam_type"];


  }
session_start();

 $name=$_SESSION["logname"];
 $_SESSION["logname"]=$name;

include("db.php"); 
$sql= "SELECT name,branch,regis_no  FROM student WHERE seat_no='$name'";

$result=mysqli_query($conn,$sql) or die(mysqli_connect_error());
while ($row=mysqli_fetch_array($result))
    {
    $r=$row[0];
    $r1=$row[1];
    $r2=$row[2];
 

  }
$x=0;
$x1=0;
$us=0;
/*$a1=0;
$a=0;
$i=0;
$result1=mysqli_query($conn,$sql1) or die(mysqli_connect_error());
while ($row=mysqli_fetch_array($result1))
    {
    $s=$row[0];
    $s1=$row[1];
    $s2=$row[2];
    $s3=$row[3];
     for ($i=0; $i < 2; $i++) { 
  if($row[$i] > "-1")
   $a=$row[$i]+$a;
}
  for ($i=2; $i < 4; $i++) { 
  if($row[$i] > "-1")
   $a1=$row[$i]+$a1;
}
 }
 $a=$a/2;
  $a1=$a1/2;

*/


mysqli_close($conn);

?>









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/HeaderSsc.dwt" codeOutsideHTMLIsLocked="false" --><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="refresh">
<meta http-equiv="expires" content="-1">
<!-- InstanceBeginEditable name="doctitle" -->
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" --><title>Marksheet</title>
<!-- InstanceEndEditable -->
<link href="mahSscresult13.asp_files/style.css" rel="stylesheet" type="text/css">
<style>
  
#rcorners2 {
    border-radius: 20px;
    border: 6px solid #ad6026;
    padding: 10px; 
    width: 50%;
    height: 70%;  
}
</style>
</head>
<body><a href="mrk_back.html">back page</a>
<table id="rcorners2" align="center" border="8" bordercolor="#ad6026" cellpadding="0" cellspacing="0" width="700">
<tbody><tr><td>
<table cellpadding="0" cellspacing="0" width="650"">
<tbody><tr align="left">
          <td bgcolor="#FFFFFF" width="42"><span class="TAB"><a href="http://aiktcresults"> 
            <input name="Print2" value="Print" onclick="javascript:window.print();return false" class="dontprintme" type="button">
            </a></span></td></tr>
            <tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="logo.jpg" width="170"></td>
<td><img src="uom.png" width="80%">
			  <h3 align="center">
              ANJUMAN ISLAM'S  <br>
              KALSEKAR TECHNICAL CAMPUS, NEW PANVEL<br>
              SCHOOL OF ENGINEERING &amp; TCHNOLOGY
            </h3>
            <p align="center">Approved by All India Council for Technical Education (A.I.C.T.E.),<br>
            Recognized by Directorate of Technical Education (D.T.E.), Government of Maharashtra &amp; Affiliated to University of Mumbai.</p>
          </td></tr>
</tbody></table>

<!-- InstanceBeginEditable name="EditRegion3" -->

     <center>
   <hr width="95%" color="#ad6026">
    <h2><font color="#ad6026">GRADE CARD</font></h2>
   <p align="left">&nbsp;&nbsp;&nbsp;
NAME         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo "$r";?><br>&nbsp;&nbsp;&nbsp;
EXAMINATION  &nbsp;&nbsp; : <?php echo "SEMESTER-"."$sem";?><br>&nbsp;&nbsp;&nbsp;
BRANCH      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : <?php echo "$r1";?><BR>&nbsp;&nbsp;&nbsp;
HELD IN     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : <?php echo "$academic_year"."($exam_type)";?><BR>&nbsp;&nbsp;&nbsp;
SEAT NUMBER &nbsp;&nbsp;&nbsp;  :<?php  echo "$name";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REGISTRATION N0.&nbsp;&nbsp;:<?php echo "$r2";?>
</p>
      <table align="center" border="1" cellpadding="0" cellspacing="0" width="95%">
        <tbody>
        <tr>
          <td rowspan="2" align="center">COURSE CODE</td>
          <td rowspan="2" align="center">COURSE TITLE</td>
          <td rowspan="2" align="center">COURSE CREDIT</td>
          <td colspan="3" align="center">GRADE</td>
          <td rowspan="2" align="center">CREDIT EARNED</td>      
          <td rowspan="2" align="center">GRADE POINTS</td>     
          <td rowspan="2" align="center">CxGP</td>
        </tr>
        <tr>
  <td>ESE/PR/OR</td>
  <td>IA/TW</td>
  <td>OVERALL </td>
        </tr>
		

       <tr class="usertext2"> <?php
       include("db.php"); 
       $sql1= "SELECT code,subjects.name,external,practical,internal,term_work from subjects inner join marks where subjects.sem=$sem and subjects.name=marks.subject and marks.no='$name'";

  $result2=mysqli_query($conn,$sql1) or die(mysqli_connect_error());
  
while ($ro=mysqli_fetch_array($result2))
    {
    $t=$ro[0]; // ruko boss
    $t1=$ro[1];
    $t2=$ro[2];
    $t3=$ro[3];
     $t4=$ro[4];
      $t5=$ro[5];
  ?>
          <td><?php echo $t;?></td>
          <td><?php echo $t1;?></td>
          <td>4<BR>1</td>
          <td>
           <?php 
    
          $ex=calculateGradeEse($t2); // boss ye function ka code kahanh  ahaai batA? ?Rha hy
              ?>
            <br><?php 
          $pr=cal25($t3);
    ?></td>
          <td> <?php
          $in=cal20($t4);
    ?> <br><?php 
          $tm=cal25($t5);
    ?></td>
          <td><?php 
             
          if ($ex==-1 && $in==-1) {
            $e='--';
            echo "--";
          }
          elseif($ex==-1 || $in==-1)
          {
            $o=($ex+$in+1);
                $e=overall($o);
                 
          }
          elseif($ex<32 || $in<8){
            $e='F';
            echo 'F';
          }

          else{
          $o=($ex+$in)/2;
                $e=overall($o);
                
                  }

                  if($e=='F')
                    $us=$us+1;

                  
            
          ?>
          <br>
          <?php 
          


          if ($pr==-1 && $tm==-1) {
            $p='--';
            echo "--";
          }
          elseif($pr==-1 || $tm==-1)
          {
            $o=($pr+$tm+1);
                $p=overall20($o);
                 
          }
          elseif($pr<11 || $tm<11){
            $e='F';
            echo 'F';
          }
          else{
          $o=($pr+$tm)/2;
                $p=overall20($o);
               
                  }

                  if($p=='F')
                    $us=$us+1;
                  
               /* overall20($q);*/
              


          ?></td>
          <td>4<br>1</td>
          <td><?php $gr=grade($e);?><br><?php $gr1=grade($p);?></td>
          <td><?php 
          if($gr!='--'){$c=4*$gr;
            $x=$x+$c;
          echo $c;}?><br><?php if($gr1!='--'){ $c1=1*$gr1;
            $x1=$x1+$c1;
          echo $c1;}?></td>
     
        </tr>
        <?php }?>
		   
        <!--<tr class="usertext2">
          <td><?php echo "$u2"?></td>
          <td><?php echo "$u3"?></td>
          <td>4<BR>1</td>
          <td><?php 
    calculateGradeEse($t4);
    ?>
            <br><?php 
          cal20($t5);
    ?></td>
          <td><?php
          cal20($t6);
    ?> <br><?php 
         cal20($t7);
    ?></td>
          <td></td>
          <td></td>
          <td></td>
          <td><br></td>
        </tr>
        <tr class="usertext2">
          <td><?php echo "$u4"?></td>
          <td><?php echo "$u5"?></td>
          <td>4<BR>1</td>
          <td><?php 
    
          calculateGradeEse($t8);
    ?>
            <br><?php 
          cal20($t9);
    ?></td>
          <td><?php
          cal20($t10);
    ?> <br><?php 
          cal20($t11);
    ?></td>
          <td></td>
          <td></td>
          <td></td>
          <td><br></td>
        </tr>
        <tr class="usertext2">
          <td><?php echo "$u6"?></td>
          <td><?php echo "$u7"?></td>
          <td>4<BR>1</td>
          <td><?php 
    
          calculateGradeEse($t12);
    ?>
            <br><?php 
          cal20($t13);
    ?></td>
          <td><?php
          cal20($t14);
    ?> <br><?php 
          cal20($t15);
    ?></td>
          <td></td>
          <td></td>
          <td></td>
          <td><br></td>
        </tr>
        
        <tr class="usertext2">
          <td><?php echo "$u8"?></td>
          <td><?php echo "$u9"?></td>
          <td>2</td>
          <td><?php 
    calculateGradeEse($t16);
    ?>
            <br><?php 
          cal20($t17);
    ?></td>
          <td><?php
          cal20($t18);
    
    ?> <br><?php 
         cal20($t19);
  ?></td>
          <td></td>
          <td></td>
          <td></td>
          <td><br></td>
        </tr>
        
        <tr class="usertext2">
          <td><?php echo "$u10"?></td>
          <td>B<?php echo "$u11"?>CE</td>
          <td>2</td>
          <td><?php 
    calculateGradeEse($t20);
    ?>
            <br><?php 
          cal20($t21);
    ?></td>
          <td><?php
cal20($t22);
    ?> <br><?php 
          cal20($t23);?></td>
          <td></td>
          <td></td>
          <td></td>
          <td><br></td>
        </tr>-->
        <tr> 
          <td></td>
          <td align="center">Total</td>
          <td>30</td>
          <td></td>
          <td></td>
          <td></td>
          <td>30</td>
          <td></td>
          <td><?php $gt=$x+$x1;
                 echo $gt;
          ?></td>
        </tr>
        
     
      </tbody>
      </table>
      <table width="95%">
        <tbody><tr> 
          <td><br>
            REMARK :&nbsp;&nbsp;<?php if($us > 0)
            echo "UNSUCCESSFUL";
            else
              echo "SUCCESSFUL";?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SGPI:&nbsp;&nbsp;<?php echo $gt/30;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CGPI: --<br><br>
            RESULT DECLARED ON: <br><br><br><br><br><br>
            <p>PREPARED BY:&nbsp;&nbsp;&nbsp;VERIFIED BY:&nbsp;&nbsp;&nbsp;CHECKED BY:&nbsp;&nbsp;&nbsp;EXAMCELL INCHARGE:&nbsp;&nbsp;&nbsp;PRINCIPAL:</p></td>
        </tr>
      </tbody></table>
      
    </center>
<!-- InstanceEndEditable --> <br>
<table align="center" border="0" width="700">
  <tbody><tr class="usertext1">
          <td class="centerText" background="mahSscresult13.asp_files/back2.jpg" height="62">
           <p>&nbsp;&nbsp;F-Head of Failure, --Not Applicable, Ab-Absent, / Female, SGPI= &sum;(C X GP)/&sum;(C), ~-Dyslexia Benefit</p>
          </td>
</tr>
</tbody></table>
</td>
</tr></tbody></table>


</body><!-- InstanceEnd --></html>

<?php    function calculateGradeEse($num){
                  global $grade;
                  switch ($num)
                {
                  case $num == -1:
                  
                  $grade = '--'; 
                  break;

                case $num < 32: 
                  $grade = 'F';
                  break;
                case $num <= 35: 
                  
                  $grade = 'P';
                  break;
                case $num <= 40:
                  
                  $grade = 'E';
                  break;        #bro ye right hai sab chale pehle ye query k baad se masla hua
                case $num <= 45:
                  
                  $grade = 'D';
                  break;
                case $num <= 50:
                  
                  $grade = 'C';
                  break;
                case $num <= 55:
                  
                  $grade = 'B';
                  break;
                case $num <= 60:
                  
                  $grade = 'A';
                  break;
                case $num >60:
                  
                  $grade = 'O';
                  break;
                  
                }

          echo $grade;
          return $num;      
        } 

function cal20($s)
{$a;
if($s >="18")
  {$a='O';
    echo "O";}
    elseif ($s >= "16" && $s <= "18") {
      $a='A';
    echo "A";
    }
elseif ($s >="15" && $s <= "17") {
  $a='B';
    echo "B";
    }
    elseif ($s >="14" && $s < "16") {
      $a='C';
    echo "C";
    }
    elseif ($s >= "13" && $s < "15") {
      $a='B';
    echo "B";
    }
    elseif ($s >= "12" && $s < "14") {
    $a='E';
    echo "E";
    }
     elseif ($s >= "8" && $s < "12") {
      $a='P';
    echo "P";
    }
    elseif ($s< "8" && $s>"-1") {

    echo "F";
    }
    elseif($s == "-1") 
      echo "--";
  return $s;

}
function cal25($s)
{$a;
if($s >="23")
  {$a='O';
    echo "O";}
    elseif ($s >= "21" && $s <= "22") {
      $a='A';
    echo "A";
    }
elseif ($s >="19" && $s <= "20") {
  $a='B';
    echo "B";
    }
    elseif ($s >="17" && $s <="18") {
      $a='C';
    echo "C";
    }
    elseif ($s >= "15" && $s <= "16") {
      $a='B';
    echo "B";
    }
    elseif ($s >= "13" && $s <="14") {
    $a='E';
    echo "E";
    }
     elseif ($s >= "11" && $s <= "12") {
      $a='P';
    echo "P";
    }
    elseif ($s< "11" && $s>"-1") {

    echo "F";
    }
    elseif($s == "-1") 
      echo "--";
  return $s;

}
function overall($a)
{$S;

          if($a >="45"){
            $S='O';
    echo "O";}
    elseif ($a >= "40" && $a <= "44") {
       $S='A';
    echo "A";
    }
elseif ($a >= "35" && $a < "40") {
   $S='B';
    echo "B";
    }
    elseif ($a >="32" && $a <"35") {
       $S='C';
    echo "C";
    }
    elseif ($a >= "28" && $a < "32") {
       $S='D';
    echo "D";}
    elseif ($a >= "20" && $a < "28") {
       $S='P';
    echo "P";
    }
    elseif ($a < "20" ) {
       $S='F';
    echo "F";
    }
    elseif($a == "-1") {
       $S='--';
      echo "--";}
      return $S;
}
function overall20($a)
{$S;

          if($a >="21"){
            $S='O';
    echo "O";}
    elseif ($a >= "17" && $a <= "20") {
       $S='A';
    echo "A";
    }
elseif ($a >= "14" && $a <="16") {
   $S='B';
    echo "B";
    }
    elseif ($a >="11" && $a <"13") {
       $S='C';
    echo "C";
    }
    elseif ($a >= "11") {
       $S='P';
    echo "P";
    }
    elseif ($a <= "10" ) {
       $S='F';
    echo "F";
    }
    elseif($a == "-1") 
      {
       $S='--';
            echo "--";}
            return $S;
}
function grade($g)
{

  if($g=='--')
    {$g='--';
    echo '--';}
  elseif($g=='O'){
    $g=10;
    echo '10';
}
  elseif($g=='A')
  {$g=9;
    echo '9';
}
  elseif($g=='B')
    {$g=8;
        echo '8';
}
  elseif($g=='C')
    {$g=7;
    echo '7';}
  elseif($g=='D')
{$g=6;
    echo '6';}
  elseif($g=='E'){
    $g=5;
    echo '5';}
  elseif($g=='P'){
    $g=4;
    echo '4';}
  elseif($g=='F'){
    $g=0;
    echo '0';}
    return $g;
}
?>