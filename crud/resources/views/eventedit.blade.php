<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>


<hr>
<div class="container">
    <div class="jumbotron">
    <form action="/update/{{ $eventbooking[0]->id }}" method="post">
    
    {{ csrf_field()  }}
    
            
                <h3>Edit Booking</h3>
                <hr>
                <div class= "form-group">
                <label>Person booking</label>
                <input type="text" class="form-control" name="username" value="{{ $eventbooking[0]->username }}" placeholder="Enter name of booker">
            </div>
            <div class= "form-group">
            <label for="exampleFormControlSelect1">Event name</label>
            <input type="text" class="form-control" name="event_list" value="{{ $eventbooking[0]->event_list }}" placeholder="Enter Event Name">
            </div>
            <div class= "form-group">
                <label>Mobile Number</label>
                <input type="text" class="form-control" name="phoneno" value="{{ $eventbooking[0]->phoneno }}" placeholder="Enter Mobile Number">
            </div>
            <div class= "form-group">
                <label>Date of event</label>
                <input type="date" class="form-control" name="event_date" value="{{ $eventbooking[0]->event_date }}" placeholder="Enter Event Date">
            </div>
            <div class= "form-group">
                <label for="exampleFormControlTextarea1">Who is attending the event?</label>
                <input type="text" class="form-control" name="description" value="{{ $eventbooking[0]->description }}"> 
        
            </div>
            <button type="submit" name="submit" class="btn btn-primary" style="width: 50%;">Update Data</button>
        </div>
    
    </form>

    </div>

</div>



    
</body>
</html>