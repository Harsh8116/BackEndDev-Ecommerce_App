<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calc</title>
</head>
<body>
<?php

    class calculator{
        var $no1;
        var $no2;
        var $result;
        var $operation;
    }
    #assign initial value
    function __construct($no1,$no2,$operation)
    {
        $this->no1 = $no1;
        $this->no2 = $no2;
        $this->operation = $operation;
    }
    function calculate()
    {
        switch ($this->cal)
        {
            case 'add':
            $this->$result = $this->num1 + $this->num2;
                break;
            case 'sub':
            $this->$result = $this->num1 - $this->num2;
                break;
            case 'mul':
            $this->$result = $this->num1 * $this->num2;
                break;
            case 'div':
            $this->$result = $this->num1 / $this->num2;
                break;
            default:
                $result = "Error";
                break;
        }
          return $result;
        
    }

    if(isset($_GET['student']))
    {
        #create a instance var / calc obj.
        #call the calculate function
        $calculator= new calculate($no1, $no2, $operation)
        $calculator=new calculate();
        echo "The Result is $calculator->$result";
    }
?>

    <form action="oops.php" method="get">
        <lable>Input 1:</lable><Input type="text" name="no1" value=""><br>
        <lable>Input 2:</lable><Input type="text" name="no2" value=""><br>
        <Input type="radio" name="operation" value="add">ADDITION<br>
        <Input type="radio" name="operation" value="sub">SUBTRACT<br>
        <Input type="radio" name="operation" value="mul">MULTIPLY<br>
        <Input type="radio" name="operation" value="div">DIVISION<br>
        <input type="submit" name="submit" value="CALCULATE">
    </form>
</body>
</html>