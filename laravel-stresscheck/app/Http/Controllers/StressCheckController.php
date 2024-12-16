<?php
namespace App\Http\Controllers;
use App\Models\StressCheck;
use App\Models\Question;
use Illuminate\Http\Request;
class StressCheckController extends Controller
{
    // ストレスチェックフォームを表示する
    public function showForm()
    {
        // 質問データを取得
        $questions = Question::all();
        return view('form', compact('questions'));
    }
    // ストレスチェック結果を処理する
    public function submitForm(Request $request)
    {
        // バリデーション
        $validated = $request->validate([
            'user_name' => 'required|string|max:255',
            'answers' => 'required|array',
            'answers.*' => 'integer|between:1,5',
        ]);
        // ユーザー名
        $userName = $validated['user_name'];
        // 質問IDとその回答を処理
        foreach ($validated['answers'] as $questionId => $score) {
            StressCheck::create([
                'user_name' => $userName,  // user_nameは通常のフォームに対応するカラムとして保存します。
                'question_id' => $questionId,
                'score' => $score,
            ]);
        }
        // 結果の送信後、確認ページなどにリダイレクト
        return redirect()->route('stressCheck.thankYou');  // 結果送信後にリダイレクトするページ（例：thankYou）
    }
    // 結果送信後の確認ページ
    public function thankYou()
    {
        return view('thank_you');
    }
}