<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Staff Page</h1>
    <a href="{{ route('authentications.login') }}" class="btn btn-success"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="lni lni-exit"></i>
        <span>Logout</span>
    </a>
    <form id="logout-form" action="/logout" method="POST" style="display: none;">
        @csrf
    </form>
</body>

</html>
