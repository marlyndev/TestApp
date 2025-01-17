@extends('layouts.backend')

@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
          
            <div class="panel-body">
                <div class="row">


                    <div class="col-md-12">
                        <div class="card">


                            <div class="card-header bg-primary text-white">
    
                               <h6>Register New Drug</h5>
    
    
                            </div>
    
                            <div class="card-body">
                                <div class="col-lg-12">


                                   <form action="{{ route('drugs.store') }}" method="POST">
                                    @csrf

                                    <div class="row">

                                        <div class="col-md-4">
                                            <label for="">Select Category</label>
                                           
                                            <select class="form-control" name="drug_category" id="drug_category">

                                              @foreach($categories as $category)
                                              <option value="{{ $category->id }}">
                                                {{ strtoupper($category->name) }}
                                              </option>
                                              @endforeach

                                            </select>
                                        </div>


                                        <div class="col-md-4">
                                            <label for="">Generic Name</label>
                                            <input type="text" name="generic_name" class="form-control" placeholder="Generic Name">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="">Buying Price</label>
                                            <input type="number" name="buying_price" class="form-control" placeholder="0.00">
                                        </div>

                                    </div>

                                    <div class="row mt-4">


                                        <div class="col-md-6">
                                            <label for="">Selling Price</label>
                                            <input type="number" name="selling_price" class="form-control" placeholder="0.00">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Stock Quantity</label>
                                            <input type="number" name="stock_quantity" class="form-control" placeholder="0">
                                        </div>

                                    </div>



                                    
                                    <button class="btn btn-primary mt-4">Submit</button>
                                   </form>
                                    
                                </div>
                            </div>
    
                        </div>
                    </div>

                  
                    

                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
    
@endsection