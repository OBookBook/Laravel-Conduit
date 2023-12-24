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
        <h1>タスクの追加</h1>
        <form action="/todos" method="POST">
            @csrf
            <input type="text" name="title" placeholder="タスクを入力する">
            <button type="submit">保存する</button>
        </form>
    </div>
</body>

</html>
