<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Model;

class FullCops extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'full_cops';

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
        'meta4_id',
        'start_date',
        'admission_date',
        'name',
        'rg',
        'group',
        'birth_date',
        'gender_id',
        'gender',
        'admission_real_date',
        'email_meta4',
        'function',
        'position',
        'group',
        'subgroup',
        'promotion',
        'reference',
        'district',
        'city',
        'opm_description',
        'opm_meta4',
        'opm_code',
        'mother_name',
        'father_name',
        'title_number',
        'zone',
        'section',
        'uf',
        'cpf',
        'id',
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
        return 'opm_code';
    }
}