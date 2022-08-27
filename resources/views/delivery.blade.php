<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery</title>
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
          <span class="user">[ {{ Auth::user()->name }} ]</span>   
        </div>
        <div class="nav-bar">
          <?php if($login_user->role == '1') {?>
            <a class="nav-btn" href="{{ route('logout') }}" onclick="event.preventDefault(); 
            document.getElementById('logout-form').submit();">Home</a>          
            <a class="nav-btn" href="{{ url('/farmer-list') }}">Farmers</a>
            <a class="nav-btn" href="{{ url('/employees') }}">Employees</a>
            <a class="nav-btn" href="{{ url('/collection-list') }}">Collection</a>
            <a class="nav-btn" href="{{ url('/delivery') }}">Delivery</a>
            <a class="nav-btn" href="{{ url('/payment') }}">Payment</a>
            <a class="nav-btn" href="{{ url('/total_report') }}">Report</a>
          <?php } ?>
        </div>
        <div class="content">
        
            <table class="table-content">
                <h1 class="table-name">Deliveries</h1>
                <tr>
                  <th>Delivery Id</th>
                  <th>Company Name</th>
                  <th>Address</th>
                  <th>Contact</th>
                  <th>Milk Amount</th>
                  <th>Price</th>
                  <th>Delivery Man</th>
                  <th>Days Passed</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                  <td>{{ $user->id}}</td>
                  <td>{{ $user->company_name }}</td>
                  <td>{{ $user->address }}</td>
                  <td>{{ $user->contact }}</td>
                  <td>{{ $user->milk_amount }}</td>
                  <td>{{ $user->price }}</td>
                  @if ($user->employee_id=='')
                    <td>
                      <?php if($login_user->role == '1') {?>
                      <a class="addbtn1" href="{{route('assign',$user->id)}}">Assign</a>
                      <?php } ?>
                    </td>
                  @else
                    <td> {{ $user->employee->name }} </td>
                  @endif
                  <td>{{$user->days_passed}}</td>  
                  <td>
                  @if($login_user->role=='0' && $user->status=='Processing')
                  <a class="table-btn4" href="{{route('status.delivered',$user->id)}}">Delivered</a>
                  <a class="table-btn4" href="{{route('status.damaged',$user->id)}}">Damaged</a>
                  @if ($user->days_passed<=3)
                  <a class="table-btn4" style="pointer-events:none;">Reject</a>
                  @else 
                  <a class="table-btn4" href="{{route('status.rejected',$user->id)}}">Reject</a>    
                  @endif
                  
                  @else
                  <a class="table-btn4" href="#">{{$user->status}}</a>
                  @endif
                  </td>
                  <td>
                    <?php if($login_user->role == '1') {?>
                      <a class="table-btn" href="{{ route('view.delivery',$user->id) }}">View</a>
                      <a class="table-btn" href="{{ route('update.delivery',$user->id) }}">Update</a>
                      <a class="table-btn1" href="{{ route('delete.delivery',$user->id) }}">Delete</a>
                    <?php } ?>
                    
                    <?php if($login_user->role == '0') {?>
                      <a class="table-btn1" href="{{ url('/order',$user->id) }}">Check</a>
                    <?php } ?>
                  </td>
                </tr>
                @endforeach
              </table>
              <div class="paginator">
                {{ $users->links() }}
              </div>
              {{-- <span class="sum1">Total Milk Amount : {{ $data }}</span>
              <span class="Totalprice1">Total Earnings : {{ $data2 }}</span>     --}}
        </div>
        <div class="add">
        <?php if($login_user->role == '1') {?>  
        <a class="addbtn" href="{{ url('/add-delivery') }}">Add Delivery</a>
        <?php } ?>
        <div class="damage">
          <?php if($login_user->role == '1') {?>
          <a class="d-delivery" href="{{ url('/damage_report') }}">Damage Delivery</a>
          <?php } ?> 
       </div>
        </div>
        
        <div class="footer"></div>
    </div>
</body>
</html>