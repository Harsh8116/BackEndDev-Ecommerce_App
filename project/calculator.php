<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" attribute="post" action="disp_form.php">
   
    <div>First Value:</div><br/>
    <input type="text" id="first" name="first"></p>
    <div>>Second Value:</div><br/>

    <input type="text" id="second" name="second"></p>
    <input type="radio" name="group1" id="add" value="add" checked="true"><p>+</p><br/>
    <input type="radio" name="group1" id="subtract" value="subtract"><p>-</p><br/>
    <input type="radio" name="group1" id="times" value="times"><p>x</p><br/>
    <input type="radio" name="group1" id="divide" value="divide"><p>/</p><br/>
    <div></div>
<button type="submit" name="answer" id="answer" value="answer">Calculate</button>
</form>
</body>
</html>