<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'absences';

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
        'id',
        'name',
        'code',
        'position',
        'rg',
        'opm_meta4',
        'opm_description',
        'incident_code',
        'incident_description',
        'amount',
        'start_date',
        'end_date',
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