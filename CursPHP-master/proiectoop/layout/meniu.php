<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="#">Meniu Aplicatie OOP - CRUD - Books</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="listacarti.php">Carti</a>
      </li>
      <?php if(isset($_SESSION['user_session']) && !empty($_SESSION['user_session'])):?>

     
      <li class="nav-item active">
        <a class="nav-link" href="inregistrare.php">Adauga utilizator <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rezultate.php">Vezi utilizatori</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formular.php">Adauga carte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="afisare_carti.php">Afiseaza carti</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <?php else:?>
        <li class="nav-item">
        <a class="nav-link" href="index.php">Login </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="inregistrare.php">Inregistreaza-te</a>
      </li>
      <?php endif;?>
      
      
    </ul>
  </div>
</nav>