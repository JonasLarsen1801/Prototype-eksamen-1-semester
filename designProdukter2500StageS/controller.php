<?php
if(isset($_POST["kurv"])) {
    gem();
}

if(isset($_GET['i'])) {
    sletValgtProdukt($_GET['i']);
}
?>