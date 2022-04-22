<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="{{ asset('css/farmer-list.css') }}">
</head>
<body>
    <div class="container">
        <div class="header"><h1>Milk Collection & Distribution System</h1>
          <div class="btn-logout">
            <a class="logout" href="{{ route('home') }}">Logout</a>
          </div>  
        </div>
        <div class="nav-bar">
            <a class="nav-btn" href="{{ url('/home') }}">Home</a>
            <a class="nav-btn" href="{{ url('/farmer-list') }}">Farmers</a>
            <a class="nav-btn" href="{{ url('/employees') }}">Employees</a>
            <a class="nav-btn" href="{{ url('/collection-list') }}">Collection</a>
            <a class="nav-btn" href="{{ url('/delivery') }}">Delivery</a>
            <a class="nav-btn" href="{{ url('payments/') }}">Payment</a>
            {{-- <a class="nav-btn" href="{{ url('/report') }}">Report</a> --}}
            {{-- <a class="nav-btn">Setting</a> --}}
        </div>
        <div class="content">
            <h1 class="table-name">Report</h1>
            <div class="text1">
                <p id="text2">To get the pdf of desire page please click download button</p>
            </div>
        </div>
        <div class="add">
        <a class="addbtn" href="{{ url('/generate-pdf') }}">Download PDF</a>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>