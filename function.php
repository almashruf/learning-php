<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function say(){
            return "hello everyone";
        }

        echo say();


        define ("PI", 3.14);
        define ("Name", "tonoy");
        echo "<br>";
        echo "<br>";
        echo "<br>";


        for($i=1; $i<=10; $i++){
            echo "Hi there!" .$i ."<br>";
        }

        $fruits = ["apple", "banana", "orange"];

        foreach($fruits as $fruit){
            echo "this is a " . $fruit . "<br>";
        }
    ?>
</body>
</html>