<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Localization Example</title>
</head>
<body>
    <div id="app">
        <div style="background-color:#343a40">
            <nav class="  navbar-dark bg-dark " >
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale');
                    @endphp
                        <li class="nav-item dropdown">
                            <a id="navbarDropDown"  class ="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                @switch($locale)
                                    @case('en')
                                    <img width="10" src="{{asset('img/en.png')}}" alt="">
                                    English
                                    @break
                                    @case('kz')
                                    <img width="10" src="{{asset('img/kz.png')}}" alt="">
                                    Қазақ тілі
                                    @break
                                    @case('ru')
                                    <img width="10" src="{{asset('img/ru.png')}}" alt="">
                                    Русский язык
                                    @break
                                    @default
                                    <img width="10" src="{{asset('img/en.png')}}" alt="">
                                    English
                                @endswitch
                                <span class="caret">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class ="dropdown-item" href="en"><img width="10" src="{{asset('img/en.png')}}" alt="">English</a>
                            <a class ="dropdown-item" href="kz"><img width="10" src="{{asset('img/kz.png')}}" alt="">Қазақ тілі</a>
                            <a class ="dropdown-item" href="ru"><img width="10" src="{{asset('img/ru.png')}}" alt="">Русский язык</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <main class="py-4">
        @yield('content')
        </main>
    </div>
</body>
</html>