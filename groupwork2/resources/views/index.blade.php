<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}" />
    <script src="{{ 'js/index.js' }}" defer></script>
</head>

<body>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="/logout">Sign out</a>
        </div>
    </div>
    <div class="Animated">
        <h3>Greenwich University</h3>
    </div>
    <div class="Animated">
        <span>
            <h4>Student List</h4>
        </span>
    </div>
    @if (Auth::guard('web')->user()) 
        @if (Auth::guard('web')->user()->role == 'admin')
            <div class="function">
                <a href="{{ route('add_view') }}" class="btn btn-primary">Add a student</a>
            </div>
        @endif
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php $n = 1; ?>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $n++ }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
