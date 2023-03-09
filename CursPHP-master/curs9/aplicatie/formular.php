<!DOCTYPE html>
<html lang="en">
<?php include_once 'head.php';?>
<body>
<div class="container">
 <h1 class="h1"> Formular adaugare masini</h1>

 <form action="" method ="post" >
  <div class="form-group">
    <label for="nume">Nume</label>
    <input type="text" class="form-control" id="nume">
  </div>
  <div class="form-group">
    <label for="model">Model</label>
    <input type="text" class="form-control" id="model">
  </div>
  <div class="form-group">
    <label for="pret">Pret</label>
    <input type="text" class="form-control" id="pret">
  </div>
  <div class="form-group">
    <label for="an">An</label>
    <input type="text" class="form-control" id="an">
  </div>
  <div class="form-group">
    <label for="culoare">Culoare</label>
    <input type="text" class="form-control" id="culoare">
  </div>
  <div class="form-group">
    <label for="poza">Poza</label>
    <input type="file" class="form-control" id="poza">
  </div>
  
  <button type="submit" class="btn btn-primary">Salveaza masina</button>
</form>
</div>
</body>
</html>