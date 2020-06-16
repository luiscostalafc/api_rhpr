<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Model;

class InactiveDependents extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inactive_dependents';

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
        'gender',
        'birth_date',
        'agreement',
        'kinship',
        'start_date',
        'end_date',
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