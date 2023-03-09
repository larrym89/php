<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
    <fieldset>
        <legend><strong>Formular de inregistrare</strong></legend>
        <label id="prenume-label" class="prenume">
            <strong>Prenume</strong><br>
            <input type="text" value="" name="prenume" id="prenume" oninvalid="this.setCustomValidity('Acest camp este obligatoriu!')" required />
        </label>
        <br>
        <label id="nume-label" class="nume">
            <strong>Nume</strong><br>
            <input type="text" value="" name="nume" id="nume" required/>
        </label>
        <br>
        <label id="email-label" class="email">
            <strong>Email</strong><br>
            <input type="email" value="" name="email" id="email"  required/>
        </label>
        <br>
        <label id="parola-label" class="parola">
            <strong>Parola</strong><br>
            <input type="password" value="" name="parola" id="parola" required/>
        </label>
        <br>
        <label id="parola2-label" class="parola2">
                <strong>Confirmati parola</strong><br>
            <input type="password" value="" name="parola2" id="parola2" required/>
        </label>
        <br>
        <label id="zinastere-label" class="zinastere">
                <strong>Zi de nastere</strong><br>
            <input type="date" value="" name="zinastere" id="zinastere" required/>
        </label>
        <br>
        <label id="sex-label" class="sex">
        <strong>Sex</strong><br>
            <select name="sex" id="sex" required>
                <option value="m">Masculin</option>
                <option value="f">Feminin</option>
                <option value="n">Altul</option>
                <option value="">Prefer sa nu spun </option>
            </select>
        </label>
        <br>
        <label id="telefon-label" class="telefon">
                <strong>Telefon</strong><br>
            <input type="tel" value="" name="telefon" id="telefon" pattern="0[0-9]{9}" maxlength="10" required/>
        </label>
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