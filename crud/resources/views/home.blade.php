@extends('layouts.app')

@section('content')
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
@endsection
