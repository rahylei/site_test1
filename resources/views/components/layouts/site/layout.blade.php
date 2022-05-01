<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" >
</head>
<body >    
    <x-layouts.site.navbar/>
    <x-layouts.site.navbar_sticky/>
    {{$main}}

    <x-layouts.site.sitios_interes/>
    <x-layouts.site.footer/>
    <script type="text/javascript" src=" {{asset('js/app.js')}} "></script>
</body>
</html>