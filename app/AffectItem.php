<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class AffectedItem extends Model
{
    use ValidatingTrait;

    protected $table = 'affected_items';

    protected $rules = [
        'affected_id' => 'required',
        'type'        => 'required',
        'name'        => 'required'
    ];
}
