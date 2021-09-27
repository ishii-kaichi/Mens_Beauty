<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Cosme;
use App\Salon;
use App\ArticleCategory;
use App\ArticleReview;
use Storage;

class ArticleController extends Controller
{
    public function index(Article $article, Salon $salon, Cosme $cosme){
        return view('index')->with([
            'articles'=>$article->get(),
            'salons'=>$salon->get(),
            'cosmes'=>$cosme->get(),
            ]);
    }
    
    public function create(ArticleCategory $article_category){
        return view('create')->with([
            'articlecategories'=>$article_category->get()
        ]);
    }
    
    public function store(Request $request){
        // s3アップロード開始
        // dd($request);
        $image = $request->file('image');
        if($image){
            $path = Storage::disk('s3')->putFile('', $image, 'public');
            $fullPath = Storage::disk('s3')->url($path);
        }else{
            $fullPath=null;
        }
        
        $input=$request->input();
        $article=Article::create([
            'title'=>$input['article']['title'],
            'body'=>$input['article']['body'],
            'user_id'=>auth()->user()->id,
            'article_categories_id'=>$input['article']['category'],
            'image_path'=>$fullPath,
        ]);
        return redirect('/articles/'.$article->id);
    }
    
    public function show(Article $article, ArticleReview $article_review){
        return view('article.show')->with([
            'article'=>$article,
            // 'article_reviews'=>$article_review->get(),
        ]);
    }
}

