<?php
class A {

    public function salut(){
        echo "Salut eu sunt din ".__CLASS__;
    }
}

class B extends A {
    public function salut(){
        echo "Salut eu sunt din ".__CLASS__;
    }
}
class C extends B {
    public function salut(){
        echo "Salut eu sunt din ".__CLASS__;
    }
}

$b = new B();
$c = new C();
$b->salut();
A::salut();
