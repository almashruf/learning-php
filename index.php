<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://0.0.0.0:5000/public/about.php">
</head>
<body>
    <?php
    $txt = "tonoy";
    //echo "my name is $txt!"

    //echo phpversion();

    $txt1 = "learn app";

    print "<h2>$txt1</h2>";

    $_SESSION["username"] = "tonoy";
    echo $_SESSION["username"];

    ?>

    <main>

        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname?</label>
            <label for="lastname">Lastname?</label>
            <input id="lastname type="text" name="lastname" placeholder="Lastname...">
            
            <label for="favouritepet">Favourites Pet?</label>
            <select id="favouritpet" name="favouritepet">
                <option value="none">None</option>
                <option value="dog">dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit">Submit</button>
        </form>

    </main>

<!-- <script src=""></script> -->
</body>
</html>