<?php
// facem o schita / template/ sablon   pentru viitoarele obiecte de tip clasa : Membrii proprietati si metoade

 class Carti{
    //atribute sau proprietati
    const TABLENAME = "carti"; // pt ca nu se schimba numele tabelului pana la executa scriptului

    public $titlu;
    public $autor;
    public $editura;
    public $an_aparitie;
    public $nr_pagini;
    public $pret;
    public $tip_carte;
    public $poza;
    

    
    
    
    // metode  care seteaza atributele  de regula au parametru/ parametrii (argumente)
    
    public function setTitlu($titlu_carte){
        $this->titlu = filter_var ( $titlu_carte, FILTER_SANITIZE_STRING);
    }
    public function setAutor($autor_carte){
         $this->autor=  filter_var ( $autor_carte, FILTER_SANITIZE_STRING);
    }
    public function setEditura($editura_carte){
        $this->editura= filter_var ( $editura_carte, FILTER_SANITIZE_STRING);
    }
    public function setAn($an_publicare){
         //validari
        $this->an_aparitie= $an_publicare;
    }
    public function setNrPagini($pagini){
        $this->nr_pagini = $pagini;
    }
    public function setPret($pret_carte){
         $this->pret = $pret_carte;
    }
    public function setTipCarte($tip_carte){
     $this->tip_carte = $tip_carte;
     }
    
    
    //metoade care ofera informatii despre valoarea atributelor, de regula nu au parametrii
    public function getTitlu(){
        return $this->titlu;
   }
   public function getAutor(){
        return $this->autor;
   }
   public function getEditura(){
        return $this->editura;
   }
   public function getAn(){
        return $this->an_aparitie;
   }
   public function getPagini(){
        return $this->nr_pagini;
   }
   public function getPret(){
        return $this->pret;
   }
    /**
     * Get the value of poza
     */ 
    public function getPoza()
    {
        return $this->poza;
    }
    public function setPoza($poza)
    {
          if (isset($poza)) {

               $upload = new Uploader($poza);
               $upload->allowed_extensions(array("png", "jpg", "jpeg", "gif"));
               $upload->max_size(5); // in MB
               $upload->path("assets/images");
               $upload->encrypt_name();
               
               if (! $upload->upload()) {
               echo "Upload error: " . $upload->get_error();
               $this->poza ='';
               } else {
               //echo "Upload successful!";
                $this->poza = $upload->get_name();
               }
          }
    }
   
   // alte metode care opereaza cu atributele clasei

	public function create(){
          $sql = "INSERT INTO " . self::TABLENAME . " (titlu, autor, editura, tip_carte, an,pagini,pret,poza) 
          VALUES (
               '$this->titlu', '$this->autor','$this->editura', '$this->tip_carte', '$this->an_aparitie', 
               '$this->nr_pagini','$this->pret','$this->poza')";
          
          $instance = Database::getInstance();
          $conn = $instance->getConnection();// se creeaza conexiunea la baza de date
          $res = mysqli_query($conn, $sql);
		if($res){
	 		return true;
		}else{
			return false;
		}
	}

     public function read($id=null){
          $sql = "SELECT * FROM ". self::TABLENAME ;
          if($id){
               $sql .= " WHERE id=$id";
          }
          else{
               $sql .= " ORDER BY id DESC";
          }
          
          $instance = Database::getInstance();
          $conn = $instance->getConnection();// se creeaza conexiunea la baza de date
          $res = mysqli_query($conn, $sql);
          return $res;
     }
     public function update($id){
          $sql = "UPDATE " . self::TABLENAME . " SET  
               titlu ='$this->titlu', 
               autor='$this->autor', 
               editura='$this->editura', 
               tip_carte='$this->tip_carte', 
               an='$this->an_aparitie',
               pagini='$this->nr_pagini', 
               pret='$this->pret' ,
               poza ='$this->poza' 
               WHERE id=$id";
          $instance = Database::getInstance();
          $conn = $instance->getConnection();// se creeaza conexiunea la baza de date
          $res = mysqli_query($conn, $sql);
          if($res){
               return true;
          }else{
               return false;
          }
     }
     public function delete($id){
          // sa se stearga si fisierul din images
          $this->deletePoza($id);

		$sql = "DELETE FROM " . self::TABLENAME . " WHERE id=$id";
          $instance = Database::getInstance();
          $conn = $instance->getConnection();// se creeaza conexiunea la baza de date
          $res = mysqli_query($conn, $sql);
 		if($res){
                
 			return true;
 		}else{
 			return false;
 		}
     }
     private function deletePoza($id){

          $sql = "SELECT poza FROM " . self::TABLENAME . " WHERE id=$id LIMIT 1";
          $instance = Database::getInstance();
          $conn = $instance->getConnection();// se creeaza conexiunea la baza de date
          $result = mysqli_query($conn, $sql);
          
          $row = mysqli_fetch_assoc($result);
          $poza = $row['poza'];
          unlink("assets/images/$poza");
     }
    

   


 }

?>