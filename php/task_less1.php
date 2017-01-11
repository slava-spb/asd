<?php
  $time = date("i");
  $a = $time%5;
  echo $a <= 2 ? 'зелёный' . "\n" : 'Красный' . "\n";


    $SuchSot = 10;
    $SuchMetrKv = $SuchSot*100;
    echo $SuchMetrKv . "\n";
    $ogorod = 15*25;
    echo $ogorod ."\n";
    $b=$SuchMetrKv%$ogorod;
    echo $b;

