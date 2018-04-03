<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'parameters';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'classification_id',
    'tx_parameter',
    'nb_min',
    'nb_max',
    'unit_id'
    ];

    public function classification()
    {
        return $this->belongsTo('Vanguard\Classification', 'classification_id');
    }

    public function units()
    {
        return $this->belongsTo('Vanguard\Unit', 'unit_id');
    }
}
