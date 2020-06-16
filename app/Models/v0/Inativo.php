<?php

namespace App\Models\v0;

use Illuminate\Database\Eloquent\Model;

class Inativo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'INATIVOS';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'STD_ID_HR';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'STD_ID_HR',
        'STD_OR_RH_PERIOD',
        'DT_INI_RH',
        'ID_TIPO_RH',
        'N_TIPO_RH',
        'CBR_NUM_RG',
        'NOME',
        'DT_NASC',
        'SEXO',
        'cargo',
        'POSTO',
        'N_RUA',
        'N_TIPO_LOCAL_END',
        'QUADRO',
        'ORD_FONE',
        'N_TIPO_LOCAL_FONE',
        'N_TIPO_LINHA',
        'FONE',
        'END_LOGRADOURO',
        'END_NUMERO',
        'END_COMPL',
        'END_BAIRRO',
        'END_CIDADE',
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
        return 'cargo';
    }

    public function getOpm()
    {
        return false;
    }
}