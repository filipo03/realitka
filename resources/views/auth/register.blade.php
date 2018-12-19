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

    input[type=email], select {
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

    input[type=password], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }


    input[type=submit]:hover {
        background-color: #45a049;
    }

    .register{
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
<form method="POST" action="register">
    {!! csrf_field() !!}

    <div>
        Meno alebo názov spoločnosti
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Heslo
        <input type="password" name="password">
    </div>

    <div>
        Potvrdenie hesla
        <input type="password" name="password_confirmation">
    </div>
    <div>
        Typ používateľa<br>
        <select name="user_type">
            <option value="Pouzivatel">Používateľ</option>
            <option value="Realitka">Realitná kancelária</option>
        </select>
    </div>
    <div>
        Mesto
        <input type="text" name="Mesto">
    </div>
    <div>
        Ulica
        <input type="text" name="Ulica">
    </div>
    <div>
        PSČ
        <input type="text" name="PSC">
    </div>
    <div>
        Súpisné číslo
        <input type="number" name="Supisne_cislo">
    </div>
    <div>
        Telefón
        <input type="text" name="Telefon">
    </div>
    <input type="submit" value="Registrovať" class="register" />
</form>
</div>
