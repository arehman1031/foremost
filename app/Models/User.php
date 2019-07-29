<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class User
 * @package App\Models
 * @version July 27, 2019, 10:51 pm UTC
 *
 * @property string name
 * @property string email
 * @property string password
 * @property integer type
 * @property string remember_token
 */
class User extends Model
{

    public $table = 'users';

    const CREATED_AT	= 'created_at';
    const UPDATED_AT	= 'updated_at';

    public $fillable = [
        'name',
        'email',
        'password',
        'type',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'type' => 'integer',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'type' => 'required'
    ];


}
