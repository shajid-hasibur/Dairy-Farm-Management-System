<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="{{ asset('css/report.css') }}">
    <script src="https://kit.fontawesome.com/2dae312828.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="header"><h1>Milk Collection & Distribution System</h1>
            <div class="btn-logout">
                <a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                document.getElementById('logout-form').submit();">Logout</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
            </div>
              <span class="user">{{ Auth::user()->name }}</span>
              <i class="fa-solid fa-user"></i>  
        </div>
        {{-- <div class="nav-bar">
            <a class="nav-btn" href="{{ url('/home') }}">Home</a>
            <a class="nav-btn" href="{{ url('/farmer-list') }}">Farmers</a>
            <a class="nav-btn" href="{{ url('/employees') }}">Employees</a>
            <a class="nav-btn" href="{{ url('/collection-list') }}">Collection</a>
            <a class="nav-btn" href="{{ url('/delivery') }}">Delivery</a>
            <a class="nav-btn" href="{{ url('/payment') }}">Payment</a>
            <a class="nav-btn" href="{{ url('/total_report') }}">Report</a>
        </div> --}}
        <div class="content">
            <h1 class="table-name">Report</h1>
            <div class="text1">
             <div class="row">   
             <ul>            
                <li class="list"> <p class="report_item">Total Member : {{ $member }} Person</p><br/><br/></li>
                <li class="list"><p class="report_item">Total Employee : {{ $employee }} Person</p><br/><br/></li>
                <li class="list"><p class="report_item">Total Collected Milk : {{ $milk }} Liter</p><br/><br/></li>
                <li class="list"><p class="report_item">Total Expenses : {{ $total_price }}/- BDT</p><br/><br/></li>
                <li class="list"><p class="report_item">Total Ordered Milk : {{ $total_order }} Liter</p><br/><br/></li>
                <li class="list"><p class="report_item">Total Earnings : {{ $total_earn }}/- BDT</p></li>
             </ul>
             </div>   
            </div>
            <div class="back-bt">
                <a class="btn-b" href="{{ url('/farmer-list') }}">Back</a>
            </div>
        </div>
        {{-- <div class="add">
        <a class="addbtn" href="#">Download PDF</a>
        </div> --}}
        <div class="footer"></div>
    </div>
</body>
</html>