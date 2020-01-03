<!doctype html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>vue test</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <h3 class="mt-5">Todo 管理システム</h3>
                <div class="form-group mt-4">
                    <label for="todo">新規Todo</label>
                    <input type="text" class="form-control" id="todo" v-model="new_todo">
                </div>

                <button type="submit" class="btn btn-primary" v-on:click="addTodo">登録</button>
            @{{ todos.length }}
            <table class="table mt-5">
                <thead>
                    <th>ID</th><th>タスク</th><th>完了</th>
                </thead>
                <tbody>
                  <tr v-for="todo in todos" v-bind:key="todo.id">
                    <td>@{{todo.id}}</td>
                    <td>@{{todo.title}}</td>
                    <td><button class="btn btn-secondary" v-on:click="deleteTodo(todo.id)">完了</button></td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- JavaScript -->
<script src="{{ asset('js/app.js')}}"></script>
</body>
</html>