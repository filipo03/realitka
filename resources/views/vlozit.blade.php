<style>
    input[type=text], select {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=number], select {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .stránka {
        border-radius: 5px;
        text-align: center;
        padding: 20px;
    }
</style>
<body>
<div class="stránka" style="margin-left:340px;margin-right:40px">
@extends('master')
<form method="post" action="store">
    <div class="form-group">
        <input type="text" name="Nazov" placeholder="Názov">
    </div>
    <div class="form-group">
        Typ<br>
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
        Materiál<br>
        <select name="Material">
            <option value="Tehla">Tehla</option>
            <option value="Panel">Panel</option>
            <option value="Drevo">Drevo</option>
            <option value="Kamen">Kameň</option>
        </select>
    </div>
    <div class="form-group">
        <input type="text" name="Popis" placeholder="Popis">
    </div>
    <div class="form-group">
        <input type="number" name="Cena" placeholder="Cena">
    </div>
    <div class="form-group">
        Adresa<br>
        <input type="text" name="Mesto" placeholder="Mesto">
    </div>
    <div class="form-group">
        <input type="text" name="Ulica" placeholder="Ulica">
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
</div>
</body>



