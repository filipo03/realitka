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
    .tlačidlá{
        text-align: center;
    }
    input[type=submit] {
        background-color: red;
        color: white;
        padding: 8px 12px;
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
        padding: 8px 12px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .button-image{
        background-color: dodgerblue;
        color: white;
        padding: 8px 12px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .button-image-add{
        background-color: limegreen;
        color: white;
        padding: 8px 12px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .pridat{
        text-align: center;
    }
    .stred{
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
@extends('master')
<div class="w3-main" style="margin-left:340px;margin-right:40px;margin-top:70px">
    <form method="post" action="{{action('NehnutelnostController@destroy', ['idInzerat'=>$nehnutelnost->idInzerat])}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <table class="table" id="test">
            <tr>
                <td>Názov</td>
                <td>{{$nehnutelnost->Nazov}}</td>
            </tr>
            <tr>
                <td>Typ</td>
                <td>{{$nehnutelnost->Typ}}</td>
            </tr>
            <tr>
                <td>Rozloha</td>
                <td>{{$nehnutelnost->Rozloha}} m²</td>
            </tr>
            <tr>
                <td>Počet miestností</td>
                <td>{{$nehnutelnost->Pocet_miestnosti}}</td>
            </tr>
            <tr>
                <td>Materiál</td>
                <td>{{$nehnutelnost->Material}}</td>
            </tr>
            <tr>
                <td>Popis</td>
                <td>{{$nehnutelnost->Popis}}</td>
            </tr>
            <tr>
                <td>Cena</td>
                <td>{{$nehnutelnost->Cena}} €</td>
            </tr>
            <tr>
                <td>Mesto</td>
                <td>{{$nehnutelnost->Mesto}}</td>
            </tr>
            <tr>
                <td>Ulica</td>
                <td>{{$nehnutelnost->Ulica}}</td>
            </tr>
            <tr>
                <td>Číslo domu</td>
                <td>{{$nehnutelnost->Supisne_cislo}}</td>
            </tr>
            <tr>
                <td>PSČ</td>
                <td>{{$nehnutelnost->PSC}}</td>
            </tr>


        </table>
        @if(!Auth::guest())
            @if(Auth::user()->user_type == "Admin")
                <div class="tlačidlá">
                <input type="submit" value="Vymazať" onclick="clicked(event)">
                <a href="{{ action ("NehnutelnostController@edit", ['idInzerat'=>$nehnutelnost->idInzerat]) }}">
                    <button type="button" class="button">Editovať</button>
                </a>
            </div>
    </form>
    @endif
    @endif


    @if(!Auth::guest())
            @if(Auth::user()->id == $nehnutelnost->user_id)
            <div class="tlačidlá">
            <input type="submit" value="Vymazať" onclick="clicked(event)">
            <a href="{{ action ("NehnutelnostController@edit", ['idInzerat'=>$nehnutelnost->idInzerat]) }}">
                <button type="button" class="button">Editovať</button>
            </a>
            </div>
    </form>
    @endif
    @endif

    <br>

    @if(!Auth::guest())
        @if(Auth::user()->user_type == "Admin")
            @foreach($obrazok as $obrazky)
                <img src="{{ asset('images/' . $obrazky->Nazov) }}" height="300" width="500" class="stred"/>

                <a href="{{ action ("NehnutelnostController@editobrazok",['idFotky'=>$obrazky->idFotky]) }}">
                    <div class="pridat">
                    <button type="button" class="button-image">Editovať fotku</button>
                    </div>
                </a>
            @endforeach
        @endif
    @endif

    @if(!Auth::guest())
        @if(Auth::user()->id == $nehnutelnost->user_id)
            @foreach($obrazok as $obrazky)
                <img src="{{ asset('images/' . $obrazky->Nazov) }}" height="300" width="500" class="stred"/>

                <a href="{{ action ("NehnutelnostController@editobrazok",['idFotky'=>$obrazky->idFotky]) }}">
                    <div class="pridat">
                    <button type="button" class="button-image">Editovať fotku</button>
                    </div>
                </a>
            @endforeach

        @endif
    @endif

    @if(Auth::guest())
        @foreach($obrazok as $obrazky)
            <img src="{{ asset('images/' . $obrazky->Nazov) }}" height="300" width="500" class="stred"/>
            <br>
        @endforeach
    @endif

    @if(!Auth::guest())
        @if(Auth::user()->user_type !== "Admin")
            @if(Auth::user()->id !== $nehnutelnost->user_id)

            @foreach($obrazok as $obrazky)
                <img src="{{ asset('images/' . $obrazky->Nazov) }}" height="300" width="500" class="stred"/>
                <br>
            @endforeach
        @endif
        @endif

    @endif



    <br>

    @if(!Auth::guest())
        @if(Auth::user()->user_type == "Admin")
            <div class="pridat">
                <a href="{{ action ("NehnutelnostController@obrazok", ['idInzerat'=>$nehnutelnost->idInzerat]) }}">
                    <button type="button" class="button-image-add">Pridať obrázky</button>
                </a>
            </div>
        @endif
    @endif

    @if(!Auth::guest())
        @if(Auth::user()->id == $nehnutelnost->user_id)
            <div class="pridat">
                <a href="{{ action ("NehnutelnostController@obrazok", ['idInzerat'=>$nehnutelnost->idInzerat]) }}">
                    <button type="button" class="button-image-add">Pridať obrázky</button>
                </a>
            </div>
        @endif
    @endif
</div>
<script>
    function clicked(e)
    {
        if(!confirm('Ste si istý, že chcete daný záznam odstrániť?'))e.preventDefault();
    }
</script>