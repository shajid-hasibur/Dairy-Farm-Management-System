<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report Print</title>
</head>
<body>
    <div class="container">
    <div id="CauseToPrint">
    <h1>Cause Details</h1>
    <hr>
    
    
    <p><b>Farmer's Name: {{$user->name}}</b></p>
    <p><b>Farmer's Id: {{ $user->farmer_id }}</b></p>
    <p><b>Milk Amount: {{$user->milk_amount}}</b></p>
    <p><b>Price: {{$user->price}}</b></p>
    <p><b>Date: {{$user->date}}</b></p>
    <p><b>Status: {{$user->status}}<b></p>

     {{-- <a href="{{route('view.assign.volunteer',$cause->id)}}"><button type="button" class="btn btn-info">View Volunteer</button></a><br><br> --}}
    </div>
    
    <button class="btn btn-primary" type="submit" onClick="PrintDiv('CauseToPrint');" value="Print">Print</button>
    
    </div> 
    
    
    <script language="javascript">
        function PrintDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
        </script>
</body>
</html>