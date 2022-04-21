<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection list</title>
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
            <a class="nav-btn" href="{{ url('/report') }}">Report</a>
            {{-- <a class="nav-btn">Setting</a> --}}
        </div>
        <div class="content">
            <table class="table-content">
                <h1 class="table-name">Collection List</h1>
                <tr>
                  <th>Id</th>
                  <th>Farmer's Id</th>
                  <th>Farmer's Name</th>
                  <th>Milk Amount</th>
                  <th>Price</th>
                  <th>Date</th>
                  {{-- <th>Status</th> --}}
                  <th>Action</th>
                </tr>
                @foreach ($collections as $item)
                {{-- @dd($collections) --}}
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->farmer->serial_no }}</td> 
                  <td>{{ $item->farmer->name }}</td>
                  <td>{{ $item->milk_amount }}</td>
                  <td>{{ $item->price }}</td>
                  <td>{{ $item->date }}</td>
                  {{-- <td>{{$item->status}}</td> --}}
                  <td>
                     <a class="table-btn" href="{{ route('collection.edit',$item->id) }}">Update</a> 
                      <a class="table-btn1" href="{{ route('delete.collection',$item->id) }}">Delete</a> 
                  </td>
                </tr>
                @endforeach
              </table>    
        </div>
        <div class="add">
        <a class="addbtn" href="{{route('collection.create')}}">Add</a>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>

