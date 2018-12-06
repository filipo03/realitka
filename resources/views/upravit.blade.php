<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=number], select {
        width: 100%;
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

    div {
        border-radius: 5px;
        background-color: ;
        padding: 20px;
    }
</style>
@extends('master')
<div class="stránka" style="margin-left:340px;margin-right:40px">
<form method="post" action="{{action('NehnutelnostController@update', ['idInzerat'=>$nehnutelnost->idInzerat])}}">
    <div class="form-group">
        <input type="text" name="Nazov" value="{{$nehnutelnost->Nazov}}">
    </div>
    <div class="form-group">
        Typ
        <select name="Typ">
            <option value="Rod._dom" {{ $nehnutelnost->Typ === 'Rod._dom' ? 'selected' : '' }}>Rodinný dom</option>
            <option value="Byt" {{ $nehnutelnost->Typ === 'Byt' ? 'selected' : '' }}>Byt</option>
            <option value="Kancelaria" {{ $nehnutelnost->Typ === 'Kancelaria' ? 'selected' : '' }}>Kancelária</option>
            <option value="Pozemok" {{ $nehnutelnost->Typ === 'Pozemok' ? 'selected' : '' }}>Pozemok</option>
            <option value="Kancelarska_budova" {{ $nehnutelnost->Typ === 'Kancelarska_budova' ? 'selected' : '' }}>Kancelárska budova</option>
        </select>
    </div>
    <div class="form-group">
        <input type="number" name="Rozloha" value="{{$nehnutelnost->Rozloha}}">
    </div>
    <div class="form-group">
        <input type="number" name="Pocet_miestnosti" value="{{$nehnutelnost->Pocet_miestnosti}}">
    </div>
    <div class="form-group">
        Materiál
        <select name="Material">
            <option value="Tehla" {{ $nehnutelnost->Material === 'Tehla' ? 'selected' : '' }}>Tehla</option>
            <option value="Panel" {{ $nehnutelnost->Material === 'Panel' ? 'selected' : '' }}>Panel</option>
            <option value="Drevo" {{ $nehnutelnost->Material === 'Drevo' ? 'selected' : '' }}>Drevo</option>
            <option value="Kamen" {{ $nehnutelnost->Material === 'Kamen' ? 'selected' : '' }}>Kameň</option>
        </select>
    </div>
    <div class="form-group">
        <input type="text" name="Popis" value="{{$nehnutelnost->Popis}}">
    </div>
    <div class="form-group">
        <input type="number" name="Cena" value="{{$nehnutelnost->Cena}}">
    </div>
    Adresa
    <div class="form-group">
        <input type="text" name="Mesto" value="{{$nehnutelnost->Mesto}}">
    </div>
    <div class="form-group">
        <input type="text" name="Ulica" value="{{$nehnutelnost->Ulica}}">
    </div>
    <div class="form-group">
        <input type="number" name="Supisne_cislo" value="{{$nehnutelnost->Supisne_cislo}}">
    </div>
    <div class="form-group">
        <input type="number" name="PSC" value="{{$nehnutelnost->PSC}}">
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="submit">
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>
</div>