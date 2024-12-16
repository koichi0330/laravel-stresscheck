<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ストレスチェックフォーム</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">ストレスチェックフォーム</h1>
        <form action="/submit" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="user_name" class="form-label">お名前</label>
                <input type="text" name="user_name" id="user_name" class="form-control" required>
            </div>
            @foreach ($questions as $index => $question)
            <div class="mb-3">
                <label for="question{{ $index }}" class="form-label">{{ $index + 1 }}. {{ $question->content }}</label>
                <select name="answers[{{ $question->id }}]" id="question{{ $index }}" class="form-select" required>
                    <option value="1">全くそう思わない</option>
                    <option value="2">あまりそう思わない</option>
                    <option value="3">どちらでもない</option>
                    <option value="4">そう思う</option>
                    <option value="5">非常にそう思う</option>
                </select>
            </div>
            @endforeach
            <button type="submit" class="btn btn-success w-100">結果を送信</button>
        </form>
    </div>
</body>
</html>