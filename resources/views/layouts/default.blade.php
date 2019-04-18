<!DOCTYPE html>
<html lang="zh" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('title','学习Laravel') - laravel</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" charset="utf-8"></script>
</head>

<body style="padding-top: 60px;">
    @include('layouts._header')

    <div class="container">
      <div class="col-md-10">
        @yield('content')

        @include('layouts._footer')
      </div>

    </div>
</body>

</html>
