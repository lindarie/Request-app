<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{__('customlang.Home')}}</title>
    <link rel="stylesheet" href={{ asset('css/app.css')}}>
    <link rel="stylesheet" href={{ asset('css/style.css')}}>
</head>
<body>

<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('customlang.Welcome') }}!
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if (Auth::user()->groupID==1)
                        <img src="{{ asset('img/ikona.png') }}">
                    <div class="newRequest">
                        <button type="button" onclick="newRequest()">{{__('customlang.Create a new request')}}</button></div>
                </div>
                <script>
                    function newRequest() {
                        window.location.href="/create/request";
                    }
                </script>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>
