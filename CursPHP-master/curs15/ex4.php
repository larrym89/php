<?php
//create function with an exception
function verificaNum($nr) {
  if($nr>1) {
      //generez o eroare cu mesaj personalizat
    throw new Exception("Valoarea trebuie sa fie mai mare ca 1");
  }
  return true;
}

try {
    verificaNum(2);
    echo 'Acest mesaj apare doar daca $nr <=1';
  }
  //catch exception
  catch(Exception $e) {
    echo 'Mesajul de eroare "prins": ' .$e->getMessage();
  }