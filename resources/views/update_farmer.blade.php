<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Farmer</title>
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
            <div class="title">Update Farmer</div>
        <div class="content">
          <form action="/edit" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $data['id'] }}">
            <div class="user-details">
              <div class="input-box">
                <span class="details">Serial-No:</span>
                <input type="text" name="serial_no" placeholder="Enter the number" value="{{ $data['serial_no'] }}" required>
              </div>
              {{-- <div class="input-box">
                <span class="details">Id-No:</span>
                <input type="text" name="id" placeholder="Enter ID" required>
              </div> --}}
              <div class="input-box">
                <span class="details">Name of Farmer:</span>
                <input type="text" name="name" placeholder="Enter the name"
                 value="{{ $data['name'] }}" required>
              </div>
              <div class="input-box">
                <span class="details">Locality of Farmer:</span>
                <input type="text" name="locality" placeholder="Area" 
                value="{{ $data['locality'] }}" required>
              </div>
              <div class="input-box">
                <span class="details">Farmer's A/C NO:</span>
                <input type="text" name="farmers_account" placeholder="Bank account number" value="{{ $data['farmers_account'] }}" required>
              </div>
              <div class="input-box">
                <span class="details">Farmer's Phone NO:</span>
                <input type="text" name="farmers_phone" placeholder="Phone number" value="{{ $data['farmers_phone'] }}" required>
              </div>
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