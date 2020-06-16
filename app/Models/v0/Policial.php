<?php

namespace App\Models\v0;

use Illuminate\Database\Eloquent\Model;

class Policial extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'POLICIAL';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_META4';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
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
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_sexo' => 'int'
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
        'data_admissao',
		'nascimento',
		'admissao_real',
		'promocao'
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