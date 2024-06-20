<?php

namespace App\Observers;

use App\Models\Article;

class ArticleObserver
{
    /**
     * Handle the Article "creating" event.
     *
     * @param Article $article
     * @return void
     */
    public function creating(Article $article): void
    {
        $article->slug = str_slug($article->title);
    }

    /**
     * Handle the Article "updating" event.
     *
     * @param Article $article
     * @return void
     */
    public function updating(Article $article): void
    {
        $article->slug = str_slug($article->title);
    }
}
