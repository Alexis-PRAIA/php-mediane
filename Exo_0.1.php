<?php
require "statistique.php";

    $note_maths = 15;
    $note_francais = 12;
    $note_histoire = 9;

    $tab = array($note_maths, $note_francais, $note_histoire);

    echo 'La moyenne est de '. moyenne($tab) .'/ 20.';
    ?>