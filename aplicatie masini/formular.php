<!DOCTYPE html>
<html lang="en">

<?php include_once('head.php'); ?>

<body>

    <div class="container">

        <h1 class="h1">Formular de adaugare</h1>

        <form>
            <div class="form-group">
                <label for="nume">Nume</label>
                <input type="text" class="form-control" id="nume" placeholder="Nume">
            </div>

            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" class="form-control" id="model" placeholder="Model">
            </div>

            <div class="form-group">
                <label for="pret">Pret</label>
                <input type="text" class="form-control" id="pret" placeholder="Pret">
            </div>

            <div class="form-group">
                <label for="an">An</label>
                <input type="text" class="form-control" id="an" placeholder="An">
            </div>

            <div class="form-group">
                <label for="culoare">Culoare</label>
                <input type="text" class="form-control" id="culoare" placeholder="Culoare">
            </div>

            <div class="form-group">
                <label for="dataAdaugare">Data adaugare</label>
                <input type="date" class="form-control" id="dataAdaugare" placeholder="Data Adaugare">
            </div><br>

            <div class="form-group">
                <label for="poza">Poza</label>
                <input type="file" class="form-control-file" id="poza">
            </div><br>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



</body>

</html>