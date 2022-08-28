<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
</head>
<body>
    <div class="container">
    <div id="CauseToPrint">
    <h1>Delivery Details</h1>
    <hr>
    
    
    <p><b>Company Name: {{$user->company_name}}</b></p>
    <p><b>Company Id: {{ $user->id }}</b></p>
    <p><b>Address: {{$user->address}}</b></p>
    <p><b>Milk Amount: {{$user->milk_amount}}</b></p>
    <p><b>Price: {{$user->price }}</b></p>
    <p><b>Deliveryman: {{$user->employee->name }}</b></p>
    {{-- <p><b>Delivery Status: {{$user->delivery_status}}<b></p>
    <p><b>Payment Status: {{$user->payment_status}}<b></p> --}}
    

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