<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assign Employee</title>
    <style>
       body {
          margin-top: 200px;
          background-color: rgb(213, 236, 169);
          text-align: center;
       }
       select {
            height: 30px;
            background: rgb(213, 236, 169);
            outline: none;
            font-size: 15px;
            border-radius: 5px;
            padding-left: 15px;
            border: 2px solid rgb(7, 7, 7);
            border-bottom-width: 2px;
            transition: all 0.3s ease;
       }

       input {
            background-color: rgb(185 230 80);
            border: none;
            color: black;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            font-size: 17px;
            font-weight: 500;
            border-radius: 5px;
            height: 35px;
            line-height: 25px;
            width: 100px;    
       }

       input:hover{
        background: rgb(21, 93, 247);
        cursor: pointer;
       }
    </style>
</head>
<body>
    <h1>Assign Employee</h1>
    <form action="{{route('assign.store',$delivery->id)}}" method="POST">
      @method('PUT')
        @csrf
<div class="input-box">
    {{-- <span class="details">Name of Farmer:</span> --}}
    <select class="select-box" name="employee_id" aria-label="Default select example">
        <option>Select Employee</option>

        @foreach ($employees as $item)
  
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
      </select>
      <br><br>
      <div class="button">
        <input type="submit" value="Assign">
      </div>
    </form>

</body>
</html>