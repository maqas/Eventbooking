<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eventview Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <hr>

                    <div>
                    <button type="button" btn btn-dark>
                    <a href="home">Home</a>
                    </button>
                    <button type="button" btn btn-dark>
                    <a href="add_data">Book Event</a>
                    </button>
                    <button>
                    <a href="eventview">View Booked Events</a>
                    </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
  <div class="container">
    <div class="jumbotron">
        <h1>Display / Fetch Data in Laravel </h1>
        <hr>
            <div class="line" style="text-align:right;">
                <a href="add_data" class="btn btn-primary">Add</a>
            </div><br>
            <form >
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Event ID</th>
                            <th>User Name</th>
                            <th>Event Name</th>
                            <th>Phone Number</th>
                            <th>Event Date</th>
                            <th>Attendees</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    <tbody>    
                    </thead>
                        @foreach($eventbooking as $row)
                        <tr style="background: white;">
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->username }}</td>
                            <td>{{ $row->event_list }}</td>
                            <td>{{ $row->phoneno }}</td>
                            <td>{{ $row->event_date }}</td>
                            <td>{{ $row->description }}</td>
                            <td> <a href="click_edit/{{ $row->id }}" class="btn btn-success">Edit</a></td>
                            <td>
                                <a href="/click_delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>    
    </div>
  </div>  
</body>
</html>