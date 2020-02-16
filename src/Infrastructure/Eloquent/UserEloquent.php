<?php

namespace Demo\Infrastructure\Eloquent;

use Illuminate\Database\Eloquent\Model;

class UserEloquent extends Model
{
    /**
     * @var string
     */
    protected $table = 'users';

    //protected $fillable = ['name', 'email', 'gender'];
}
