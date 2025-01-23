@extends('layouts.backend')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>

<h1>
    Drug Registration Form
</h1>



<form method="POST" action="{{ route('drugs.update', ['id' => $drugs->id] ) }}">
@csrf

<div class="row">

    <div class="col-md-6">
        <div class="form-group">

<label for="">Generic Name</label>
<input class="form-control" type="text" name="generic_name" value="{{ $drugs->generic_name }}">

</div>
</div>

<div class="col-md-6">
    <div class="form-group">

<label for="">Category</label>
<input class="form-control" type="text" name="category" value="{{ $drugs->drug_category }}">

</div>
</div>
</div>

<div class="row mt-4">
<div class="col-md-6">
    <div class="form-group">

<label for="">Brand</label>
<input class="form-control" type="text" name="brand" value="{{ $drugs->drug_brand }}">

{{-- <div class="form-group form-control" >
    <select name="brand">
        <option value="1">Panadol</option>
        <option value="2">Pfizer</option>
        <option value="3">Sanofi</option>
        <option value="4">Artemether-Lumefantrine</option>
        <option value="5">Azuma</option>
        <option value="6">Amoxylyn</option>
    </select>
    </div> --}}

</div>
</div>

<div class="col-md-6">
    <div class="form-group">

<label for="">Buying Price</label>
<input class="form-control" type="number" name="buying_price" value="{{ $drugs->buying_price }}">
</div>
</div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="form-group">
    
    <label for="">Selling Price</label>
    <input class="form-control" type="number" name="selling_price" value="{{ $drugs->selling_price }}">
    
    </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
    
    <label for="">Stock Quantity</label>
    <input class="form-control" type="number" name="stock_quantity" value="{{ $drugs->stock_quantity }}">
    </div>
    
    </div>

</div>

<button type="submit" class="btn btn-primary mt-2">
    Update
</button>






</form>
    
</body>
</html>

@endsection