<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Articles</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </head>
    <body>
        <div style="text-align:center;  margin:0; top:0; position:sticky; z-index:100; background-color:white;">
            <font size="15px">MEN'S BEAUTY</font>
        </div>
        
<div style="padding-left:50px;">

        <h1 class="title">
            {{ $article->title }}
        </h1>

        <div class='article' style="padding-left:100px;">
            <p class='category'>category : <span class="badge rounded-pill bg-secondary">{{$article->articlecategory->name}}</span></p>
        </div>

        <!--<p class="edit">[<a href="/articles/{{ $article->id }}/edit">edit</a>]</p>-->

        <div style="text-align:center;">
        @if($article->image_path)
        <img src="{{$article->image_path}}" width="1000" >
        @else
        <img src="https://mensbeautybucket.s3.ap-northeast-1.amazonaws.com/noimage.png" width="500">
        @endif 
        </div>

        <div class="content">
            <div class="content__post">
                <p>{{ $article->body }}</p>    
            </div>
        </div>


        <div class="card text-dark bg-light mb-3" style="max-width:80%; margin:auto;">

  <div class="card-body">
      <div style="padding-left:50px">
    <h5 class="card-title">みんなの反応</h5>
    </div>
      <div style="padding-left:75px">
    <p class="card-text">
         <div class='comments'>
            @foreach($article->articlereviews as $article_comment)
                <div class='comment'>
                    <p class='user_id'>
                        {{$article_comment->user->name}} : {{ $article_comment->body}}
                    </p>
                </div>
            @endforeach
        <div>
    </p>
  </div>
</div>
        
        <div class="review">
            <form action="/articles/comments" method="POST">
                @csrf
            <div class="body" style="padding-right:50px;">
                <!--<h2>口コミ投稿</h2>-->
                <label for="comment" class="form-label">send a comment</label>
                <input type="hidden" value="{{$article->id}}" name="article_id">
                <textarea name="comment" id="comment" class="form-control" placeholder="コメントをする。"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        </div>
        </div>
        </div>
        </div>
            
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        </div>
    </body>
</html>