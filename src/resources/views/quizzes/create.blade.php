<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>クイズ新規作成</title>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                フォーム
            </h2>
        </x-slot>
        <form action="{{route('quizzes.store')}}" method="POST">
            @csrf
        <div class="max-w-7xl mx-auto px-6">
            @if(session('message'))
            <div class="text-red-600 font-bold">
                {{session('message')}}
            </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                
                <div class="w-full flex flex-col">
                    <label for="body" class="font-semibold mt-4">クイズ名</label>
                    <textarea name="name" id="name" cols="30" rows="10" class="w-auto py-2 border border-gray-300 rounded-md"></textarea>
                </div>
        <x-primary-button class="mt-4">
            新規作成する
        </x-primary-button>
    </div>
</form>
    </x-app-layout>
</body>
</html>
