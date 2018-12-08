<style>
    dl {
        text-align: center;
        padding: 5px;
    }
    dt {
        font-weight: bold;
    }
    dd {
        margin: 0;
        padding: 0 0 0.5em 0;
    }
    .stránka{
        text-align: center;
    }
    input[type=submit] {
        background-color: red;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: red;
    }
    .button {
        background-color: silver;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }



</style>
@extends('master')
<div class="stránka" style="margin-left:340px;margin-right:40px">
    <form method="post" action="{{action('NehnutelnostController@destroy', ['idInzerat'=>$nehnutelnost->idInzerat])}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <dl class="w3-dl w3-large">
                <dt>Názov</dt>
                    <dd>{{$nehnutelnost->Nazov}}</dd>
                <dt>Typ</dt>
                    <dd>{{$nehnutelnost->Typ}}</dd>
                <dt>Rozloha</dt>
                    <dd>{{$nehnutelnost->Rozloha}}</dd>
                <dt>Počet miestností</dt>
                    <dd>{{$nehnutelnost->Pocet_miestnosti}}</dd>
                <dt>Materiál</dt>
                    <dd>{{$nehnutelnost->Material}}</dd>
                <dt>Popis</dt>
                    <dd>{{$nehnutelnost->Popis}}</dd>
                <dt>Cena</dt>
                    <dd>{{$nehnutelnost->Cena}}</dd>
                <dt>Mesto</dt>
                    <dd>{{$nehnutelnost->Mesto}}</dd>
                <dt>Ulica</dt>
                    <dd>{{$nehnutelnost->Ulica}}</dd>
                <dt>Číslo domu</dt>
                    <dd>{{$nehnutelnost->Supisne_cislo}}</dd>
                <dt>PSČ</dt>
                    <dd>{{$nehnutelnost->PSC}}</dd>
            </dl>
        <input type="submit" value="Vymazať" onclick="clicked(event)">
    </form>
    <a href="{{ action ("NehnutelnostController@edit", ['idInzerat'=>$nehnutelnost->idInzerat]) }}">
        <button type="button" class="button">Editovať</button>
    </a>
</div>
<script>
    function clicked(e)
    {
        if(!confirm('Ste si istý, že chcete daný záznam odstrániť?'))e.preventDefault();
    }
</script>