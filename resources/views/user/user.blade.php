<style>
    #test {
        border-collapse: collapse;
        width: 50%;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }

    th, td {

        padding: 8px;
    }
    .button-view {
        background-color: silver;
        color: white;
        padding: 8px 12px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .view-inzeraty{
        text-align: center;
    }
    .w3-main{
        text-align: center;
    }
</style>
@extends('master')
<div class="w3-main" style="margin-left:340px;margin-right:40px;margin-top:70px">

<h1>
<?php
$user_type = Auth::user()->user_type;
if($user_type == "Pouzivatel"){
    echo 'Profil používateľa ' . Auth::user()->name;
    }else if($user_type == "Realitka"){
    echo 'Profil realitnej kancelárie ' . Auth::user()->name;
    }
    ?>
    </h1>
    <br>
    <br>



    <table class="table" id="test">
        <tr>
            <td>Meno</td>
            <td><?php echo Auth::user()->name;?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo Auth::user()->email;?></td>
        </tr>
        <tr>
            <td>Mesto</td>
            <td><?php echo Auth::user()->Mesto;?></td>
        </tr>
        <tr>
            <td>Ulica</td>
            <td><?php echo Auth::user()->Ulica;?></td>
        </tr>
        <tr>
            <td>Súpisné číslo</td>
            <td><?php echo Auth::user()->Supisne_cislo;?></td>
        </tr>
        <tr>
            <td>PSČ</td>
            <td><?php echo Auth::user()->PSC;?></td>

        </tr>
        <tr>
            <td>Telefón</td>
            <td><?php echo Auth::user()->Telefon;?></td>
        </tr>


    </table>



<div class="view-inzeraty">
<a href="{{action('PouzivatelController@inzeraty_pouzivatel')}}">
    <button type="button" class="button-view">Vaše inzeráty</button>
</a>
</div>
</div>



