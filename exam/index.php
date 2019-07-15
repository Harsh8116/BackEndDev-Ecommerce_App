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
                        Insert the value:
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