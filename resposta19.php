<?php
    $valorD = $_POST["valorD"];
    $valorT = $_POST["valorT"];
    $valorVM = $valorD / $valorT;
    echo "A velocidade média é $valorVM km/h.";