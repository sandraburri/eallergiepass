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

    protected $rules = [
        'user_id' => 'required',
        'ahv_number' => 'required',
        'birth_date' => 'required'
    ];
}
