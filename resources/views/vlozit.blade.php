<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Vlozit inzerat</title>

</head>

<body>

<form method="post" action="store">
    <div class="form-group">
        <input type="string" name="Nazov" placeholder="Názov">
    </div>
    <div class="form-group">
        Typ
        <select name="Typ">
            <option value="Rod._dom">Rodinný dom</option>
            <option value="Byt">Byt</option>
            <option value="Kancelaria">Kancelária</option>
            <option value="Pozemok">Pozemok</option>
            <option value="Kancelarska_budova">Kancelárska budova</option>
        </select>
    </div>
    <div class="form-group">
        <input type="number" name="Rozloha" placeholder="Rozloha">
    </div>
    <div class="form-group">
        <input type="number" name="Pocet_miestnosti" placeholder="Počet miestností">
    </div>
    <div class="form-group">
        Materiál
        <select name="Material">
            <option value="Tehla">Tehla</option>
            <option value="Panel">Panel</option>
            <option value="Drevo">Drevo</option>
            <option value="Kamen">Kameň</option>
        </select>
    </div>
    <div class="form-group">
        <input type="string" name="Popis" placeholder="Popis">
    </div>
    <div class="form-group">
        <input type="number" name="Cena" placeholder="Cena">
    </div>
    Adresa
    <div class="form-group">
        <input type="string" name="Mesto" placeholder="Mesto">
    </div>
    <div class="form-group">
        <input type="string" name="Ulica" placeholder="Ulica">
    </div>
    <div class="form-group">
        <input type="number" name="Supisne_cislo" placeholder="Číslo domu">
    </div>
    <div class="form-group">
        <input type="number" name="PSC" placeholder="PSČ">
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="submit">
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>

</body>
</html>

