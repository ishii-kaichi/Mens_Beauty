<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Salons</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </head>
    <body>
        <div style="text-align:center;  margin:0; top:0; position:sticky; z-index:100; background-color:white;">
            <font size="15px">MEN'S BEAUTY</font>
        </div>
        
    <div style="margin-left:10%;">
        <h1 class="name">
            {{ $salon->name }}
        </h1>
        
        <!--<p class="edit">[<a href="/salons/{{ $salon->id }}/edit">edit</a>]</p>-->
        <div style="text-align:center;">
            <img src="{{$salon->image}}" width="650">            
        </div>
 
        <div class="content">
            <div class="content__post">
                <p>{!! $salon->body !!}</p>    
            </div>
        </div>


        
        <div class='salon'>
            <p class='category'>category:<span class="badge rounded-pill bg-secondary">{{$salon->saloncategory->name}}</span></p>
        </div>
    </div>
    
        <div id="map" style="height:500px; width:85%; margin:auto;">
	    </div>
	    <script>
            function initMap() {
                // welcome.blade.phpで描画領域を設定するときに、id=mapとしたため、その領域を取得し、mapに格納します。
                map = document.getElementById("map");
                const lat=@json($salon->lat);
                const lng=@json($salon->lng);
                console.log(lat);
                // 東京タワーの緯度は35.6585769,経度は139.7454506と事前に調べておいた
                let salon = {lat: lat, lng: lng};
                // オプションを設定
                opt = {
                    zoom: 13, //地図の縮尺を指定
                    center: salon, //センターを東京タワーに指定
                };
                // 地図のインスタンスを作成します。第一引数にはマップを描画する領域、第二引数にはオプションを指定
                mapObj = new google.maps.Map(map, opt);
                
                const salonName=@json($salon->name);                
                marker = new google.maps.Marker({
                // ピンを差す位置を決めます。
                    position: salon,
	                 // ピンを差すマップを決めます。
                    map: mapObj,
                	// ホバーしたときに「tokyotower」と表示されるようにします。
                    title: salonName,
                });
            }
	    </script>
	    <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key={{config('app.googlemapapi')}}&callback=initMap" async defer>
	    </script>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>