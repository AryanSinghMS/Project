<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php new Document</title>
    
</head>
<body>
    <br>
    <?php

    $x=23; $y=43;
    print("SUM of".$x."And".$y."is".$x+$y);
    ?>
    <h1>This is display as js code inner html</h1>
    <p id="pen">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet incidunt vitae maiores
         libero veniam voluptatum ullam possimus laudantium itaque vel est asperiores voluptas, 
         neque corporis facere! Odit, deleniti! Dicta, aperiam?</p>
         <script>
        var x=212,y=234;
        var z=x+y;
        document.write("Sum of"+x+"&"+y+"is"+z);
        document.getElementById("pen").innerHTML="son of abish"
    </script>
</body>
</html>