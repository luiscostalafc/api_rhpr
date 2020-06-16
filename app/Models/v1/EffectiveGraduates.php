<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Model;

class EffectiveGraduates extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'effective_graduates';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = '';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rg',
        'name',
        'graduation',
        'group',
        'subgroup',
        'inclusion_date',
        'opm_description',
        'reference',
        'opm_code',
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
        return 'position';
    }

    public function getOpm()
    {
        return 'opm_code';
    }
}