<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>CMS-PROJECT</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}"/>
        <link rel="stylesheet" href="{{ asset('css/admin/log/style.css')}}"/>
    </head>
    <body>
         <div id="app">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 alert  alert-primary nav-admin">
                    <div class="alert alert-success clear-bor" role="alert">
                        Admin web laravel
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active dropdown-toggle" aria-current="page" href="#">Product</a>
                            <div class="collapse" id="product-menu">
                              <ul class="nav flex-column">
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Product 1</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Product 2</a>
                                </li>
                              </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News</a>
                        </li>
                    </ul>
                </div>
                <div class="col-9 clear-padding">
                    <div class="alert alert-success clear-bor" role="alert">
                        Admin web laravel
                    </div>
                    <div class="container">
                        <div class="row row_col">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
