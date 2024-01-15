<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Simple Layout')</title>
    <!-- Add your stylesheets, scripts, or other head content here -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
    <!-- Add your scripts or other body content here -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
