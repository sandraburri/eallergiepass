{{--
    This is for the care provider, after the first login he must enter his data,
    so that these can be shown later on the allergy passport of the affected person.
    This is done once after the first login and is no longer visible!
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
            <label for="first_name">Vorname</label>
            <input type="text" class="form-control" name="first_name" placeholder="Vorname">
        </div>
        <div class="form-group col-md-5">
            <label for="last_name">Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Name">
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
            <label for="street_number">Nummer</label>
            <input type="text" class="form-control" name="street_number" placeholder="Nummer">
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
            <label for="phone_number">Telefon</label>
            <input type="text" class="form-control" name="phone_number" placeholder="Telefon">
        </div>
    </div>

    <button type="submit" class="btn btn-default">
        <i class="fa fa-btn fa-plus"></i>Speichern
    </button>
</form> 