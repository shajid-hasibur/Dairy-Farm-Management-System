<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add delivery</title>
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
            <a class="nav-btn" href="{{ url('payments/') }}">Payment</a>
            <a class="nav-btn" href="{{ url('/report') }}">Report</a>
            {{-- <a class="nav-btn" href="#">Settings</a> --}}
        </div>
        <div class="reg-form">
            <div class="title">Add Delivery</div>
        <div class="content">
          <form action="#" method="POST">
            @csrf
            <div class="user-details">
              <div class="input-box">
                <span class="details">Company Name</span>
                <input type="text" name="company_name" placeholder="Enter the name" required>
              </div>
              {{-- <div class="input-box">
                <span class="details">Id-No:</span>
                <input type="text" name="id" placeholder="Enter ID" required>
              </div> --}}
              <div class="input-box">
                <span class="details">Address</span>
                <input type="text" name="address" placeholder="Enter the address" required>
              </div>
              <div class="input-box">
                <span class="details">Milk Amount</span>
                <input type="text" name="milk_amount" placeholder="Enter amount" required>
              </div>
              <div class="input-box">
                <span class="details">Price</span>
                <input type="text" name="price" placeholder="Enter the price" required>
              </div>
              <div class="input-box">
                <span class="details">Status</span>
                <input type="text" name="status" placeholder="status" required>
              </div>
            </div>
            <div class="button">
              <input type="submit" value="Add Delivery">
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