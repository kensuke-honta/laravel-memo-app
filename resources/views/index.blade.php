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
  <h1>一覧表示画面</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>メモの題名</th>
        <th>メモの詳細</th>
      </tr>
    </thead>
    <tbody>
      <!-- データはここにループで表示する -->
      <tr>
        <td>1</td>
        <td>メモの題名1</td>
        <td>メモの詳細1</td>
        <td>
          <a href="{{ route('memo.detail') }}">詳細・編集</a>
        </td>
      </tr>
      <!-- データはここまで -->
    </tbody>
  </table>
  <button type="button" onClick="history.back()">戻る</button>
</body>
</html>
