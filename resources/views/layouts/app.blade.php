<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
{{--@extends('head')--}}
@livewireStyles
@livewireScripts
{{--@livewireAssets--}}



@include('head')
@php
    use \Illuminate\Support\Facades\View;
    $user = auth()->user();
    $__data['user'] = $user;
@endphp

<div class="mx-auto">
    @yield('content')
{{--    @yield('content', View::make($__data[0], ['data' => $__data, 'user' => $user]))--}}
</div>

{{--@extends('footer')--}}
@include('footer')


<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
