<!DOCTYPE html>

<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200, 600" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vliegtuigjes</title>

</head>

<body>
    <x-navbar/>
    @include('components/meldingen')
    {{-- met dank aan Menno Kievit, valt niet onder plagiaat --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{-- dat was het, fijne dag nog --}}

    <div class="text-center container mt-5">
        <div class="text-center container mt-5">
            @yield ('content')
        </div>
    </div>

    
    
