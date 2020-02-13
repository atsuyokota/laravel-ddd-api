<?php

namespace Infrastructure\Eloquent;

use Illuminate\Database\Eloquent\Model;

class ArticleEloquent extends Model
{
    /**
     * @var string
     */
    protected $table = 'articles';

    protected $fillable = ['title', 'description', 'author'];
}
