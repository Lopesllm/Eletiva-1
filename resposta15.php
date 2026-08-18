<?php
    $valorP = $_POST["valorP"];
    $valorD = $_POST["valorD"];
    $valorF = $valorP - ($valorP * ($valorD/100));
    echo "O valor com desconto é R$ $valorF .";