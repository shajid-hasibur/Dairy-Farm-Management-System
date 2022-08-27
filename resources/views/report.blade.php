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
        <div class="content">
            <h1 class="table-name">Total Summary</h1>
            <table class="table-content">
                <tr>
                    <th>Total Member</th>
                    <th>Total Employee</th>
                    <th>Total Collected Milk</th>
                    <th>Total Expenses</th>
                    <th>Total Ordered Milk</th>
                    <th>Total Earnings</th>
                    <th>Profit</th>
                </tr>

                <tr>
                    <td>{{ $member }} Person</td>
                    <td>{{ $employee }} Person</td>
                    <td>{{ $milk }} Liter</td>
                    <td>{{ $total_price }}/- BDT</td>
                    <td>{{ $total_order }} Liter</td>
                    <td>{{ $total_earn }}/- BDT</td>
                    <td>{{ $profit }}/- BDT</td>
                </tr>
            </table>
            <div class="span">
                <h3 class="head">Current Month Summary</h3>
                @foreach ($delivery as $deli)
                <ul class="unlist">
                    <li>Total Order By This Month : {{ $deli->count }} Entry</li>
                    <li>Total Ordered Milk By This Month : {{ $deli->total }} Liter</li>                   
                </ul>

                @endforeach
                @foreach ($delivery1 as $deli1)
                <ul class="unlist">
                    <li>Total Collected Milk By This Month : {{ $deli1->total }} Liter</li>
                    <li>Total Collection By This Month : {{ $deli1->count }} Entry</li>                   
                </ul>
                @endforeach
                <h3 class="head">Current Year Summary</h3>
                @foreach ($delivery2 as $deli2)
                <ul class="unlist">
                    <li>Total Order By This Year : {{ $deli2->count }} Entry</li>
                    <li>Total Ordered Milk By This Year : {{ $deli2->total }} Liter</li>                   
                </ul>
                @endforeach

                @foreach ($delivery3 as $deli3)
                <ul class="unlist">
                    <li>Total Collected Milk By This Year : {{ $deli3->total }} Liter</li>
                    <li>Total Collection By This Year : {{ $deli3->count }} Entry</li>                   
                </ul>
                @endforeach
            </div>
        </div>
        <div class="re-back">
            <a class="bac-bt" href="{{ url('/farmer-list') }}">Back</a>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>