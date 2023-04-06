<?php
// ceaza obiectele
class Automobil
{
    private $marca;
    private $model;

    public function __construct($marcaAuto, $modelAuto)
    {
        $this->marca = $marcaAuto;
        $this->model = $modelAuto;
    }

    public function getMarcaModel()
    {
        return $this->marca . ' ' . $this->model;
    }
}
class Camion
{
    private $marca;
    private $model;
    private $marfa;

    public function __construct($marcaAuto, $modelAuto,$tipMarfa)
    {
        $this->marca = $marcaAuto;
        $this->model = $modelAuto;
        $this->marfa = $tipMarfa;
    }

    public function getMarcaModel()
    {
        return $this->marca . ' ' . $this->model . ' ' . $this->marfa;
    }
}

// o singură fabrică de o obiecte. 
class FabricaAutomobil
{
    public static function create($marcaAuto, $modelAuto, $tipMarfa=null)
    {
        if($tipMarfa){
            return new Camion($marcaAuto, $modelAuto, $tipMarfa);
        }
        else{
            return new Automobil($marcaAuto, $modelAuto);
        }
       
    }
}


$logan = FabricaAutomobil::create('Dacia', 'Logan');
echo $logan->getMarcaModel(); 

echo "<br>";

$sandero = FabricaAutomobil::create('Dacia', 'Sandero');
echo $sandero->getMarcaModel(); 

echo "<br>";
$daf = FabricaAutomobil::create('Daf', 'CF ELECTRIC','autospeciale de gunoi');
echo $daf->getMarcaModel(); 
