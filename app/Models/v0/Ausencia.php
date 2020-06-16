<?php

namespace App\Models\v0;

use Illuminate\Database\Eloquent\Model;

class Ausencia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'AUSENCIA';

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
        'NOME',
        'CODIGO',
        'RG',
        'OPM_META4',
        'OPM_DESCRICAO',
        'COD_INCIDENTE',
        'DESC_INCIDENTE',
        'UNITS',
        'DT_INIC',
        'DT_FIM',
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
        'dt_inic',
		'dt_fim'
    ];

    public function getPosition()
    {
        return 'CODIGO';
    }

    public function getOpm()
    {
        return false;
    }
}