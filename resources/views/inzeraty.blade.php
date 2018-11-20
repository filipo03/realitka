<table>
    <tr>
        <td>
            Typ
        </td>
        <td>
            Rozloha
        </td>
        <td>
            Počet miestností
        </td>
        <td>
            Materiál
        </td>
        <td>
    </tr>
    @foreach($nehnutelnosti as $nehnutelnost)
        <tr>
            <td>
                {{$nehnutelnost->Typ}}
            </td>
            <td>
                {{$nehnutelnost->Rozloha}}
            </td>
            <td>
                {{$nehnutelnost->Pocet_miestnosti}}
            </td>
            <td>
                {{$nehnutelnost->Material}}
            </td>
            <td>
                <a href="{{action("NehnutelnostController@edit",['id'=>$nehnutelnost->id])}}">editovat</a></td>
        </tr>
    @endforeach
</table>

<button type="button" onclick="{{action('NehnutelnostController@index')}}">Pridat inzerat</button>