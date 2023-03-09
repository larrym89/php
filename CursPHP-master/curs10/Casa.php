<?php
//definim clasa cu ajutoarul cuvantului rezervat class  si numele dorit Casa{}

class Casa {
    // proprietatile Casei 
    // proprietatile se pot defin folosind modificatorii de access: 
    // public, protected sau private   //revenim cu detalii
    
    public $culoare = '#ffffff';
    public $alteCulori = [
      'dormitor' => 'white',
      'baie' => 'light pink',
      'bucatarie' => 'light blue'
    ];
    // only these colors are allowed
    private $allowedColors = [
      'black', 'blue', 'red', 'green'
    ];
    
    public $piscina = false;
    public $numarFerestre = 10; 
    public $numarCamere = 4;
    public $casaIncuiata = false;

    const GARAJ =1;  //PHP >= 7.1.0 modificatorii de acces sunt disponibili si pentru constante

    // proprietatile declarate static sunt aceleasi pentru toate obiectele.
    // pot fi accesate fara a instantia clasa / fara a genera un obiect
    public static $numarEtaje = 1;
    public static $descriere=<<<'EOT'
Este o schita de casa folosita pentru a produce mai multe case! 
EOT;

    // metodele clasei

    // folosim pseudo variabila $this pentru a accesa proprietatile / metodele  obiectului curent 
    public function schimbCuloare($color) {
      if ( in_array( $color, $this -> allowedColors ) ) {
        $this->culoare = $color;
      }
    }

    public function inchideCasa(){
      $this->casaIncuiata = true;
    }
    function adaugaFereastra()
    {
        $this->numarFerestre = $this->numarFerestre + 1 ;
    }
    function adaugaEtaj(){
      self::$numarEtaje= self::$numarEtaje +1;
    }
    function reclamaCasa(){
      $descriere =<<<DESC
      <h3>Vila deosebita cu urmatoarele caracteristici:</h3>
      <ul>
        <li>Numar camere: {$this->numarCamere}</li>
        </ul>
DESC;
      if($this->casaIncuiata==true){
        $descriere .= 'Se poate vizita cand doriti'; 
      }
      else{
        $descriere .= 'In acest moment nu se poate vizita. Va rugam sa faceti programare'; 
      }
      self::$descriere = $descriere;
      return self::$descriere;
    }



}


?>
