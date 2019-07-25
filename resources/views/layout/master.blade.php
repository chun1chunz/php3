<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pt13312-@yield('title')</title>
</head>
<body>
<div class="wrapper" style="border:1px solid #ccc">
    <div class="header" style="border:1px solid #ccc"><h2>Header</h2></div>
    <div class="navbar">
            <ul>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
                <li><a href="">6</a></li>
            </ul>
    </div>
    <div class="content" style="border:1px solid #ccc">
            <h2>@yield('table_name') table</h2>
            <div>
                @yield('table')
            </div>
    </div>
    <div class="footer" style="border:1px solid #ccc"><h2>Footer</h2></div>
    @yield('custom')
</div>
</body>
</html>