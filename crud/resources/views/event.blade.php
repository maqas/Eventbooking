<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
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
  @if(\Session::has('success'))
  <div class="alert"> 
    <h4> {{ \Session::get('success') }}</h4>
  </div> 

  @endif  
    <form action="/add_data" method="post">
    {{ csrf_field()  }}
    <div class="container"></div>
            <div class="jumbotron" style="margin-top: 5%">
                <h3>Event Booking</h3>
                <hr>
                <div class= "form-group">
                <label>Person booking</label>
                <input type="text" class="form-control" name="username" placeholder="Enter name of booker">
            </div>
            <div class= "form-group">
            <label for="exampleFormControlSelect1">Event name</label>
            <input type="text" class="form-control" name="event_list" placeholder="Enter Event Name">
            </div>
            <div class= "form-group">
                <label>Mobile Number</label>
                <input type="text" class="form-control" name="phoneno" placeholder="Enter Mobile Number">
            </div>
            <div class= "form-group">
                <label>Date of event</label>
                <input type="date" class="form-control" name="event_date" placeholder="Enter Event Date">
            </div>
            <div class= "form-group">
                <label for="exampleFormControlTextarea1">Who is attending the event?</label>
                <input type="text" class="form-control" name="description">
        
            </div>
            <input type="submit" name="submit" class="btn btn-success" vlaue="Save/Insert Date">
        </div>
    
    </form>
       
</body>
</html>