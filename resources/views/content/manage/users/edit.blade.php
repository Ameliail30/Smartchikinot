@extends('layout.admin')

@section('title', 'Manage User | Smart Chikinot')


@section('page','Manage Users')


@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>
    <div class="card mb-4">
        <div class="card-header pb-0">
            <h1>From Edit User</h1>
            @if (session('success'))
            <div>
                {{ session('success') }}
            </div>
            @endif
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" value="{{ $user->name }}" required><br>
                </div>
                <div>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" value="{{ $user->email }}" required><br>
                </div>
                <br>
        </div>
        <input type="Submit" value="Submit" update user class="btn btn-secondary font-weight-bold text-xs me-2"> </button>
        </form>
</body>

</html>

@endsection