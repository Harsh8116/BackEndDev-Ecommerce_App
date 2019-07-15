<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form name="Lab1" id="form1" method="post">

        <label for="input">Insert the value:</label>
        <input type="text" name="input1"  >
        <input type="submit" value="Submit" name="submit"><br><br><br>

    
   

    <?php
    $n=$_POST['input1'];
    $num=0;
        for($i=$n;$i>=1;$i--)
        {
            for($j=1;$j<=$i;$j++)
            {
                if($i%2!=0)
                {
                    $num=$num+2;
                    echo $num." ";
                }
                else
                {
                    echo " * ";
                }
            }
            echo "<br>";
        }
    ?>


    </form>

    
</body>
</html>