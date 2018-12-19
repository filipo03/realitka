@extends('master')
<div class="w3-main" style="margin-left:340px;margin-right:40px;margin-top:70px">
    @if(count($inzeraty) > 0)
<table class="table table-striped">
    <tr>
        <th>
            Nazov
        </th>
        <th>
            Typ
        </th>
        <th>
            Rozloha
        </th>
        <th>
            Cena
        </th>
        <th>

        </th>
    </tr>
    @foreach($inzeraty as $inzerat)
        <td>
            {{$inzerat->Nazov}}
        </td>
        <td>
            {{$inzerat->Typ}}
        </td>
        <td>
            {{$inzerat->Rozloha}}
        </td>
        <td>
            {{$inzerat->Cena}}
        </td>
        <td>
            <a href="{{action("NehnutelnostController@show",['idInzerat'=>$inzerat->idInzerat])}}">Detail</a>
        </td>
        </tr>
        @endforeach
</table>
        @else
        <p>Zatiaľ ste nevložili žiadne inzeráty</p>
        @endif
</div>