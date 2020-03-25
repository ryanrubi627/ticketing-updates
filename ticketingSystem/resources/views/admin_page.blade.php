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
                <button type="button" class="btn btn-success" onclick="window.location='{{ url("/admin/closed_ticket") }}'">Closed List Ticket</button>
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
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->ticket_number }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->title }}</td>
                        <td>{{ $user->description }}</td>
                        <td>{{ $user->importance }}</td>
                        <td>{{ $user->date }}</td>
                        <td>{!! Form::open(['url' => '/delete/'.$user->ticket_number, 'method' => 'POST']) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    <a href="#" class="btn btn-primary view-btn">View</a>
                                    {{Form::submit('Delete', ['class' => 'btn btn-primary'])}}
                            {!! Form::close() !!}
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


<!------------------------------------MODAL------------------------------------>

<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                <div class="form-group">
                    <label>Ticket ID:</label>
                    <input type="text" class="form-control" id="ticket_number-1" name='Ticket_number' disabled>
                </div>

                <div class="form-group">
                    <label for="pwd">Name:</label>
                    <input type="text" class="form-control" id="name-1" name='title1' disabled>
                </div>

                <div class="form-group">
                    <label for="pwd">Title:</label>
                    <input type="text" class="form-control" id="title-1" name='title1' disabled>
                </div>

                <div class="form-group">
                    <label for="comment">Description:</label>
                    <textarea class="form-control" rows="3" id="description-1" name='description1' disabled></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Importance:</label>
                    <select class="form-control" id="importance-1" name='importance1' disabled>
                        <option>Urgent</option>
                        <option>Low</option>
                        <option>High</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Date created:</label>
                    <input id="date-1" class="form-control" name="curTime" value="<?php echo date('D-M-Y')." ".gmdate("H:i:s", time()); ?>" size="20" maxlength="20"  disabled Required />
                </div>
        </div>
        <div class="modal-footer">
          <input type = 'submit' class="btn btn-primary" value = "Closed Ticket" id="sbmt-closed-tckt">
          <input type = 'submit' class="btn btn-primary" value = "Thread" id="sbmt-thread-tckt">
        </div>
      </div>
      
    </div>
  </div>
