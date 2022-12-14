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
      @if (count($errors) > 0)
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      @endif
      <div class="todo">
        <form action="/todos/create" method="post" class="flex between mb-30">
          @csrf
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
              <td>
                <input type="text" class="input-update" name="content" value="{{$todo->content}}" form="{{$todo->id}}">
              </td>
              <td>
                <form action="{{ route('todos.update', ['id' => $todo->id, 'content' => $todo->content]) }}" id="{{$todo->id}}" method="post">
                  @csrf
                </form>
                <button class="button-update" form="{{$todo->id}}">更新</button>
              </td>
              <td>
                <form action="{{ route('todos.delete', ['id' => $todo->id]) }}" method="post">
                  @csrf
                  <button class="button-delete">削除</button>
                </form>
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