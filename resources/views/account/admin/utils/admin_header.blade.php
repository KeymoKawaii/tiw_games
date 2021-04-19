<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro.min.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-colors.min.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-rtl.min.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-icons.min.css">

    <title>Dashboard</title>
</head>
<body class="d-flex flex-row">
<aside class="mx-0">
    <nav>
        <ul class="sidenav-m3" style="height:100vh !important;">
            <li class="title">Welcome {{Auth::user()->name}}</li>
            <li>
                <form action="{{route('dashboard')}}" method="post">
                    @csrf
                    <input type="submit" value="Logout" name="logout" class="w-100 button alert">
                </form>
            </li>
            <li class="active"><a href="{{route('dashboard')}}"><span class="mif-home icon"></span>Dashboard</a></li>
            <li class="stick-left">
                <a class="dropdown-toggle" href="#"><span class="mif-tree icon"></span>Component</a>
                <ul class="d-menu" data-role="dropdown" style="display: none;">
                    <li>
                        <button class="button w-100" id="dropdown_game">Game</button>
                        <div class="pos-relative">
                            <div data-role="dropdown" data-toggle-element="#dropdown_game">
                                <a href="{{route('component', ['component'=>'game', 'type'=>'card'])}}" class="w-100 button text-left">Card</a>
                                <a href="{{route('component', ['component'=>'game', 'type'=>'single'])}}" class="w-100 button text-left">Single</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button class="button w-100" id="dropdown_library">Library</button>
                        <div class="pos-relative">
                            <div class="" data-role="dropdown" data-toggle-element="#dropdown_library">
                                <a href="{{route('component', ['component'=>'library', 'type'=>'card'])}}" class="w-100 button text-left">Card</a>
                                <a href="{{route('component', ['component'=>'library', 'type'=>'single'])}}" class="w-100 button text-left">Single</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
