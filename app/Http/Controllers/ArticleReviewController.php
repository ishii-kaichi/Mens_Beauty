<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleReview;

class ArticleReviewController extends Controller
{
    public function store(Request $request){
        $input=$request->input();
        ArticleReview::create([
            'body'=>$input['comment'],
            'user_id'=>auth()->user()->id,
            'article_id'=>$input['article_id'],
        ]);
        return redirect('/articles/'.$input['article_id']);
    }
    
}
