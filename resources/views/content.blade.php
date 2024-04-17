@extends('head')

@php
    $user = auth()->user();
    $__data['user'] = $user;
@endphp

@yield('content', View::make($__data[0], ['data' => $__data, 'user' => 123]))

@extends('footer')
