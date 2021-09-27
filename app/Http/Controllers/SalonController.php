<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salon;

class SalonController extends Controller
{
    public function show(Salon $salon){
        return view('salon.show')->with([
            'salon'=>$salon,
            // 'article_reviews'=>$article_review->get(),
        ]);
    }
}
