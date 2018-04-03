<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Model;
use Vanguard\Parameter;
use Carbon\Carbon;

class Binnacle extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'binnacles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'hour_id',
    'date',
    'user_id',
    'parameters',
    'out_service',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'parameters' => 'json',
    ];

    public function getParameterName($key)
    {
        $parameter_name = Parameter::where('id',$key)->first();
        return $parameter_name;
    }

    public function getDateAttribute($date)
    {
        if ($date) {
            return Carbon::parse($date)->format('d/m/Y');
        }
    }

    public function user()
    {
        return $this->belongsTo('Vanguard\User', 'user_id');
    }

    public function hour()
    {
        return $this->belongsTo('Vanguard\Hour', 'hour_id');
    }
}
