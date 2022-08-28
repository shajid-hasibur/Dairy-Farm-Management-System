<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee list</title>
    <link rel="stylesheet" href="{{ asset('css/employee.css') }}">
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
            <a class="nav-btn" href="{{ url('/collection-list') }}">Collection</a>
            <a class="nav-btn" href="{{ url('/delivery') }}">Delivery</a>
            <a class="nav-btn" href="{{ url('/payment') }}">Payment</a>
            <a class="nav-btn" href="{{ url('/total_report') }}">Report</a>
            {{-- <a class="nav-btn" href="{{ url('/report') }}">Report</a> --}}
            {{-- <a class="nav-btn">Settings</a> --}}
        </div>
        <div class="content">
            <table class="table-content">
                <h1 class="table-name">Delivery Man</h1>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->phone }}</td>
                  <td>{{ $user->role }}</td>
                  <td>
                      <a class="table-btn" href="{{ route('update.employee',$user->id) }}">Update</a>
                      <a class="table-btn1" href="{{ route('delete.employee',$user->id) }}">Delete</a>
                  </td>
                </tr>
                @endforeach
              </table>
              <div class="paginator">
                {{ $users->links() }}
              </div>
              {{-- <span class="count">Total Employees : {{ $data }}</span>     --}}
        </div>
        <div class="add">
        <a class="addbtn" href="add-employee" >Add Employee</a>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>