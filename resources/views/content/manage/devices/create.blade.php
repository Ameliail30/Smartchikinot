@extends('layout.admin')

@section('title', 'Manage Device | Smart Chikinot')

@section('page','Manage Devices')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create Device</title>
</head>

<body>
    <div class="card mb-4">
        <div class="card-header pb-0">
            <h1>From Create Device</h1>
            @if (session('success'))
            <div>
                {{ session('success') }}
            </div>
            @endif
            <form action="{{ route('devices.store') }}" method="POST">
                @csrf
                <div>
                    <label for="user_d">User_id:</label><br>
                    <input type="user _id" id="user_id" name="user_id" required><br>
                </div>
                <div>
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" required><br>
                </div>
                <div>
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password" required><br>
                </div>
                <br>
        </div>
        <input type="Submit" value="Submit" update device class="btn btn-secondary font-weight-bold text-xs me-2"> </button>
        </form>
</body>
</html>
@endsection