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
    <H1>Tilpasning af 2550 Stage W</H1>
    <form method="post">
    <select name="note" for="produkt" action="confirmation.php">
        <option value="Intet valgt" disable selected>Tilpas her</option>
        <option value="Egetræ">Egetræ</option>
        <option value="Bøgetræ">Bøgetræ</option>
        <option value="Med polstering">Med polstering</option>
        <option value="Uden polstering">Uden polstering</option>
        <option value="Stof betræk">Stof betræk</option>
        <option value="Læder betræk">Læder betræk</option>
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

    <div>
        <h2>Indhold af din kurv</h2>
            <?php foreach(getFromFile() as $i => $note) { ?>
                <li>
                    <?php echo $note;?>
                    <a href="?i=<?php echo $i; ?>"></a>
                </li>
            <?php } ?>
            <button type="submit">bekræft køb</button>
            <h3><?php echo "Totalt pris: " + $stageW ?></h3>
    </div>

</body>
</html>
