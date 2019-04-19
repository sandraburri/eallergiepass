<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Affected extends Model
{
    use ValidatingTrait;

    protected $table = 'affected';

    protected $casts = [
        'birth_date' => 'date'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function careProvider()
    {
        return $this->belongsTo('App\CareProvider');
    }

    protected $rules = [
        'user_id' => 'required',
        'ahv_number' => 'required|unique',
        'birth_date' => 'sometimes|required|date'
    ];
}
