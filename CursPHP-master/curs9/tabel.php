<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$masini =array(
    array('nume'=>'Audi','model'=>'Q7','pret'=>10000,'an'=>2002,'culoare'=>'negru','poza'=>'q7.jpg'),
    array('nume'=>'BMW','model'=>'X5','pret'=>10000,'an'=>2005,'culoare'=>'negru','poza'=>'bmwx5.jpg'),
    array('nume'=>'Alfa Romeo','model'=>'Julieta','pret'=>14000,'an'=>2010,'culoare'=>'rosu','poza'=>'alfa.jpg'),
);

?>

<table>
    <thead>
        <th>Nume</th>
        <th>Model</th>
        <th>Pret</th>
        <th>An</th>
        <th>Culoare</th>
        <th>Poza</th>
    </thead>
    <tbody>
        <?php
        //php5
        // function sortByOrder($a, $b) {
        //     return $a['nume'] - $b['nume'];
        // }
        // usort($masini, 'sortByOrder');
        //php7
        // usort($masini, function($a, $b) {
        //     return $a['nume'] <=> $b['nume'];
        // });
        foreach ($masini as $key => $m):?>
        <?php //if($m['an'] > 2005):?>
        <tr>
        <td><?php echo $m['nume'];?></td>
        <td><?php echo $m['model'];?></td>
        <td><?php echo $m['pret'];?></td>
        <td><?php echo $m['an'];?></td>
        <td><?php echo $m['culoare'];?></td>
        <td><img src="<?php echo $m['poza'];?>" style="max-width:150px"/></td>
        </tr>
    <?php //endif;?>
    <?php endforeach;?>
    </tbody>
</table>

<table>
    <thead>
        <th>Nume</th>
        <th>Model</th>
        <th>Pret</th>
        <th>An</th>
        <th>Culoare</th>
        <th>Poza</th>
    </thead>
    <tbody>
        <tr>
        <td>Audi</td>
        <td>Q1</td>
        <td>10000</td>
        <td>2005</td>
        <td>maro</td>
        <td><img src="q7.jpg" style="max-width:150px"/></td>
        </tr>
        <tr>
        <td>BMW</td>
        <td>X5</td>
        <td>10000</td>
        <td>2005</td>
        <td>negru</td>
        <td><img src="bmwx5.jpg" style="max-width:150px"/></td>
        </tr>
    </tbody>
</table>

<form action="masini.php" method="post" enctype="multipart/form-data">
<fieldset>
    <legend><strong>Formular de adaugare masini</strong></legend>
    <label id="nume-label" class="nume">
        <strong>Nume</strong><br>
        <input type="text" value="" name="nume" id="nume" oninvalid="this.setCustomValidity('Acest camp este obligatoriu!')" required />
    </label>
    <br>
    <label id="model-label" class="model">
        <strong>Model</strong><br>
        <input type="text" value="" name="model" id="model" required/>
    </label>
    <br>
    <label id="pret-label" class="pret">
        <strong>Pret</strong><br>
        <input type="text" value="" name="pret" id="pret"  required/>
    </label>
    <br>
    <label id="an-label" class="an">
        <strong>An</strong><br>
        <input type="text" value="" name="an" id="an" required/>
    </label>
    <br>
    <label id="culoare-label" class="culoare">
            <strong>Culoare</strong><br>
        <input type="text" value="" name="culoare" id="culoare" required/>
    </label>
    <br>
    <label id="poza-label" class="poza">
            <strong>Poza</strong><br>
        <input type="file" value="" name="poza" id="poza" required/>
    </label>
    <br>
    <br><br>
    <label  class="submit">
        <input type="submit" value="Trimite" name="submit"/>
    </label>
    <input type="reset">
    <input type="hidden" name="hash" value="cheie_secreta_generata_pe_sesiune"  />
</fieldset>
</form>
</body>
</html>
