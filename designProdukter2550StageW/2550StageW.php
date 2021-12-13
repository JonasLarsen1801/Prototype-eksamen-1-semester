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
    <select name="kurv" for="produkt" action="confirmation.php">
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
            <?php foreach(hentFraFil() as $i => $kurv) { ?>
                <li>
                    <?php echo $kurv;?>
                    <a href="?i=<?php echo $i; ?>">Slet</a>
                </li>
            <?php } ?>
        </ul>
    <div>
        <h2>Indhold af din kurv</h2>
            <?php foreach(hentFraFil() as $i => $kurv) { ?>
                <li>
                    <?php echo $kurv;?>
                    <a href="?i=<?php echo $i; ?>"></a>
                </li>
            <?php } ?>
            <H4>
                <form method="post">
                    <input type="submit" name="bekræftKøb"
                            class="button" value="Bekræft køb" />
                </form>
                <?php
                    if(array_key_exists('bekræftKøb', $_POST)) {
                        bekræftKøb();
                    }

                    function bekræftKøb() {
                        echo "Tak for dit køb af 2550 Stage W. Vi sender varen inden for 3-5 hverdage. Den endelige pris blev: 4.370 Kr.";
                    }
                ?>
            </H4>
    </div>
</body>
</html> 