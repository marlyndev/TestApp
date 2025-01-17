@extends('layouts.backend')

@section('content')

            
            <!-- /.row -->
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">


                        <div class="card-header bg-primary text-white">

                            <p> Drugs List</p>
                        </div>

                        <div class="card-body">
                            <div class="panel-body">

                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Generic Name</th>
                                            <th>Category</th>
                                            <th>Buying Price</th>
                                            <th>Selling Price</th>
                                            <th>Stock Quantity</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
    
    
                                       @foreach ($drugs as $drug)

                                       <tr>
                                        <td>{{ strtoupper($drug->generic_name) }}</td>


                                        <td>

                                           <label class="badge badge-pill bg-success text-white">
                                            @php
                                            $categoryName = \App\Models\Categories::find($drug->drug_category);
                                          
                                            echo $categoryName? strtoupper($categoryName->name) : "Not found";
                                        @endphp
                                           </label>
                                           
                                        </td>

                                        <td>
                                          TZS  {{ number_format($drug->buying_price) }}
                                        </td>

                                        <td>
                                          TZS  {{ number_format($drug->selling_price) }}
                                        </td>

                                        <td>
                                            {{ number_format($drug->stock_quantity)}}
                                        </td>
                                       </tr>
                                           
                                       @endforeach
    
                                    </tbody>
    
                                </table>
                             
                            </div>
                        </div>

                    </div>

                   
                </div>
                <!-- /.col-lg-12 -->
            </div>


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   
@endsection