<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project-ground</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/admin/log/style.css')}}"/>
</head>
<body>
    <div class="container">
        <div class="row center mt-5">
            <div class="col-4">
                <div class="card pos_re">
                    <div class="card-header text-center bg-danger-subtle ">
                        Login
                    </div>
                    <form action="{{ route('/submit-form') }}" method="POST">
                        @csrf
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <label for="inputPassword5" class="form-label">User</label>
                                <input type="text" id="inputPassword5" class="form-control" name="user">
                                <p id="userError" style="color: red;"></p>
                            </li>
                            <li class="list-group-item">
                                <label for="inputPassword5" class="form-label">Password</label>
                                <input type="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock" name="password">
                                <p id="passError" style="color: red;"></p>
                            </li>
                            @if ($errors->has('login_failed'))
                            <div class="alert alert-danger alert-error">
                                {{ $errors->first('login_failed') }}
                            </div>
                            @endif
                            <li class="list-group-item">
                                <button type="button" class="btn btn-danger" id="submitform">Submit</button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/log_admin/logcheck.js') }}"></script>
</body>
</html>
