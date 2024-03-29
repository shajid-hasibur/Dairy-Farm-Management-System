<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Collection</title>
    <link rel="stylesheet" href="{{ asset('css/add-farmer.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
</head>
<body>
    <div class="container">
        <div class="header"><h1>Milk Collection & Distribution System</h1></div>
        <div class="nav-bar">
          
          <a class="nav-btn" href="{{ route('logout') }}" onclick="event.preventDefault(); 
          document.getElementById('logout-form').submit();">Home</a>
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
            <div class="title">Collection</div>
        <div class="content">
            <form action="{{route('collection.store')}}" method="POST">
                @csrf
                <div class="user-details">
            
                  <div class="input-box">
                    {{-- <span class="details">Name of Farmer:</span> --}}
                    <select class="select-box" name="farmer_id" aria-label="Default select example">
                        <option>Select Farmer</option>
        
                        @foreach ($farmers as $item)
                  
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                      </select>
                </div>
                  <div class="input-box">
                    <span class="details">Milk Amount</span>
                    <input type="text" name="amount" placeholder="Enter Milk Amount" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Price</span>
                    <input type="text" name="price" placeholder="Enter Price" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Date</span>
                    <input type="date" name="date" placeholder="Enter Date" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Status</span>
                    <input type="text" name="status" placeholder="Enter status" required>
                  </div>
                </div>
                <div class="button">
                  <input type="submit" value="Save">
                </div>
                <a class="back" href="{{ url('/collection-list') }}">Back</a>
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