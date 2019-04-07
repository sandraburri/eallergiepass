<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class CareProvider extends Model
{
    use ValidatingTrait;

    protected $table = 'care_providers';

    protected $rules = [
        'user_id' => 'required',
        'name' => 'required',
        'title' => 'required',
        'discipline' => 'required'
    ];
}
