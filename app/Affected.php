<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Affected extends Model
{
    use ValidatingTrait;

    protected $table = 'affected';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function address()
    {
        return $this->hasOneThrough('App\User', 'App\Address');
    }

    protected $rules = [
        'user_id' => 'required',
        'ahv_number' => 'required|unique',
        'birth_date' => 'sometimes|required|date'
    ];
}
