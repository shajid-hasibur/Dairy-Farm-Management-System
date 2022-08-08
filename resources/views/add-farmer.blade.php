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
            <a class="nav-btn" href="{{ url('/collection-list') }}">Collection</a>
            <a class="nav-btn" href="{{ url('/delivery') }}">Delivery</a>
            <a class="nav-btn" href="{{ url('/payment') }}">Payment</a>
            <a class="nav-btn" href="{{ url('/total_report') }}">Report</a>
            {{-- <a class="nav-btn" href="{{ url('/report') }}">Report</a> --}}
            {{-- <a class="nav-btn" href="#">Settings</a> --}}
        </div>
        <div class="reg-form">
            <div class="title">Add Farmers</div>
        <div class="content">
          <form action="add-farmer" method="POST">
            @csrf
            <div class="user-details">
              <div class="input-box">
                <span class="details">Serial-No:</span>
                <input type="text" name="serial_no" placeholder="Enter the number" required>
              </div>
              {{-- <div class="input-box">
                <span class="details">Id-No:</span>
                <input type="text" name="id" placeholder="Enter ID" required>
              </div> --}}
              <div class="input-box">
                <span class="details">Name of Farmer:</span>
                <input type="text" name="name" placeholder="Enter the name" required>
              </div>
              <div class="input-box">
                <span class="details">Locality of Farmer:</span>
                <input type="text" name="locality" placeholder="Area" required>
              </div>
              <div class="input-box">
                <span class="details">Farmer's A/C NO:</span>
                <input type="text" name="farmers_account" placeholder="Bank account number" required>
              </div>
              <div class="input-box">
                <span class="details">Farmer's Phone NO:</span>
                <input type="text" name="farmers_phone" placeholder="Phone number" required>
              </div>
            </div>
            <div class="button">
              <input type="submit" value="Save">
            </div>
            <a class="back" href="{{ url('/farmer-list') }}">Back</a>
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