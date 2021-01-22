<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School It</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row my-2">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #0f80d1;">
                    <a class="navbar-brand" href="{{ route('student.index')}}">My School</a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation"></button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('student.index')}}">Student</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-10 mx-auto">
                @if ( session()->has('status'))
                    <div class="alert alert-dismissible alert-success">
                    <strong> {{ session()->get('status') }} </strong>
                    </div>
                @endif
            </div>
        </div>

        <div>
            @yield('content')
        </div>

    </div>
</body>
</html>