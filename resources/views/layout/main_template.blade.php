<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laracrud</title>

</head>
<body style="background-color: rgb(199, 199, 199)">
    
    @include('fragments/navbar')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    @if (session('status'))
        {{session('status')}}        
    @endif

    @yield('content')
</body>
</html>

