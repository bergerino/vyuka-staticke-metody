<?php
    require_once('lesni-zver.php');

    $zvire1 = new LesniZver("medved", "Michal", "16");
    $zvire1->VypisZvire();
    $zvire2 = new LesniZver("jezevec", "Ondra", "3");
    $zvire2->VypisZvire();
    $zvire3 = new LesniZver("sojka", "Liza", "1");
    $zvire3->VypisZvire();

    echo "----------\n";

    LesniZver::prumernyVek();

    echo "----------\n";
?>