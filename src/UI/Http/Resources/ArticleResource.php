<?php

namespace Demo\UI\Http\Resources;

use Demo\Domain\Model\Article;

class ArticleResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Article $article
     * @return array
     */
    public function toArray(Article $article)
    {
        return [
            'id' => $article->id(),
            'title' => $article->title(),
            'description' => $article->description(),
        ];
    }

    public function collection($items)
    {
        if (empty($items)) {
            return [];
        }
        $data = $items->map(function ($item) {
            return $this->toArray($item);
        });
        return array_values($data->toArray());
    }
}
