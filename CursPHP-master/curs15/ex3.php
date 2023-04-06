<?php
//create function with an exception
function verificaNum($nr) {
  if($nr>1) {
      //generez o eroare cu mesaj personalizat
    throw new Exception("Valoarea trebuie sa fie mai mare ca 1");
  }
  return true;
}

//exception
verificaNum(2);