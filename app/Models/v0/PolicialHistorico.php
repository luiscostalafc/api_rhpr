<?php

namespace App\Models\v0;

use Illuminate\Database\Eloquent\Model;

class PolicialHistorico extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'POLICIAL_HISTORICO';
        
     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'SK_POLICIAL_HISTORICO';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'SK_POLICIAL_HISTORICO',
        'ID_META4',
        'STD_OR_HR_PERIOD',
        'DATA_ADMISSAO',
        'NOME',
        'RG',
        'CLASSE',
        'NASCIMENTO',
        'ID_SEXO',
        'SEXO',
        'ADMISSAO_REAL',
        'EMAIL_META4',
        'FUNCAO',
        'CARGO',
        'QUADRO',
        'SUBQUADRO',
        'PROMOCAO',
        'REFERENCIA',
        'BAIRRO',
        'CIDADE',
        'OPM_DESCRICAO',
        'OPM_META4',
        'CDOPM',
        'dh_inicio',
        'dh_fim',
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
    protected $dates = [
        'DATA_ADMISSAO',
        'NASCIMENTO',
        'ADMISSAO_REAL',
        'PROMOCAO',
        'dh_inicio',
        'dh_fim',
    ];

    public function getPosition()
    {
        return 'CARGO';
    }

    public function getOpm()
    {
        return 'CDOPM';
    }
}