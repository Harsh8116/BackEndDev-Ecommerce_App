<html>
<head>
    <title>First</title>
</head>    
<body>
<P>PHP Block Started</P>
<?php

echo "Hello World!";
echo "<br>";
$var1="This is my first variable";
echo $var1;
$var2="This is my second variable";
echo $var1 . $var2;
echo "<br>"; 
//array
$array=array("Harsh","Patel",20190368);
echo $array[1];

?>
<p>PHP block END</p>


<!-- DISPLAY 1-2-3-4-5-6-7-8-9-10 on one line -->

<?php
    for($i=1; $i<=10; $i++)
    {
        if($i < 10)
        {
            echo "$i-";
        }
        else
        {
            echo "$i";
        }
    }
?>
<br>

<!-- script using a for loop to add all integers between 0-30 and display in total  -->

<?php
?>

<br>

<!-- Star Pattern -->

<?php
for($i=1;$i<=5;$i++) 
{
    for($j=1;$j<=$i;$j++) 
    {
        echo "*";
    }
    echo "</br>";
   }
?>
<br>

<!-- Write a php script to extract the file name (php.ini) from the string path.
    
    A) C:\xampp\php\php.ini
    B) substr($string,pos) and strrchr($haystack,$needle)-lastoccurence of needle 

 -->

<?php

$path= 'C:\xampp\php\php.ini';
echo  substr(strrchr($path,"\\"),1);

?>
<br>


<?php
$product=array(
    array(
            'pid'=>1,
            'pname'=>'pen',
            'price'=>'$10',
            'address'=>array
            (
                'street'=>'saint marc',
                'city'=>'montreal',
                'country'=>'canada'
            )
        ),
        
        array(
            'pid'=>2,
            'pname'=>'pencil',
            'price'=>'$5'
        )
    );
print_r ($product[0]['address']['city']);

?>

<?php

$color=array('red','blue','green','yellow');
foreach($color as $color)
{
   echo "<p style='background: $color;'>hello</p>";
}


?>
 <br>
<!-- Bubble sort -->
<!-- Assending Order -->
<!-- 
<?php
    $value=array(90,50,80,60,30,20,10,70,40);

    for($i=0;$i<count($value)-1;$i++)
    {
        for($j=$i+1;$j<count($value);$j++)
        {
            if($value[$i]>$value[$j])
            {
                $temp=$value;
            }
        }
    }
?> -->

<!-- Dissending Order -->



<!-- Form -->


<form action="first.php" method="get">
    Name: <input type="text" name="name"><br>   
    E-mail: <input type="text" name="email"><br>
    
<input type="submit">
</form>
<?php

$a=40;
$b=$a++;
$c=$a--;
$d=++$b;
#$e=--$b;

echo $a." ".$b." ".$c." ".$d." ".$e;

?>
<?php
         $i = 10;
         
         do {
            $i++;
         }
         
         while( $i < 10 );
         echo ("Loop stopped at i = $i" );
      ?>
      <?php

$result=true;

if(!$result){
   echo "true statement";
}else{
   echo "false statement";
}

?>
<?php

$grade= 89;

echo "My grade is $grade"; //statement 1

echo 'My grade is $grade'; //statement 2

?>

<?php

echo preg_match("/\S/","   ");

?>
<?php

echo preg_match("/o$/","Hello")

?>
</body>
</html>
