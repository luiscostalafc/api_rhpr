<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Model;

class Inactive extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inactive';

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
        'hr_id',
        'period',
        'start_date',
        'inactive_id',
        'inactive_type',
        'rg',
        'name',
        'birth_date',
        'gender',
        'position',
        'group',
        'street',
        'street_type',
        'class',
        'phone_id',
        'phone_local',
        'phone_type',
        'phone',
        'street',
        'number',
        'complement',
        'district',
        'city',
        'cep',
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