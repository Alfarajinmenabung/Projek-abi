<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #121212; /* Dark background */
            color: #e5e5e5; /* Light text color */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #1e1e1e; /* Dark card background */
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            max-width: 400px; /* Restrict width */
            width: 100%; /* Full width up to max-width */
        }
        .form-group label {
            color: #e5e5e5; /* Light label text */
        }
        .form-control {
            background-color: #2c2c2c; /* Dark input background */
            color: #e5e5e5; /* Light text color in inputs */
            border: 1px solid #333; /* Dark border */
        }
        .form-control:focus {
            border-color: #1db954; /* Spotify green border on focus */
            box-shadow: none; /* Remove default Bootstrap focus shadow */
        }
        .btn {
            background-color: #1db954; /* Spotify green */
            border-color: #1db954;
            color: #ffffff; /* White text */
        }
        .btn:hover {
            background-color: #1ed760; /* Slightly lighter green on hover */
            border-color: #1ed760;
        }
        .text-center p a {
            color: #1db954; /* Spotify green for links */
        }
        .alert {
            border-radius: 8px; /* Rounded corners for alert box */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="font-weight-bold">Register User</h2>
            <hr>
        </div>
        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <form action="{{ route('actionregister') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="username"><i class="fa fa-user"></i> Username</label>
                <input type="text" id="username" name="username" placeholder="Username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password"><i class="fa fa-key"></i> Password</label>
                <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-block"><i class="fa fa-user"></i> Register</button>
            <hr>
            <p class="text-center">Already have an account? <a href="/">Login here!</a></p>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
