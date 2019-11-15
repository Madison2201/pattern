<?php

abstract class Product
{ }

class ProductA extends Product
{ }

class ProductB extends Product
{ }

abstract class FactoryAbstract
{
    public function create($type)
    {
        switch ($type) {
            case 'A':
                return new ProductA();
            case 'B':
                return new ProductB();
        }
    }
}
class Factory extends FactoryAbstract
{ }

$factory = new Factory();
$productA = $factory->create('A');

var_dump($productA);
