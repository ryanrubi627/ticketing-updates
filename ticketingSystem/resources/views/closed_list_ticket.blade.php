<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous">            
    </script>
    <script src="{{ asset('js/main.js') }}"></script>

</head>
<body>
<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <div>
                <button type="button" class="btn btn-success" onclick="window.location='{{ url("/admin") }}'">Open List Ticket</button>
            </div><br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Ticket ID</th>
                        <th>Created by</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Importance</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($closed_tickets as $closed_ticket)
                    <tr>
                        <td>{{ $closed_ticket->ticket_number }}</td>
                        <td>{{ $closed_ticket->name }}</td>
                        <td>{{ $closed_ticket->title }}</td>
                        <td>{{ $closed_ticket->description }}</td>
                        <td>{{ $closed_ticket->importance }}</td>
                        <td>{{ $closed_ticket->date }}</td>
                        <td>
                            <a href="#" class="btn btn-primary view-btn">Reopen</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-1">
        </div>
    </div>
</div>
</body>
</html>