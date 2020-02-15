<?php

namespace Demo\Infrastructure\Translator;

use Demo\Domain\Model\Article;
use Demo\Infrastructure\Eloquent\ArticleEloquent;

/**
 * Class ArticleTranslator
 * @package Demo\Infrastructure\Translator
 */
class ArticleTranslator
{
    public static function toModel(ArticleEloquent $eloquent): Article
    {
        return new Article(
            $eloquent->id,
            $eloquent->title,
            $eloquent->description,
            $eloquent->author
        );
    }
}
