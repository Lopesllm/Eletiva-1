<?php
    $valorC = $_POST["valorC"];
    $valorJ = $_POST["valorJ"];
    $valorP = $_POST["valorP"];
    $valorJC = $valorC * ((1+ ($valorJ/100)) ** $valorP);
    echo "O valor ao final do período é R$ $valorJC .";