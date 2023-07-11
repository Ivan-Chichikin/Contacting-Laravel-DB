<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title-block') </title>
    <link rel="stylesheet" href="/css/app.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    @include('includes.header')

    @if(Request::is('/')) <!-- Если находимся на главной странице, показываем блок hero-->
        @include('includes.hero')
    @endif

    <div class="container mt-5"> <!-- container – отступы по бокам; mt – отступ сверху -->
    @include('includes.messages')
        <div class="row">
            <div class="col-8">
                 @yield('home')
            </div>
    <div class="col-4">
        @include('includes.aside')
    </div>
    @include('includes.footer')
</body>
</html>