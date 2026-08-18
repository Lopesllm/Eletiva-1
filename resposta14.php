<?php
    $valorP = $_POST["valorP"];
    $valorA = $_POST["valorA"];
    $valorIMC = $valorP / ($valorA ** 2);
    echo "O valor do seu IMC é $valorIMC .";