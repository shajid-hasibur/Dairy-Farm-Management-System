<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assign Employee</title>
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
        <input type="submit" value="Add Employee">
      </div>
    </form>



</body>
</html>