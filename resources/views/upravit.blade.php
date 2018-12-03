<form method="post" action="{{action('NehnutelnostController@update', ['idInzerat'=>$nehnutelnost->idInzerat])}}">
    <div class="form-group">
        <input type="string" name="Nazov" value="{{$nehnutelnost->Nazov}}">
    </div>
    <div class="form-group">
        Typ
        <select name="Typ">
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
        Materiál
        <select name="Material">
            <option value="Tehla">Tehla</option>
            <option value="Panel">Panel</option>
            <option value="Drevo">Drevo</option>
            <option value="Kamen">Kameň</option>
        </select>
    </div>
    <div class="form-group">
        <input type="string" name="Popis" value="{{$nehnutelnost->Popis}}">
    </div>
    <div class="form-group">
        <input type="number" name="Cena" value="{{$nehnutelnost->Cena}}">
    </div>
    Adresa
    <div class="form-group">
        <input type="string" name="Mesto" value="{{$nehnutelnost->Mesto}}">
    </div>
    <div class="form-group">
        <input type="string" name="Ulica" value="{{$nehnutelnost->Ulica}}">
    </div>
    <div class="form-group">
        <input type="number" name="Supisne_cislo" value="{{$nehnutelnost->Supisne_cislo}}">
    </div>
    <div class="form-group">
        <input type="number" name="PSC" value="{{$nehnutelnost->PSC}}">
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="submit">
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>