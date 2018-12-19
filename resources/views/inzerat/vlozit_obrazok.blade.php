<style>
    .w3-main{
        text-align: center;
    }
    #input{
        margin: 0 auto;
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
</style>
@extends('master')
<div class="w3-main" style="margin-left:340px;margin-right:40px;margin-top:70px">

    <h1><?php
    echo 'Pridanie obrázku k inzerátu ' . $nehnutelnost->Nazov;
        ?></h1>
    <br>
    <form method="post" action="{{action('NehnutelnostController@addobrazok', ['idInzerat'=>$nehnutelnost->idInzerat])}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div>
            <input type="file" name="filename[]" class="form-control" id="input">
        </div>
        <br>
        <button type="submit" class="button-image">Pridať obrázok</button>
    </form>
</div>