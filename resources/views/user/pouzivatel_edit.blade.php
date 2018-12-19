<style>
    .w3-main{
        text-align: center;
    }
</style>
@extends('master');
<div class="w3-main" style="margin-left:340px;margin-right:40px;margin-top:70px">
    <h1><?php echo 'Úprava používateľa ' . Auth::user()->name ?></h1>
    <form method="post" action="{{action('PouzivatelController@pouzivatel_update')}}">

        Meno
        <div class="form-group">
            <input type="text" name="name" value="{{$pouzivatel->name}}">
        </div>
        <div class="form-group">
            <input type="text" name="email" value="{{$pouzivatel->email}}">
        </div>
        <div class="form-group">
            <input type="text" name="Ulica" value="{{$pouzivatel->Ulica}}">
        </div>
        <div class="form-group">
            <input type="text" name="Mesto" value="{{$pouzivatel->Mesto}}">
        </div>
        <div class="form-group">
            <input type="text" name="PSC" value="{{$pouzivatel->PSC}}">
        </div>
        <div class="form-group">
            <input type="text" name="Supisne_cislo" value="{{$pouzivatel->Supisne_cislo}}">
        </div>
        <div class="form-group">
            <input type="text" name="Telefon" value="{{$pouzivatel->Telefon}}">
        </div>
        <input type="submit" value="Potvrdiť">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
    </form>
</div>