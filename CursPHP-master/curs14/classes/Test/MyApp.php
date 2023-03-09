<?php
namespace MyProject\Test;
// Definesc clasa MyApp in loc de MyTest
class MyApp{
    public function test(){
        echo "sunt in clasa ".__CLASS__ ." cu namespace ".__NAMESPACE__;
    }
}