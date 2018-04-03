<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'classifications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'tx_name',
    'tx_description'
    ];

    public function parameter()
    {
        return $this->hasMany('Vanguard\Parameter', 'classification_id');
    }
}
