<?php

namespace App\Repositories;

use App\Interfaces\ContentRepository;
use App\Models\Article;

class EloquentContentRepository implements ContentRepository 
{
    public function getAllArticles() 
    {
        return Article::all();
    }

    public function getArticleById($articleId) 
    {
        return Article::with('comments.user')->where('id', $articleId)->first();
    }

    public function articleCommentAdd($articleId, array $commentDetails) 
    {
        $article = Article::findOrFail($articleId);

        return $article->comments()->create($commentDetails);
    }
}