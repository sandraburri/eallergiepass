<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Address extends Model
{
    use ValidatingTrait;

    protected $table = 'addresses';

    protected $rules = [
        'user_id' => 'required',
        'first_name' => 'required|alpha|max:25',
        'last_name' => 'required|alpha|max:25',
        'street' => 'required|alpha|max:25',
        'street_number' => 'required|max:10',
        'zip' => 'required|digits:4',
        'city' => 'required|alpha|max:25',
        'phone_number' => 'required'
    ];
}