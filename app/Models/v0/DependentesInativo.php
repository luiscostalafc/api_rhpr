<?php

namespace App\Models\v0;

use Illuminate\Database\Eloquent\Model;

class DependentesInativo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'DEPENDENTES_INATIVO';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'RG';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'RG',
        'nome',
        'sexo',
        'data_nasc',
        'irpf',
        'parentesco',
        'dt_ini',
        'dt_fim', 
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