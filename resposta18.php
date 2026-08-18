<?php
    $valorD = $_POST["valorD"];
    $valorH = $valorD * 24;
    $valorM = $valorH * 60;
    $valorS = $valorM * 60;
    echo "O valor desses dias em horas: $valorH .";
    echo "O valor desses dias em minutos: $valorM .";
    echo "O valor desses dias em segundos: $valorS .";