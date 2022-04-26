<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery</title>
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
           <?php if($login_user->role == '1') {?>
            <a class="nav-btn" href="{{ url('/farmer-list') }}">Farmers</a>
            <a class="nav-btn" href="{{ url('/employees') }}">Employees</a>
            <a class="nav-btn" href="{{ url('/collection-list') }}">Collection</a>
          <?php } ?>
            <a class="nav-btn" href="{{ url('/delivery') }}">Delivery</a>
            <?php if($login_user->role == '1') { ?>
            <a class="nav-btn" href="{{ url('payments/') }}">Payment</a>
            <a class="nav-btn" href="{{ url('/report') }}">Report</a>
          <?php } ?>
            {{-- <a class="nav-btn">Setting</a> --}}
        </div>
        <div class="content">
        
            <table class="table-content">
                <h1 class="table-name">Deliveries</h1>
                <tr>
                  <th>Company Name</th>
                  <th>Company Id</th>
                  <th>Address</th>
                  <th>Milk Amount</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                  <td>{{ $user->company_name }}</td>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->address }}</td>
                  <td>{{ $user->milk_amount }}</td>
                  <td>{{ $user->price }}</td>
                  <td>{{ $user->status }}</td>
                  <td>
                      <a class="table-btn" href="{{ route('view.delivery',$user->id) }}">View</a>
                      <a class="table-btn" href="{{ route('update.delivery',$user->id) }}">Update</a>
                      <a class="table-btn1" href="{{ route('delete.delivery',$user->id) }}">Delete</a>
                  </td>
                </tr>
                @endforeach
              </table>    
        </div>
        <div class="add">
        <a class="addbtn" href="{{ url('/add-delivery') }}">Add Delivery</a>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>