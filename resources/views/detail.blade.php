<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>memoアプリ</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1>詳細画面</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>メモの題名</th>
        <th>メモの詳細</th>
        <th>作成日</th>
        <th>編集日</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      <!-- データはここにループで表示する -->
      <tr>
        <td>1</td>
        <td>メモの題名1</td>
        <td>メモの詳細1</td>
        <td>2024-05-09</td>
        <td>2024-05-09</td>
        <td>
          <a href="{{ route('memo.update') }}">編集する</a>
          <button>削除</button>
        </td>
      </tr>
      <!-- データはここまで -->
    </tbody>
  </table>
  <button type="button" onClick="history.back()">戻る</button>
</body>
</html>
