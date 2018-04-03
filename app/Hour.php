<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Hour extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hours';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'time',
    ];

    public function getTimeAttribute($hour)
    {
        if ($hour) {
            return Carbon::parse($hour)->format('H:i a');
        }
    }

    public function binnacle()
    {
        return $this->belongsTo('Vanguard\Binnacle', 'hour_id');
    }
}
