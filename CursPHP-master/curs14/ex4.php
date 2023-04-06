
<?php
//supraincarcarea functiilor
function add()
{
    $sum = 0;
    $args = func_get_args();
    foreach ($args as $arg)
    {
       $sum += $arg;
    }
    return $sum;
}
echo add(1, 2); // '3'
echo add(10.5, 2.5); // '13'
echo add(10.5, 2.5, 9.6, 55.2); // '77.8'


class SupraIncarcare
{
    /**  supranacarcarea proprietatilor  */
    private $data = array();

    public function __set($name, $value)
    {
        echo "se apeleaza __set";
        $this->data[$name] = $value;
    }
    public function __get($name)
    {
        echo "se apeleaza __get";
        return $this->data[$name];
    }
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }
    public function __unset($name)
    {
        unset($this->data[$name]);
    }

    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "S-a apelat metoda obiectului '$name' "
        . implode(', ', $arguments) . "\n";
    }
    public static function __callStatic($name, $arguments)
    {
        echo "S-a apelat metoda static '$name' "
        . implode(', ', $arguments) . "\n";
    }
}
$obj = new SupraIncarcare;
$obj->name = "Adrian";
echo $obj->name; // Adrian

echo "<br>";
$obj = new SupraIncarcare;
$obj->runTest('prin obiect');
SupraIncarcare::runTest('apelare statica');

echo "<br>";
$obj->runTest('prin obiect', 'doi parametrii');
SupraIncarcare::runTest('apelare statica', 'doi parametrii ');