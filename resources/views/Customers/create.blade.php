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
    
                               <h6>Register New Customers</h5>
    
    
                            </div>
    
                            <div class="card-body">
                                <div class="col-lg-12">


                                   <form action="{{ route('customers.store') }}" method="POST">

                                    @csrf


                                    <div class="row">


                                        <div class="col-md-6">
                                            <label for="">Customer's Name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Email</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>

                                    </div>

                                    <div class="row mt-4">


                                        <div class="col-md-6">
                                            <label for="">Phone Number</label>
                                            <input type="tel" name="phone" class="form-control">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Address</label>
                                            <input type="text" name="address" class="form-control">
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