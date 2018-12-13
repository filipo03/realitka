<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {background-color: #f2f2f2;}
    table.center {
        margin-left: auto;
        margin-right: auto;
    }
</style>
@extends('master')
<div class="stránka" style="margin-left:340px;margin-right:40px">
<table class="center" id="myTable" >
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
    @foreach($nehnutelnosti as $nehnutelnost)
        <tr>
            <td>
                {{$nehnutelnost->Nazov}}
            </td>
            <td>
                {{$nehnutelnost->Typ}}
            </td>
            <td>
                {{$nehnutelnost->Rozloha}}
            </td>
            <td>
                {{$nehnutelnost->Cena}}
            </td>
            <td>
                <a href="{{action("NehnutelnostController@show",['idInzerat'=>$nehnutelnost->idInzerat])}}">Detail</a>
            </td>
        </tr>
    @endforeach
</table>

<a href="{{action('NehnutelnostController@index')}}">Pridat inzerat</a>
</div>