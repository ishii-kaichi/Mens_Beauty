<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cosme;

class CosmeController extends Controller
{

    public function show(Cosme $cosme){
        return view('cosme.show')->with([
            'cosme'=>$cosme,
            // 'article_reviews'=>$article_review->get(),
        ]);
    }
}
