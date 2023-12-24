<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo</title>
    <style>
        body {
            font-family: "Helvetica Neue", Arial, "Hiragino Kaku Gothic ProN", "Hiragino Sans", Meiryo, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            margin-bottom: 20px;
        }

        form input[type="text"] {
            flex: 1;
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        form input[type="submit"] {
            width: 150px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            color: #fff;
            background-color: #007BFF;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        .edit,
        .delete {
            display: inline-block;
            padding: 10px;
            border: none;
            border-radius: 4px;
            color: #fff;
            text-decoration: none;
            margin-right: 5px;
        }

        .edit {
            background-color: #FFC107;
        }

        .delete {
            background-color: #DC3545;
        }

        .new-task {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            color: #fff;
            background-color: #007BFF;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Todo List</h1>

        <a class="new-task" href="/todos/new">タスクを追加する</a>

        <table>
            <thead>
                <tr>
                    <th>タスク</th>
                    <th>アクション</th>
                </tr>
            </thead>
            <tbody>
                <!-- ここは後から動的コンテンツに置き換える -->
                @foreach($todos as $todo)
                <tr>
                    <td>{{ $todo->title }}</td>
                    <td>
                        <a class="edit" href="/todos/{{ $todo->id }}/edit">編集</a>
                        <form action="/todos/{{ $todo->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete" onclick="return confirm('本当に削除していいですか？')">削除</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                <!-- <tr>
                    <td>サンプルタスク</td>
                    <td>
                        <a class="edit" href="#">編集</a>
                        <a class="delete" href="#">削除</a>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>
</body>

</html>
