<?php
echo "Le staple mucho?";
$staple = readline();
if (is_numeric($staple)) {
    $people = array(
        "yeet",
        "*",
        "**",
        "***",
        "****",
        "*****",
        "******",
        "*******",
        "********",
        "*********",
        "**********",
        "***********",
        "************",
        "*************",
        "**************",
        "***************",
        "****************",
        "*****************",
        "******************",
        "*******************",
        "********************"
    );

    for ($i = 1; $i <= $staple; $i++) {
        echo $people[$i]. PHP_EOL;
    }
}
else
{
    echo "Feck you reetkever", exit() ;
}