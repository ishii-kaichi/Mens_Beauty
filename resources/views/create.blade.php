<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Article</title>
    </head>
    <body>
        <h1>Article Name</h1>
        <form action="/articles" method="POST" enctype="multipart/form-data"> 
        <!--ここのPOSTは通信の名前。ルールの呼び出し。GETは読み込むだけ。-->
        
            @csrf
            
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="article[title]" placeholder="タイトル" value="{{ old('article.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('article.title') }}</p>
            </div>
            
            <div class="body">
                <h2>Body</h2>
                <textarea name="article[body]" placeholder="今日も1日お疲れさまでした。">{{ old('article.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('article.body') }}</p>
            </div>
            
            <div class="category">
                <h2>Category</h2>
               <select name="article[category]">
                    @foreach($articlecategories as $articlecategory)
                        <option value='{{$articlecategory->id}}'>{{$articlecategory->name}}</option>
                    @endforeach
                </select>
            </div>
            
            <div>
                <h2>Image</h2>    
                <input type="file" name="image" placeholder="画像"/>
                <p class="title__error" style="color:red">{{ $errors->first('article.title') }}</p>
            </div>
            
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>