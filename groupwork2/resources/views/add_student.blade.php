<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/create.css') }}" />
</head>


<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
                  <div class="col-md-12 text-center">
                    <h3 class="animation"> Add a student </h3>
                  </div>
                  
            <form action="/add-submit" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('homepage') }}" class="btn btn-secondary">Back to Student List</a>
            </form>
            
        </div>
    </div>
</div>