{{-- 
    Dies ist für den Arzt, nach dem ersten Login muss er seine Daten erfassen, damit diese später auf dem Allergiepass des
    Betroffenen ausgewiesen werden können. Dies erfolgt einmalig nach dem ersten Login und ist danach nicht mehr sichtbar!
--}}

<form method="POST" action="{{action('CareProviderController@store')}}">

    {{csrf_field()}}

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="name">Praxis</label>
            <input type="text" class="form-control" name="name" placeholder="Name der Praxis">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="title">Titel</label>
            <input type="text" class="form-control" name="title" placeholder="Titel">
        </div>
        <div class="form-group col-md-5">
            <label for="firstName">Vorname</label>
            <input type="text" class="form-control" name="firstName" placeholder="Vorname">
        </div>
        <div class="form-group col-md-5">
            <label for="lastName">Name</label>
            <input type="text" class="form-control" name="lastName" placeholder="Name">
        </div>        
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="discipline">Fachrichtung</label>
            <input type="text" class="form-control" name="discipline" placeholder="Fachrichtung">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="street">Strasse</label>
            <input type="text" class="form-control" name="street" placeholder="Strasse">
        </div>
        <div class="form-group col-md-6">
            <label for="streetNumber">Nummer</label>
            <input type="text" class="form-control" name="streetNumber" placeholder="Nummer">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="zip">PLZ</label>
            <input type="number" class="form-control" name="zip" placeholder="PLZ">
        </div>
        <div class="form-group col-md-6">
            <label for="city">Ort</label>
            <input type="text" class="form-control" name="city" placeholder="Ort">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="phoneNumber">Telefon</label>
            <input type="text" class="form-control" name="phoneNumber" placeholder="Telefon">
        </div>
    </div>

    {{-- Muss noch geregelt werden... --}}
    <button type="submit" class="btn btn-default">
        <i class="fa fa-btn fa-plus"></i>Speichern
    </button>
</form> 