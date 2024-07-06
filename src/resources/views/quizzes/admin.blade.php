<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クイズ一覧</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <x-app-layout>
        <div class="container mx-auto p-6 bg-white shadow-md rounded my-2">
            <h1 class="text-2xl font-bold mb-6">クイズ編集画面一覧</h1>
            @if (session('status'))
                <div class="alert alert-success mb-4 p-4 bg-green-100 text-green-800 rounded">
                    {{ session('status') }}
                </div>
            @endif
            @if(session('message'))
            <div class="text-red-600 font-bold">
                {{session('message')}}
            </div>
            @endif
            <ul class="space-y-4 my-4">
                @foreach ($quizzes as $quiz)
                    <li class="flex items-center space-x-4 ">
                        <a href="{{ route('quizzes.show', ['id' => $quiz->id]) }}">
                            <x-primary-button>
                                {{ $quiz->name }}
                            </x-primary-button>
                        </a>
                        <a href="{{ route('quizzes.edit', $quiz->id) }}">
                            <x-primary-button class="bg-blue-500 hover:bg-blue-700 text-white">
                                編集
                            </x-primary-button>
                        </a>
                            <x-primary-button class="bg-red-500 hover:bg-red-700 text-white ml-2" onclick="confirmDelete({{ $quiz->id }})">
                                削除
                            </x-primary-button>
                        
                    </li>
                @endforeach
                <div class="mb-4">
                    {{$quizzes->links()}}
                </div>
            </ul>
        </div>
    </x-app-layout>

    <!-- モーダル -->
    <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-1/4 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <h3 class="text-lg font-semibold">本当に削除しますか？</h3>
            <div class="mt-4">
                <button id="confirmDeleteButton" class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded">
                    はい
                </button>
                <button onclick="closeModal()" class="bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded ml-2">
                    いいえ
                </button>
            </div>
        </div>
    </div>

    <form id="deleteForm" action="" method="post" style="display: none;">
        @csrf
        @method('delete')
    </form>

    <script>
        function confirmDelete(id) {
            document.getElementById('deleteModal').style.display = 'block';
            document.getElementById('confirmDeleteButton').onclick = function(event) {
                event.preventDefault(); // デフォルトの動作を防ぐ
                var form = document.getElementById('deleteForm');
                form.action = '/quizzes/' + id;
                form.submit();
            };
        }

        function closeModal() {
            document.getElementById('deleteModal').style.display = 'none';
        }
    </script>
</body>
</html>
