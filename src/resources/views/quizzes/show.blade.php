<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $quizzes->name }} - クイズ詳細</title>
    <style>
        .correct {
            color: green;
            font-weight: bold;
        }
        .incorrect {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <x-app-layout>
        <div class="container">
            <h1>{{ $quizzes->name }}</h1>
            <h2>質問一覧</h2>
            <ul>
                @foreach ($quizzes->questions as $question)
                    <li>
                        <p>{{ $question->text }}</p>
                        @if ($question->image)
                            <img src="{{ $question->image }}" alt="Question Image">
                        @endif
                        <ul>
                            @foreach ($question->choices as $choice)
                                <li>
                                    <button class="choice-btn" data-correct="{{ $choice->is_correct }}">
                                        {{ $choice->text }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-app-layout>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('.choice-btn');
            buttons.forEach(button => {
                button.addEventListener('click', (event) => {
                    const isCorrect = event.target.dataset.correct === '1';
                    if (isCorrect) {
                        event.target.classList.add('correct');
                        event.target.innerHTML += ' (正解)';
                    } else {
                        event.target.classList.add('incorrect');
                        event.target.innerHTML += ' (不正解)';
                    }
                    // 他の選択肢のボタンを無効にする
                    const siblingButtons = event.target.parentNode.parentNode.querySelectorAll('.choice-btn');
                    siblingButtons.forEach(sibling => {
                        sibling.disabled = true;
                    });
                });
            });
        });
    </script>
</body>
</html>
