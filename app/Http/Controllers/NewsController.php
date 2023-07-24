<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class NewsController extends Controller
{   
    use ResponseTrait;


    public function getNews(Request $request){
        
        $news_type=$request->type;
        $limit = $request->limit ?? 20;

        $articles = Article::where('news_type',$news_type)->latest()->paginate($limit);
        return $this->success('success',ArticleResource::collection($articles));
    }
}
