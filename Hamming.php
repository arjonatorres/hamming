<?php

/*
 * Esto es sólo un ESQUELETO para el ejercicio de la "distancia Hamming".
 */

function distancia(string $a, string $b): ?int
{
    if (($lon = mb_strlen($a)) !== mb_strlen($b)) {
        return null;
    }
    $res = 0;
    for ($i = 0; $i < $lon; $i++) {
        if(mb_substr($a, $i, 1) !== mb_substr($b, $i, 1)) {
            $res++;
        }
    }
    return $res;
}

echo distancia('GCA', 'GBA');
