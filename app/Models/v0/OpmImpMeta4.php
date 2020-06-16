<?php

namespace App\Models\v0;

use Illuminate\Database\Eloquent\Model;

class OpmImpMeta4 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'OPM_IMP_META4';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'UNIDADE_META4';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'UNIDADE_META4',
        'DESCRICAO_META4',
        'ID_PAI',
        'DESCRICAO_PAI',
        'UNIDADE_PMPR',
        'CD_LOCAL_TRABALHO',
        'LOCAL_TRABALHO',
        'DATA_INICIO',
        'DATA_FIM',
        'LOGRADOURO',
        'BAIRRO',
        'MUNICIPIO',
        'CEP',
        'DDD',
        'TELEFONE', 
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