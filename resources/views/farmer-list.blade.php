<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer list</title>
    <link rel="stylesheet" href="{{ asset('css/farmer-list.css') }}">
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
        </div>
        <div class="nav-bar">
          <a class="nav-btn" href="{{ url('/home') }}">Home</a>
            <a class="nav-btn" href="{{ url('/farmer-list') }}">Farmers</a>
            <a class="nav-btn" href="{{ url('/employees') }}">Employees</a>
            <a class="nav-btn"href="{{ url('/collection-list') }}">Collection</a>
            <a class="nav-btn" href="{{ url('/delivery') }}">Delivery</a>
            <a class="nav-btn" href="{{ url('payments/') }}">Payment</a>
            <a class="nav-btn" href="{{ url('/report') }}">Report</a>
            {{-- <a class="nav-btn">Setting</a> --}}
        </div>
        <div class="content">
            <table class="table-content">
                <h1 class="table-name">Farmers</h1>
                <tr>
                  <th>Serial No:</th>
                  <th>ID No:</th>
                  <th>Name</th>
                  <th>Locality</th>
                  <th>Account No:</th>
                  <th>Phone No:</th>
                  <th>Action</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                  <td>{{ $user->serial_no }}</td>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->locality }}</td>
                  <td>{{ $user->farmers_account }}</td>
                  <td>{{ $user->farmers_phone }}</td>
                  <td>
                      <a class="table-btn" href="{{ route('update.farmer',$user->id) }}">Update</a>
                      <a class="table-btn1" href="{{ route('delete.farmer',$user->id)}}">Delete</a>
                  </td>
                </tr>
                @endforeach
              </table>    
        </div>
        <div class="add">
        <a class="addbtn" href="add-farmer">Add Farmer</a>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>