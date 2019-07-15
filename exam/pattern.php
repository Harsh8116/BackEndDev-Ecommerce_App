<?php 
    if(isset($_POST['btnGo'])===FALSE){
        header("location:index.php");
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $N = $_POST['txtNumber'];
            $Num=0;
            for($i=$N;$i>=1;$i--)
            {
                for($j=1;$j<=$i;$j++)
                {
                    if($N%2==0)
                    {
                        if($i%2==0)
                        {
                            $Num = $Num + 2;
                            echo $Num. " ";
                        }
                        else
                        {
                            echo "* ";
                        }
                    }
                    else 
                    {
                        if($i%2!=0){
                            $Num = $Num + 2;
                            echo $Num. " ";
                        }
                        else {
                            echo "* ";
                        }
                    }
                }
                echo "<br>";
            }
        ?>
    </body>
</html>