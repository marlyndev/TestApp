<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SB Admin 2</title>
</head>
<body>


<h2>Customers Information</h2>

<p>Name: {{  strtoupper($customers->name) }} </p>

<p>Email: {{ $customers->email  }} </p>

<p>Phone_No: {{ $customers->phone  }} </p>

<p>Address: {{ $customers->address  }} </p>
    
</body>
</html>