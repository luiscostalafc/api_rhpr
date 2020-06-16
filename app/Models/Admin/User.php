<?php

namespace App\Models\Admin;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements JWTSubject
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

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
        'name',
        'rg',
        'cpf',
        'workplace',
        'password',
        'strikes',
        'blocked',
        'reset',
        'system_id'
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
     * The attributes don't list.
     *
     * @var array
     */
    protected $hidden = ['password'];

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

    public function getJWTIdentifier () {
        return $this->getKey();
    }

    public function getJWTCustomClaims () {
        return [];
    }

    public function systems()
    {
        return $this->belongsTo('App\Models\Admin\System');
    }

    public function phones()
    {
        return $this->hasMany('App\Models\Admin\Phone');
    }

    public function emails()
    {
        return $this->hasMany('App\Models\Admin\Email');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Admin\Permission', 'user_has_permissions');
    }
}
