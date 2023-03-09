<?php
trait Hello {
	public function hello() {
		echo "Hello din Trait ";
	}
}
trait World {
	public function world() {
		echo "World";
	}
}
class A {
    use Hello, World;
    
    public function hello() {
		echo "Hello din A ";
	}
}


class B extends A{
    use Hello;
    // public function hello() {
	// 	echo "Hello din B ";
	// }
    
}
$a = new A();
$a->hello();
$a->world();

$b = new B();
$b->hello();