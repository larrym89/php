```
<?php 
namespace Vendor\Library;

use Another\Vendor\Library\ClassName;

abstract class ClassName extends AnotherClass implements Countable, Serializable
{
    const CONSTANTS = 'top';

    use someTrait, anotherTrait {
        anotherTrait::traitMethod insteadof someTrait;
        someTrait::anotherTraitMethod insteadof anotherTrait;
        someTrait::traitMethod as duplicate;
    };

    public static $properties;
    protected static $properties;
    private static $properties;

    public static function methods() {}
    protected static function methods() {}
    private static function methods() {}

    public $properties;
    protected $properties;
    private $properties;

    public function __construct() {}
    public function __destruct() {}

    public function __get() {}
    public function __set() {}

    public function getters() {}
    public function setters() {}

    public function methods() {}
    final public function methods() {}

    protected function methods() {}
    final protected function methods() {}

    private function methods() {}

    abstract public function methods();
    abstract protected function methods();
    abstract private function methods();
}


```