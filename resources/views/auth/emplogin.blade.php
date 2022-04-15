<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <div class="header">
      <h1>Milk Collection & Distribution System</h1>
      <a href="home">
      <button class="btn1">Home</button>
      </a>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top: 150px;">
          <h4>Employee Login</h4>
          <form action="" method="post">
            @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>  
            @endif
            @if (Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>  
            @endif
            @csrf
            <div class="form-group">
              <label for="name">Email</label>
              <input type="email" class="form-control" placeholder="Enter the email" name="email" value="{{ old('email') }}">
              <span class="text-danger">@error('email'){{ $message }}@enderror</span>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" placeholder="Enter the password" name="password" value="">
              <span class="text-danger">@error('password'){{ $message }}@enderror</span>
            </div>
            <div class="form-group">
              <button class="btn btn-block btn-primary" type="submit">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
