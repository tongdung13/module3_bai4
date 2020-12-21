<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
            integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
            crossorigin="anonymous"></script>
</head>
<body>
 <div class="container">
     <div class="card">
         <div class="card-header">
             Add New
         </div>
         <div class="card-header">
             <a href="{{ route('contacts.index') }}">Home</a>
         </div>
         <div class="form-group">
             <form method="post" action="{{ route('contacts.store') }}" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group">
                     <label>Name</label>
                     <input type="text" name="name" class="form-control">
                 </div>
                 <div class="form-group">
                     <label>Full Name</label>
                     <input type="text" name="fullName" class="form-control">
                 </div>
                 <div class="form-group">
                     <label>Email</label>
                     <input type="text" name="email" class="form-control">
                 </div>
                 <div class="form-group">
                     <label>Image</label>
                     <input type="text" name="fileName" class="form-control">
                     <input type="file" name="nameFile">
                 </div>
                 <input type="submit" value="ADD" class="btn btn-success">
             </form>
         </div>
     </div>
 </div>
</body>
</html>
