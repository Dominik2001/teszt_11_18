<?php
class Matek
{
    const pi = 3.13159;
    static function kob($szam)
    {
        return $szam*$szam*$szam;
    }

    static function faktorialis($n)
    {
        $fakt = 1;
        for ($i = 2; $i <= $n ; $i++)
        {
            $fakt = $fakt * $i;
        }
        return $fakt;
    }
}

?>