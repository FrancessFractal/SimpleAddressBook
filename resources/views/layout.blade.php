<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Simple Address Book</title>

</head>
<body>

    {{ session('status') }} <br />

    <a href="{{ route('entry.index') }}" >Home</a>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
