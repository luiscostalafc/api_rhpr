<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Model;

class Opm extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'opm';

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
        'id',
        'meta4_id',
        'opm_code',
        'opm_description',
        'abbreviation',
        'type',
        'city',
        'city_code',
        'title',
        'base_code',
        'new_code',
        'phone',
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
        return 'opm_code';
    }
}