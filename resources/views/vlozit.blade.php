<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Vlozit inzerat</title>

</head>

<body>

<form method="post" action="store">
    <div class="form-group">
        <select name="Typ">
            <option value="Rod._dom">Rodinný dom</option>
            <option value="Byt">Byt</option>
            <option value="Kancelaria">Kancelária</option>
            <option value="Pozemok">Pozemok</option>
            <option value="Kancelarska_budova">Kancelárska budova</option>
        </select>
    </div>
    <div class="form-group">
        <input type="number" name="Rozloha">
    </div>
    <div class="form-group">
        <input type="number" name="Pocet_miestnosti">
    </div>
    <div class="form-group">
        <select name="Material">
            <option value="Tehla">Tehla</option>
            <option value="Panel">Panel</option>
            <option value="Drevo">Drevo</option>
            <option value="Kamen">Kameň</option>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="submit">
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>

</body>
</html>

