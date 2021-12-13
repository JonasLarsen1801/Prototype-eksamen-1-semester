<?php
include("./functions.php");
include("./controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tilpasning af 2550 Stage W</title>
</head>
<body>
    <form method="post">
    <select name="note" for="produkt" action="confirmation.php">
        <option value="Vælg" disable selected>Vælg</option>
        <option value="Munin 6360">Munin 6360</option>
        <option value="Nobel 8900">Nobel 8900</option>
        <option value="Gyngestol 183">Gyngestol 183</option>
        </select>
            <button type="submit">Læg i kurv</button>
    </form>

        <ul>
            <?php foreach(getFromFile() as $i => $note) { ?>
                <li>
                    <?php echo $note;?>
                    <a href="?i=<?php echo $i; ?>">Slet</a>
                </li>
            <?php } ?>
        </ul>
</body>
</html>
