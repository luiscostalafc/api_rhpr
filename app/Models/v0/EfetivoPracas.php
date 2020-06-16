<?php

namespace App\Models\v0;

use Illuminate\Database\Eloquent\Model;

class EfetivoPracas extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'EFETIVO_PRACAS';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'UserRG';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'UserRG',
        'nome',
        'graduacao',
        'quadro',
        'subquadro',
        'inclusao_data',
        'opm',
        'referencia',
        'cdopm',
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
        return 'graduacao';
    }

    public function getOpm()
    {
        return 'cdopm';
    }
}