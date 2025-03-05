<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="icon" type="image/x-icon" href="/myFavIcon.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    <div class="min-vh-100">
        {{$slot}}
    </div>

</body>
</html>