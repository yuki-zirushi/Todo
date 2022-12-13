<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/reset.css">
</head>

<body>
  <div class="container">
    <div class="card">
      <p class="title mb-15">Todo List</p>
      <div class="todo">
        <form action="#" method="post" class="flex between mb-30">
          <input type="text" class="input-add" name="content">
          <input type="submit" class="button-add" value="追加">
        </form>
        <table>
          <tbody>
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>更新</th>
              <th>削除</th>
            </tr>
            @foreach ($todos as $todo)
            <tr>
              <td>{{$todo->created_at}}</td>
              <td>{{$todo->content}}</td>
              <td>
                <button class="button-update">更新</button>
              </td>
              <td>
                <button class="button-delete">削除</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>