<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>#</th>
            <th>name</th>
            <th>email</th>
        </tr>
        @if(count($tasks) == 0)
            <tr>
                <td>ko du lieu</td>
            </tr>
        @else
        @foreach($tasks as $key => $task)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $task['name'] }}</td>
                <td>{{ $task['email'] }}</td>
            </tr>


        @endforeach
        @endif
    </table>
</body>
</html>
