<?php

namespace App\Models\v0;

use Illuminate\Database\Eloquent\Model;

class EfetivoPmpr extends Model
{
    public $incrementing = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'EFETIVO_PMPR';

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
        'STD_ID_HR',
		'STD_OR_HR_PERIOD',
		'STD_DT_START',
		'STD_N_FIRST_NAME',
		'CBR_NUM_RG',
		'CBR_ID_FUNC_GRUOP',
		'SUS_ID_WORK_CENTER',
		'STD_WORK_LOCBRA',
		'STD_ID_SUB_GEO_DIV',
		'STD_N_SUB_GEO_DIV',
		'SCO_ID_WORK_UNIT',
		'STD_N_WORK_UNITBRA',
		'STD_ID_JOB_CODE',
		'CBR_ID_CLASS_ORDER',
		'CBR_ID_CLASS',
		'CBR_ID_REFERENCE',
		'CBR_ID_FUNC',
		'CBR_NM_FUNCBRA',
		'STD_DT_BIRTH',
		'STD_ID_GENDER',
		'STD_N_GENDERBRA',
		'STD_EMAIL'
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
    protected $casts = [
        'STD_OR_HR_PERIOD' => 'int'
    ];

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
    protected $dates = [
        'STD_DT_START',
		'STD_DT_BIRTH'
    ];

    public function getPosition()
    {
        return 'STD_ID_JOB_CODE';
    }

    public function getOpm()
    {
        return false;
    }
}