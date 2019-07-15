Index.php

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="Pattern.php">
            <table>
                <tr>
                    <td>
                        Enter Number :-
                    </td>
                    <td>
                        <input type="number" required pattern="^[0-9]*$" title="Please Enter Valid Number." name="txtNumber" />
                    </td>
                    <td>
                        <input type="submit" name="btnGo" value="Submit" />
                    </td>
                </tr>
            </table>
        </form>
        <?php
        ?>
    </body>
</html>


Pattern.php



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
            for($i=$N;$i>=1;$i--){
                for($j=1;$j<=$i;$j++){
                    if($i%2!=0){
                        $Num = $Num + 2;
                        echo $Num. " ";
                    }
                    else {
                        echo "* ";
                    }
                }
                echo "<br>";
            }
        ?>
    </body>
</html>
