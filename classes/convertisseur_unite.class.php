<?php

class ConvertisseurUnite
{
    public static function grammesEnKilogrammes(float $grammes): float
    {
        return $grammes / 1000;
    }

    public static function litresEnCentilitres(float $litres): float
    {
        return $litres * 100;
    }
}

