<?php
// facem o schita / template/ sablon   pentru viitoarele obiecte de tip clasa : Membrii proprietati si metoade

class Carti
{

    //atribute sau proprietatile clasei
    public $titlu;
    public $autor;
    static $editura;
    public $an_aparitie;
    public $nr_pagini;
    public $pret;

    // metodele  care seteaza atributele  de regula au parametru/ parametrii (argumente)

    public function setTitlu($titlu_carte)
    {
        $this->titlu = $titlu_carte;
    }
    public function setAutor($autor_carte)
    {
        $this->autor = $autor_carte;
    }
    public function setEditura($editura_carte)
    {
        $this->editura = $editura_carte;
    }
    public function setAn($an_publicare)
    {
        $this->an_aparitie = $an_publicare;
    }
    public function setNrPagini($pagini)
    {
        $this->nr_pagini = $pagini;
    }
    public function setPret($pret_carte)
    {
        $this->pret = $pret_carte;
    }

    //metoadele care ofera informatii despre valoarea atributelor, de regula nu au parametrii
    public function getTitlu()
    {
        return $this->titlu;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function getEditura()
    {
        return $this->editura;
    }
    public function getAn()
    {
        return $this->an_aparitie;
    }
    public function getPagini()
    {
        return $this->nr_pagini;
    }
    public function getPret()
    {
        return $this->pret;
    }

}
