<?php
  //https://www.php.net/manual/en/language.oop5.late-static-bindings.php
class Animal
{
    public static $name = "animal";
  
    // Return the class that is represented by "self::"
    public function getSelfClass()
    {
        return get_class();
    }
  
    // Return the class that is represented by "static::"
    public function getStaticClass()
    {
        return get_called_class();
    }
  
    public function selfVar()
    {
        return self::$name;
    }
  
    public function staticVar()
    {
        return static::$name;
    }
  
    public function selfMethod()
    {
        return self::getName();
    }
  
    public function staticMethod()
    {
        return static::getName();
    }
  
    protected function getName()
    {
        return "animal";
    }
  
}
  
class Penguin extends Animal
{
    public static $name = "penguin";
  
    protected function getName()
    {
        return "penguin";
    }
}
  
var_dump(Penguin::selfVar());
var_dump(Penguin::staticVar());
var_dump(Penguin::selfMethod());
var_dump(Penguin::staticMethod());
var_dump(Penguin::getSelfClass());
var_dump(Penguin::getStaticClass());