<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Employee</title>
    <link rel="stylesheet" href="{{ asset('css/add-farmer.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
</head>
<body>
    <div class="container">
        <div class="header"><h1>Milk Collection & Distribution System</h1></div>
        <div class="nav-bar">
          
            <a class="nav-btn" href="{{ url('/home') }}">Home</a>
            <a class="nav-btn" href="{{ url('/farmer-list') }}">Farmers</a>
            <a class="nav-btn" href="{{ url('/employees') }}">Employees</a>
            <a class="nav-btn" href="#">Collection</a>
            <a class="nav-btn" href="{{ url('/delivery') }}">Delivery</a>
            <a class="nav-btn" href="#">Payment</a>
            <a class="nav-btn" href="#">Report</a>
            {{-- <a class="nav-btn" href="#">Settings</a> --}}
        </div>
        <div class="reg-form">
            <div class="title">Update Employee</div>
        <div class="content">
          <form action="/update" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $data['id'] }}">
            <div class="user-details">
              <div class="input-box">
                <span class="details">Name</span>
                <input type="text" name="name" placeholder="Enter the name" value="{{ $data['name'] }}" required>
              </div>
              {{-- <div class="input-box">
                <span class="details">Id-No:</span>
                <input type="text" name="id" placeholder="Enter ID" required>
              </div> --}}
              <div class="input-box">
                <span class="details">Email</span>
                <input type="text" name="email" placeholder="Enter the email"
                 value="{{ $data['email'] }}" required>
              </div>
              <div class="input-box">
                <span class="details">Phone</span>
                <input type="text" name="phone" placeholder="Enter phone number" 
                value="{{ $data['phone'] }}" required>
              </div>
              <div class="input-box">
                <span class="details">Role</span>
                <input type="text" name="role" placeholder="Enter the role" value="{{ $data['role'] }}" required>
              </div>
              {{-- <div class="input-box">
                <span class="details">Farmer's Phone NO:</span>
                <input type="text" name="farmers_phone" placeholder="Phone number" value="{{ $data['farmers_phone'] }}" required>
              </div> --}}
            </div>
            <div class="button">
              <input type="submit" value="Update">
            </div>
          </form>
        </div>
      </div>
      <div class="footer"></div>    
    </div>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>
</html>