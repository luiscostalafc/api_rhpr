<?php

namespace App\Models\v0;

use Illuminate\Database\Eloquent\Model;

class FuncPriv extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'FUNC_PRIV';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'CBR_ID_FUNC_PRIV';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'STD_ID_HR',
        'STD_OR_HR_PERIOD_NUMBER',
        'DT_START',
        'DT_END',
        'CBR_ID_FUNC_PRIV',
        'CBR_ID_FORM_ACT',
        'SCO_ID_REA_CHANG', 
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