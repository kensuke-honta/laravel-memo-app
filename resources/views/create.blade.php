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
  <h1>memo新規作成画面</h1>
  <table>
    <thead>
      <tr>
        <th>メモの題名</th>
        <th>メモの詳細</th>
      </tr>
    </thead>
    <tbody>
      <!-- データはここにループで表示する -->
      <tr>
        <td><input type="text" placeholder = "題名を入力してください"></td>
        <td><input type="textarea" placeholder = "メモ詳細を入力してください"></td>
      </tr>
    </tbody>
  </table>
  <button>新規登録</button>
  <button type="button" onClick="history.back()">戻る</button>
</body>
</html>
