<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        header{
            background-color:blueviolet
        }
        footer{
            background-color:yellow
        }
        aside{
            background-color:red
            float:left
        }
        div.content{
            background-color:burlywood
            float:right
        }
    </style>
</head>
<body>
    <header>
        <div>Header</div>
    </header>
    <main>
        <div class="navigation">Navigation</div>
        <aside>
            @section('side-bar')
                Side bar Layout Master
            @show
        </aside>
        <div class="content">@yield('content')</div>
    </main>
    <footer>Footer</footer>
</body>
</html>

@yield('js-custom')
