<?php

namespace App\Interfaces;

interface ContentRepository 
{
    public function getAllArticles();
    public function getArticleById($articleId);
}