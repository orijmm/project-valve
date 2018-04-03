<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'units';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'tx_unit'
    ];

    public function parameter()
    {
        return $this->hasMany('Vanguard\Parameter', 'unit_id');
    }
}
