<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クイズ編集</title>
</head>
<body>
    <h1>クイズ編集</h1>

    <form action="{{ route('quizzes.update', $quizzes->id) }}" method="POST">
        @csrf
        @method('PATCH')
        {{-- formのmethodにpacthを指定するときは上のように打たないとダメ（デフォルトに指定されていないから） --}}
        <label for="name">タイトル</label>
        <input type="text" name="name" id="name" value="{{ old('name', $quizzes->name) }}">
        <button type="submit">更新</button>
    </form>

    <a href="{{ route('quizzes.index') }}">クイズ一覧に戻る</a>
</body>
</html>
