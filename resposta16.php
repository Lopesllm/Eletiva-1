<?php
    $valorC = $_POST["valorC"];
    $valorJ = $_POST["valorJ"];
    $valorP = $_POST["valorP"];
    $valorJS = $valorC * ($valorJ/100) * $valorP;
    echo "O valor ao final do período é R$ $valorJS .";