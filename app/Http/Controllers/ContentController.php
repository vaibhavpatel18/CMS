<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ContentRepository;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    private ContentRepository $contentRepository;

    public function __construct(ContentRepository $contentRepository) 
    {
        $this->contentRepository = $contentRepository;
    }

    public function index()
    {
        $articles = $this->contentRepository->getAllArticles();
        
        return view('pages.content.index', compact('articles'));
    }

    public function show(Request $request, $id)
    {
        //$articleId = $request->route('id');
        $article = $this->contentRepository->getArticleById($id);
        //dd($article->comments[0]->user->name);
        //$comments = $this->contentRepository->getComments($id);


        return view('pages.content.show', compact('article'));
    }

    public function articleCommentAdd(Request $request){
        
        $commentDetails = [
            'body' => $request->comment,
            'user_id' => Auth::id()
        ];
        $articleId = $request->article_id;

        $this->contentRepository->articleCommentAdd($articleId, $commentDetails);

        return redirect()->route('article.show', ['id' => $articleId]);
    }
    
}
