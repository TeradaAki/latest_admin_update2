<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
</head>
<body>
    @extends('layout.header')
    @extends('layout.sidenav')

    @section('add_content')
    <div class="list_table">
        <div class="list_header">
            <h2>Dashboard</h2>
        </div>
        <hr>
        <div class="none">
            <p class="none_message"></p>
        </div>
    </div>
    @endsection
</body>
</html>
