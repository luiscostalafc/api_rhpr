<?php

namespace App\Models\v0;

use Illuminate\Database\Eloquent\Model;

class FuncoesPrivativas extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'FUNCOES_PRIVATIVAS';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'CBR_ID_FUNC';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'CBR_ID_FUNC_PRIV',
        'DT_START',
        'DT_END',
        'CBR_ID_FUNC',
        'STD_ID_JOB_CODE',
        'CBR_ID_CLASS_ORDER',
        'CBR_ID_CLASS',
        'STD_ID_WORK_UNIT',
        'CBR_ID_FORM_ACT',
        'CBR_Q_VACANCY',
        'CBR_COMMENT', 
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
        return 'STD_ID_JOB_CODE';
    }

    public function getOpm()
    {
        return false;
    }
}