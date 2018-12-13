@extends('master')
<div class="stránka" style="margin-left:340px;margin-right:40px">

<?php
$user_type = Auth::user()->user_type;
if($user_type == "Pouzivatel"){
    echo 'Ste obyčajný používateľ';
    }else if($user_type == "Realitka"){
    echo 'Ste vážená realitá kancelária';
    }
    ?>
    <br>
    <br>
    <dl>
        <dt>Meno</dt>
        <dd>
            <?php echo Auth::user()->name;?>
        </dd>
        <dt>Email</dt>
        <dd>
            <?php echo Auth::user()->email;?>
        </dd>
        <dt>Mesto</dt>
        <dd>
            <?php echo Auth::user()->Mesto;?>
        </dd>
        <dt>Ulica</dt>
        <dd>
            <?php echo Auth::user()->Ulica;?>
        </dd>
        <dt>Súpisné číslo</dt>
        <dd>
            <?php echo Auth::user()->Supisne_cislo;?>
        </dd>
        <dt>PSČ</dt>
        <dd>
            <?php echo Auth::user()->PSC;?>
        </dd>
        <dt>Telefón</dt>
        <dd>
            <?php echo Auth::user()->Telefon;?>
        </dd>
    </dl>




<a href="{{action('PouzivatelController@inzeraty_pouzivatel')}}">Vaše inzeráty</a>
</div>



