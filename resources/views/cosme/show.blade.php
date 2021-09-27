<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cosmes</title>
        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
        <!--<link rel="stylesheet" href="/css/app.css">-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </head>
    <body>
        <div style="text-align:center;  margin:0; top:0; position:sticky; z-index:100; background-color:white;">
            <font size="15px">MEN'S BEAUTY</font>
        </div>
        
        <div class="row">
        <div class="col" style="text-align:center;">
            <img src="{{$cosme->image}}" width="500" >
        </div>
        <div class="col">

            <h1 class="name">
                {!! $cosme->name !!}
            </h1>
            <p class="price"> ¥{{ $cosme->price }}- </p>
             <!--<p class="edit">[<a href="/cosmes/{{ $cosme->id }}/edit">edit</a>]</p>-->
            <div class='cosme'>
                <p class='category'>category:<span class="badge rounded-pill bg-secondary">{{$cosme->cosmecategory->name}}</span></p>
            </div>
            <div class="content">
                <div class="content__post">
                    <p>{!! $cosme->body !!}</p>    
                </div>
            </div>
        </div>
        </div>

        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>