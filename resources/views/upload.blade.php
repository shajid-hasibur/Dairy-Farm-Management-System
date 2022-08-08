<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Photo</title>
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

        <div class="content">
               <h1>Photo Upload</h1>
               <form method="POST" action="/upload" enctype="multipart/form-data">
                @csrf
               <input type="file" name="image">
               <input type="submit" name="Upload">
               </form>
            </hr>
            <ol>
                @foreach ($photos as $photo)

                <li>{{ $photo->name }} <img src="{{ asset('public/images') }}" width="70px" height="70px" alt="image"></li>

                @endforeach
            </ol>        

        </div>
        {{-- <div class="add">
        <a class="addbtn" href="{{route('collection.create')}}">Add</a>
        </div> --}}
        <div class="footer"></div>
    </div>
</body>
</html>