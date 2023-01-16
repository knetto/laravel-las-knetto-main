<!DOCTYPE html> 
<html lang="en">
<head>
    <link href=
    "https://fonts.googleapis.com/css?family=Nunito:200,600" 
    rel="stylesheet">   
    <!--Bootstrap --> 
    <link rel="stylesheet" href="{{asset('sass/app.scss')}}">
    <!-- Scripts --> 
    @vite(['resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content=
     "width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAS</title>
</head>
<body>
    <x-navbar/>
    @include('components/meldingen')
    <div class="text-center container mt-5">
        @yield ('content')
    </div>

</body>
</html>