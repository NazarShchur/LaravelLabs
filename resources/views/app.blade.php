<html lang="UA">
<head>
    <title>
        @yield('title', 'Laravel')
    </title>
    <style>
        .container{
            padding-left: 100px;
            padding-right: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
