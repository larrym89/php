<?php
//https://stackoverflow.com/questions/5197300/new-self-vs-new-static/5197655
//https://stackoverflow.com/questions/11710099/what-is-the-difference-between-selfbar-and-staticbar-in-php
class Masina
{
    public static function model()
    {
         self::getModel();
        //static::getModel(); // late static bindings

    }

    protected static function getModel()
    {
        echo "Eu sunt o masina oarecare!";
    }

}

Masina::model();

class Mercedes extends Masina
{

    protected static function getModel()
    {
        echo "Eu sunt o masina model Mercedes!";
    }

}

Mercedes::model();