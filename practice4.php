<?php
    $i = 12;
    print " \t|\t";
    for ($j = 1; $j < $i; $j++) {
        print $j . "\t|\t";
    }
    print "\n";
    for ($j = 1; $j <= $i; $j++) {
        for ($k = 1; $k <= $i; $k++) {
            print $k * $j . "\t|\t";
        }
        print "\n";
    }