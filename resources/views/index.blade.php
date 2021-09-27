<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Men'sBeauty TOP</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <style>
        a, a:visited, a a:hover, a:active{
            color:inherit
        }
    </style>
    </head>
    <body>
        <div style="text-align:center; vertical-align:middle; margin:0; top:0; position:sticky; z-index:100; background-color:white;">
            <font size="15px">MEN'S BEAUTY</font>
        </div>
        
    <div style="background-color:#ecf0f1; z-index:1;">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin:auto; width:865px; z-index:50;">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="/articles/9" >
                        <img src="https://mensbeautybucket.s3.ap-northeast-1.amazonaws.com/c_skincare.PNG" class="d-block w-100" alt="IMAGE NOT FOUND" width="865px">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="/cosmes/4" >
                        <img src="https://mensbeautybucket.s3.ap-northeast-1.amazonaws.com/c_replica.PNG" class="d-block w-100" alt="IMAGE NOT FOUND" width="865px">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="/salons/17" >
                        <img src="https://mensbeautybucket.s3.ap-northeast-1.amazonaws.com/c_gorilla.PNG" class="d-block w-100" alt="IMAGE NOT FOUND" width="865px">
                    </a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
    
        <p class='create' style="padding-left:15%; margin:auto;" ><a href='/articles/create'class="btn btn-secondary role="button">記事の作成</a></p>

        <div class="row">
        <div class='articles col' style="padding-left:50px; text-align:center" >
            @foreach($articles as $article)
                <div class='article card' style="width:=18rem;">
                    @if($article->image_path)
                    <img src="{{$article->image_path}}" class="card-img-top" alt="loading">
                    @else
                    <img src="https://mensbeautybucket.s3.ap-northeast-1.amazonaws.com/noimage.png" class="card-img-top" alt="loading">                    
                    @endif
                    <div style="color:#808080">
                        <h2 class='title card-title'><a href="/articles/{{$article->id}}">{{ $article->title}}</a></h2>
                    </div>
                    <p class='body card-text'>{{ $article->body}}</p>
                    
                <div style="margin-left:20px; text-align:left;">
                    <p class='category card-text'>category:<span class="badge rounded-pill bg-secondary">{{$article->articlecategory->name}}</span></p>
                </div>
                @if(auth()->user()->likeCheck($article))
                    <form action="/articles/like/{{$article->id}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-secondary">
                        いいね {{$article->articlelikes()}}
                    </button>
                    </form>
                @else
                    <form action="/articles/unlike/{{$article->id}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-light">
                        いいね取消 {{$article->articlelikes()}}
                    </button>
                    </form>
                @endif
                </div>
            @endforeach
        </div>
        
        <div class='cosmes col'>
            @foreach($cosmes as $cosme)
                <div class='cosme card' style="width:90%; margin:5px;">
                    @if($cosme->image)
                            <img src="{{$cosme->image}}" width="275" class="card-img-top" alt="loading" >
                    @else
                            <img src="https://mensbeautybucket.s3.ap-northeast-1.amazonaws.com/noimage.png" class="card-img-top" alt="loading"> 
                    @endif
                    <div style="color:#808080; text-align:center;">
                        <h2 class='name card-title'> <a href="/cosmes/{{$cosme->id}}">{!! $cosme->name!!}</a></h2>
                    </div>
                    <div style="margin-left:20px;">
                        <p class='price card-text'>￥{{ $cosme->price}}-</p>
                    </div>
                    <div style="text-align:center">
                        <p class='body card-text'>{!! $cosme->body !!}</p>
                    </div>
                    <div style="margin-left:20px;">
                        <p class='category card-text'>category:<span class="badge rounded-pill bg-secondary">{{$cosme->cosmecategory->name}}</span></p>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class='salons col'>
            @foreach($salons as $salon)
                <div class='salon card' style="width:90%; margin:5px;">
                    @if($salon->image)
                            <img src="{{$salon->image}}" width="275" class="card-img-top" alt="loading" >
                    @else
                            <img src="https://mensbeautybucket.s3.ap-northeast-1.amazonaws.com/noimage.png" class="card-img-top" alt="loading"> 
                    @endif
                    <div style="color:#808080; text-align:center;">
                        <h2 class='name'><a href="/salons/{{$salon->id}}">{{ $salon->name}}</a></h2>
                    </div>
                    <div style="text-align:center;">
                        <p class='body'>{!!$salon->body!!}</p>
                        
                    </div>
                    <div style="margin-left:20px;">
                        <p class='category card-text'>category:<span class="badge rounded-pill bg-secondary">{{$salon->saloncategory->name}}</span></p>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </body>

</html>
