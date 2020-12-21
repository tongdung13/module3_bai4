<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
    <div class="flex-center position-ref fixed-height">
        <div class="content">
            <div class="title m-b-md">
                <div class="card-header">
                    Add New Task
                </div>

            </div>
            <form class="text-left" method="post" action="{{ route('tasks.store') }}" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputTitle">Task Title</label>
                    <input type="text"
                    class="form-control"
                    id="inputTitle"
                    name="inputTitle"
                    required>
                </div>
                <div class="form-group">
                    <label for="inputContent">Task Content</label>
                    <textarea class="form-control"
                              id="inputContent"
                              name="inputContent"
                              required></textarea>
                </div>
                <div class="form-group">
                    <label for="inputCreate">Create</label>
                    <input type="text"
                    class="form-control"
                    id="inputCreate"
                    name="inputCreate"
                    required>
                </div>
                <div class="form-group">
                    <label for="inputDueDAte">Due Date</label>
                    <input type="text"
                    class="form-control"
                    id="inputDueDate"
                    name="inputDueDate"
                    required>
                </div>
                <div class="form-group">
                    <label for="inputFileName">File Name</label>
                    <input type="text" class="form-control"
                    id="inputFileName"
                    name="inputFileName"
                    required>
                    <input type="file"
                    class="form-control-file"
                    id="inputFile"
                    name="inputFile">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                <hr>
            <a href="{{ '/' }}">Back</a>
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
</body>
</html>
