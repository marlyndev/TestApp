<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SB Admin 2</title>
</head>
<body>


<h2>Customers Information</h2>

<p>Name: {{  strtoupper($customer->name) }} </p>

<p>Email: {{ $customer->email  }} </p>

<p>Phone_No: {{ $customer->phone  }} </p>

<p>Address: {{ $customer->address  }} </p>
    
</body>
</html>