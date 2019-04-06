{{--
        Here the service provider records the affected allergens data,
        which are later used for the allergy passport of the person concerned.
        --}}   


    <form method="POST" action="{{action('AffectedItemsController@store')}}">

{{csrf_field()}}

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="first_name">Test</label>
        <input type="text" class="form-control" name="first_name" placeholder="Vorname">
    </div>
    <div class="form-group col-md-6">
        <label for="last_name">Name</label>
        <input type="text" class="form-control" name="last_name" placeholder="Name">
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

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="AHVNumer">AHV-Nummer</label>
        <input type="text" class="form-control" name="AHVNumer" placeholder="AHV-Nummer">
    </div>
    <div class="form-group col-md-6">
        <label for="birth_date">Geburtsdatum</label>
        <input type="text" class="form-control" name="birth_date" placeholder="Geburtsdatum">
    </div>
</div>

<button type="submit" class="btn btn-default">
    <i class="fa fa-btn fa-plus"></i>Speichern
</button>
</form>