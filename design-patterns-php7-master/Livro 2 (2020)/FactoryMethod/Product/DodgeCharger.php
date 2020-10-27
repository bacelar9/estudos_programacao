<?php

namespace FactoryMethod\Product;

/**
 * Class DodgeCharger
 * @package FactoryMethod
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class DodgeCharger implements CarroProduct
{
    public function acelerar(): void
    {
        echo "Acelerando Dodge Charger\n";
    }

    public function frear(): void
    {
        echo "Freando Dodge Charger\n";
    }

    public function trocarMarcha(): void
    {
        echo "Trocando marcha do Dodge Charger\n";
    }
}