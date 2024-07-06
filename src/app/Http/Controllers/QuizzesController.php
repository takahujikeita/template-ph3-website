<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    public function index()
    {
        // $quizzes = Quiz::all();
        $quizzes = Quiz::paginate(20);
        return view('quizzes.index', compact('quizzes'));
    }

    public function show($id){
        // quizzesテーブルを取得後にquestionsテーブルとchoicesテーブルを紐づける。
        // findOrFailはエラーの具体的な内容を返す
        $quizzes=Quiz::with(['questions.choices'])->findOrFail($id);
        return view('quizzes.show',compact('quizzes'));
    }

    public function edit($id){
        $quizzes = Quiz::findOrFail($id);
        return view('quizzes.edit',compact('quizzes'));
    }

    // クイズ更新処理
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $quizzes = Quiz::findOrFail($id);
        $quizzes->name = $request->name;
        $quizzes->save();

        return redirect()->route('quizzes.admin')->with('status', '更新されました！');
    }

    // クイズ削除用処理
    public function destroy(Request $request,$id){
        $quiz=Quiz::findOrFail($id);
        $quiz->delete();
        // ソフトデリートを実行している

        return redirect()->route('quizzes.admin')->with('message', '削除しました');
        return redirect()->route('quizzes.admin');
    }

    public function admin()
    {
        // Allでとってきてペジネート
        $quizzes = Quiz::paginate(20);
        // 管理画面のロジックを実装
        return view('quizzes.admin', compact('quizzes'));
    }

    // クイズ新規作成
    public function create(){
        $quizzes=Quiz::all();
        return view('quizzes.create',compact('quizzes'));
    }

    // クイズの投稿データ保存
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:100',
        ]);
    
        Quiz::create([
            'name' => $request->name,
        ]);
    
        return redirect()->route('quizzes.create')->with('message', '新しいクイズのタイトルを作成しました！');
    }
}
