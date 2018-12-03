<table>
    <tr>
        <td>
            Nazov
        </td>
        <td>
            Typ
        </td>
        <td>
            Rozloha
        </td>
        <td>
            Cena
        </td>
        <td>
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
                <a href="{{action("NehnutelnostController@edit",['idInzerat'=>$nehnutelnost->idInzerat])}}">editovat</a></td>
        </tr>
    @endforeach
</table>

<a href="{{action('NehnutelnostController@index')}}">Pridat inzerat</a>