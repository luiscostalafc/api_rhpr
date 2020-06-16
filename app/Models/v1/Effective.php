<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Model;

class Effective extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'effective';

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
        'meta4_id',
        'period',
        'start_date',
        'first_name',
        'rg',
        'class',
        'opm_id',
        'opm_address',
        'city_id',
        'city',
        'opm_meta4',
        'opm_description',
        'position',
        'group',
        'subgroup',
        'reference_id',
        'function_id',
        'function',
        'birth_date',
        'gender_id',
        'gender',
        'email_meta4',
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
        return false;
    }
}