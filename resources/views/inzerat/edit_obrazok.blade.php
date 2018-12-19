<style>
    .w3-main{
        text-align: center;
    }
    .button-image{
        background-color: limegreen;
        color: white;
        padding: 8px 12px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .delete{
        background-color: red;
        color: white;
        padding: 8px 12px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>
@extends('master')
<div class="w3-main" style="margin-left:340px;margin-right:40px;margin-top:70px">
    <h1>Editácia obrázku</h1>
    <br>
    <img src="{{ asset('images/' . $obrazky->Nazov) }}" height="300" width="500"/>
    <br><br>
    <form method="post" action="{{action('NehnutelnostController@updateobrazok', ['idFotky'=>$obrazky->idFotky])}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div>
            <input type="file" name="filename[]" class="form-control" value="{{$obrazky->Nazov}}">
        </div>

        <button type="submit" class="button-image" style="margin-top:10px">Potvrdiť</button>
    </form>
    <form method="post" action="{{action('NehnutelnostController@deleteobrazok', ['idFotky'=>$obrazky->idFotky])}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="submit" value="Vymazať obrázok" class="delete" onclick="clicked(event)">
    </form>
</div>
<script>
    function clicked(e)
    {
        if(!confirm('Ste si istý, že chcete daný záznam odstrániť?'))e.preventDefault();
    }
</script>