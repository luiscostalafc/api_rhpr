<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Model;

class OpmMeta4 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'opm_meta4';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'opm_meta4',
        'opm_description_meta4',
        'opm_meta4',
        'opm_asc_id',
        'opm_pmpr',
        'opm_resp',
        'address',
        'start_date',
        'end_date',
        'street',
        'district',
        'city',
        'cep',
        'ddd',
        'phone',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that should be cast to \Carbon.
     *
     * @var array
     */
    protected $dates = [];

    public function getPosition()
    {
        return false;
    }

    public function getOpm()
    {
        return false;
    }
}