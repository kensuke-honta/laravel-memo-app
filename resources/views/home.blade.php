<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>memoアプリ</title>
</head>
<body>
  <h1>ホーム画面</h1>
  <p>以下から選んでください</p>
  <a href="{{ route('memo.showIndex') }}">一覧画面を見る</a>
  <a href="{{ route('memo.create') }}">memoの新規作成</a>
</body>
</html>
