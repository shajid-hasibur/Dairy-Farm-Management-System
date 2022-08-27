<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Damage Report</title>
    <link rel="stylesheet" href="{{ asset('css/farmer-list.css') }}">
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
        <div class="nav-bar">
          <a class="nav-btn" href="{{ route('logout') }}" onclick="event.preventDefault(); 
            document.getElementById('logout-form').submit();">Home</a>
            <a class="nav-btn" href="{{ url('/farmer-list') }}">Farmers</a>
            <a class="nav-btn" href="{{ url('/employees') }}">Employees</a>
            <a class="nav-btn"href="{{ url('/collection-list') }}">Collection</a>
            <a class="nav-btn" href="{{ url('/delivery') }}">Delivery</a>
            <a class="nav-btn" href="{{ url('/payment') }}">Payment</a>
            <a class="nav-btn" href="{{ url('/total_report') }}">Report</a>
        </div>
        <div class="content">
            <table class="table-content">
                <h1 class="table-name">Damage Report</h1>
                <tr>
                  <th>Delivery Id:</th>
                  <th>Delivery Man Id:</th>
                  <th>Company Name</th>
                  <th>Address</th>
                  <th>Delivery Amount:</th>
                  <th>Damage Amount:</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->employee_id }}</td>
                  <td>{{ $user->company_name }}</td>
                  <td>{{ $user->address }}</td>
                  <td>{{ $user->milk_amount }}</td>
                  <td>{{ $user->damage_amount }}</td>
                  <td>{{ $user->delivery_date }}</td>
                  <td>
                    <a class="button1" href="{{ url('/damage',$user->id) }}">Re&nbsp;deliver</a>
                  </td>
                </tr>
                @endforeach  
            </table>  
        </div>
          <div class="footer"></div>
    </div>
</body>
</html>