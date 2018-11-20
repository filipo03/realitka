<form method="post" action="{{action('NehnutelnostController@update', ['id'=>$nehnutelnost->id])}}">
    <div class="form-group">
        <select name="Typ" value="">
            <option value="Rod._dom">Rodinný dom</option>
            <option value="Byt">Byt</option>
            <option value="Kancelaria">Kancelária</option>
            <option value="Pozemok">Pozemok</option>
            <option value="Kancelarska_budova">Kancelárska budova</option>
        </select>
    </div>
    <div class="form-group">
        <input type="number" name="Rozloha" value="{{$nehnutelnost->Rozloha}}">
    </div>
    <div class="form-group">
        <input type="number" name="Pocet_miestnosti" value="{{$nehnutelnost->Pocet_miestnosti}}">
    </div>
    <div class="form-group">
        <select name="Material">
            <option value="Tehla">Tehla</option>
            <option value="Panel">Panel</option>
            <option value="Drevo">Drevo</option>
            <option value="Kamen">Kameň</option>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="submit">
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>