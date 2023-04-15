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
    </head>
    <body>
        <div id="box-all">
            <section class="header">
                <div class="header-wrap">
                    <div class="container-fluid">
                        <div class="header-title">
                            @foreach($module_config as $data)
                            <div class="item-inner">
                                <h6>{{$data->id}}</h6>
                                <h6>{{$data->name_module}}</h6>
                                <h6>{{$data->name_short}}</h6>
                                <h6>{{$data->summary}}</h6>
                                <h6>{{$data->des}}</h6>
                            </div>
                            @endforeach
                        </div>
                        <form action="{{URL::to('/save-module')}}" method="post">
                            {{ csrf_field() }}
                            {{ $controller->form('name_module'); }}
                            {{ $controller->form('name_short'); }}
                            {{ $controller->form('summary'); }}
                            <input type="submit" value="thêm"/>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
