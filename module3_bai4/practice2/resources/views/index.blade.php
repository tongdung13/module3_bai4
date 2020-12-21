<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS -->
    <link href="{{ asset('css/app.scss') }}" rel="stylesheet" type="text/css">

</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md card-header">
                Task List
                <a href="{{ route('tasks.create') }}" class="btn btn-success">Add New</a>
            </div>
            @if(!isset($tasks))
                <h5 class="text-primary"> No file</h5>
            @else
            <table class="table table-bordered">
                <thead class=" card-header thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Task title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Created</th>
                        <th scope="col">Due Date</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($tasks) == 0)
                        <tr>
                            <td colspan="5"><h5 class="text-primary">hien tai chua co task nao duoc tao </h5></td>
                        </tr>
                    @else
                @foreach($tasks as $key => $task)
                        <tr>
                            <td colspan="row">{{++$key}}</td>
                            <td>{{$task->title}}</td>
                            <td>{{$task->content}}</td>
                            <td>{{$task->create_at}}</td>
                            <td>{{$task->due_date}}</td>
                            <td>
                                <img src="{{ asset('storage/images/' . $task->image) }}" alt="" style="width: 150px">
                            </td>
                            <td>
                                <a href="" class="btn btn-primary">Update</a>
                                <a href="{{ route('tasks.destroy', $task->id)}}" onclick="confirm('ban muon xoa khong?')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                @endforeach
                    @endif
                </tbody>
            </table>
            @endif
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
<hr>
<a href="{{ '/' }}">Back</a>
</body>
</html>
