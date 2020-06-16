<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Model;

class Cops extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cops';

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
        'admission_date',
        'name',
        'rg',
        'group',
        'birth_date',
        'gender_id',
        'gender',
        'admission_date_real',
        'email_meta4',
        'function',
        'position',
        'group',
        'subgroup',
        'promotion_date',
        'reference',
        'district',
        'city',
        'opm_description',
        'opm_meta4',
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