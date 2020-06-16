<?php

namespace App\Models\Admin;

use Jenssegers\Mongodb\Eloquent\Model;

class Log extends Model
{
    protected $connection = 'mongodb';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'logs';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = '_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rg',
        'name',
        'ip',
        'url',
        'query',
        'status_request',
        'created_at',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['_id'];

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

}
